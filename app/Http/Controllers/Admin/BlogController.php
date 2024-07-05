<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blogs::with(['categorys', 'users'])->get();
        // dd($blog);
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = category::all();
        return view('admin.blog.add',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images ', $fileName);
        $request->merge(['image' => $fileName]);
        try {
            $user_id = Auth::guard('users')->id();
            // dd($request->title);
            $data = [
                'title' => $request->title,
                'image' => $fileName, 
                'slug' => $request->slug,
                'description' => $request->description,
                'sortdescription' => $request->sortdescription,
                'category_id' => $request->category_id,
                'user_id' => $user_id
            ];

            // Tạo bài viết mới trong bảng Blogs
            $blogs = Blogs::create($data);

            if ($blogs && $request->hasFile("photos")) {
                foreach ($request->photos as $key => $value) {
                    $fileNames = $value->getClientOriginalName();
                    $value->storeAs("public/images", $fileNames);
                }
            }
            return Redirect::route('blogs.index')->with('success', 'successfully');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return Redirect::back()->with('error', 'Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cate = category::all();
        $blog = Blogs::find($id);
        return view('admin.blog.edit',compact('cate','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blogs $blog)
    {
        $blog->update($request->all());
        // dd($request->all());
        if ($request->hasFile('photo')) {
            if ($blog->image) {
                # code...
                Storage::delete('public/images/' . $blog->image);
            }
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images', $fileName);
            $blog->image = $fileName;
            $blog->save();
        }
        return Redirect::route('blogs.index')->with('success', 'successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blogs::findOrFail($id);
            if ($blog->image) {
                Storage::delete('public/images/' . $blog->image);
            }
            $blog->delete();
            return Redirect::route('blogs.index')->with('success', 'Delete successfully');
        } catch (\Throwable $th) {
            return Redirect::back()->with('error', 'Delete failed');
        }
    }
}
