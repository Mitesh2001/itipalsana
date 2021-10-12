<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
         $gallerys = gallery::all();
        return view('Admin.gallery.view',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.gallery.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'category' => 'required', 
            'gallery_image' => 'required|mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "gallery_image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'gallery_image.*.max' => "Maximum File Size is 2 MB"
       ]);

        if ($request->has('gallery_image') && $request->gallery_image != null) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->gallery_image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/gallery';
            $request->gallery_image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/gallery/' . $imageName;
            $final_image = $imageName;
        } else {
            $imageName = null;
        }
        $add = new gallery;
        $add->category = $request->category;
        $add->image = (!empty($final_image)) ? $final_image : 'No image Specified';
        $add->save();
        if($add)
        {
            return redirect()->route('gallery.index');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = gallery::find($id);
        return view('Admin.gallery.edit',compact('gallery'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    { 
          $request->validate([
            'category' => 'required', 
            'gallery_image' => 'mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "gallery_image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'gallery_image.*.max' => "Maximum File Size is 2 MB"
       ]);

        if ($request->has('gallery_image') && $request->gallery_image != null) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->gallery_image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/gallery';
            $request->gallery_image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/gallery/' . $imageName;
            $final_image = $imageName;
        } else {
            $imageName = null;
        }
        $add = gallery::find($request->hidden_id);
        $add->category = $request->category;
        if($request->gallery_image)
        {
            $add->image = (!empty($final_image)) ? $final_image : 'No image Specified';
        }
        $add->save();
        if($add)
        {
            return redirect()->route('gallery.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = gallery::find($id)->delete();
        if($flag)
        {
            return redirect()->route('gallery.index');
        }
        else
        {
            return redirect()->route('gallery.crate');
        }
        
    }
}
