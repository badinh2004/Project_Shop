<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::query()->get();
        return view('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images ', $fileName);
        $request->merge(['image' => $fileName]);

        $banners = Banner::create($request->all());
        if ($banners && $request->hasFile("photos")) {
            foreach ($request->photos as $key => $value) {
                $fileNames = $value->getClientOriginalName();
                $value->storeAs("public/images", $fileNames);
            }
        }
        return redirect()->route('banners.index')->with('success', 'successfully');

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
        $banners = Banner::query()->where('id',$id)->get()->first();
        return view('admin.banner.edit',compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $banner->update($request->all());
        // dd($banner);
        if ($request->hasFile('photo')) {
            if ($banner->image) {
                Storage::delete('public/images/' . $banner->image);
            }
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images', $fileName);
            $banner->image = $fileName;
            $banner->save();
        }
        return  redirect()->route('banners.index')->with('success', 'successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Banner::find($id)->delete();
        return back()->with('success','DELETE Successfully!!');
    }
}
