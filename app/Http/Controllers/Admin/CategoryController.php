<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::orderBy('id','desc')->get();
        return view('admin.category.tableCategory',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        try {
            category::create($req->all());
            return Redirect::route('category.index')->with('success','Successflly');
        } catch (\Throwable $th) {
            dd($th -> getMessage());
            return Redirect::back()->with('error','Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $req)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        $editCate = category::where('id',$category->id)->first();
        return view('admin.category/editCategory',compact('category','editCate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, category $category)
    {
        try {
            $category->update($req->all());
            return Redirect::route('category.index')->with('success','successflly');
        } catch (\Throwable $th) {
            return Redirect::back()->with('error','Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $delcate = category::find($id)->delete();
            return Redirect::route('category.index')->with('success','Delete successfully');
        } catch (\Throwable $th) {
            return Redirect::back()->with('success','Delete successfully');
        }
    }
}
