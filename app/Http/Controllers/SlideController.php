<?php

namespace App\Http\Controllers;

use App\Models\slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $slides = slide::all();
        return view('Admin.slide.view',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Admin.slide.form');
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
            'title' => 'required', 
            'subtitle' => 'required', 
            'slides_image' => 'required|mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "slides_image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'slides_image.*.max' => "Maximum File Size is 2 MB"
       ]);

        if ($request->has('slides_image') && $request->slides_image != null) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->slides_image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/slide';
            $request->slides_image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/slide/' . $imageName;
            $final_image = $imageName;
        } else {
            $imageName = null;
        }
        $add = new slide;
        $add->title = $request->title;
        $add->subtitle = $request->subtitle;
        $add->src = (!empty($final_image)) ? $final_image : 'No image Specified';
        $add->save();
        if($add)
        {
            return redirect()->route('slides.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $slide = slide::find($id);
         return view('Admin.slide.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slide $slide)
    {
         $request->validate([
            'title' => 'required', 
            'subtitle' => 'required', 
            'slides_image' => 'mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "slides_image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'slides_image.*.max' => "Maximum File Size is 2 MB"
       ]);

        if ($request->has('slides_image') && $request->slides_image != null) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->slides_image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/slide';
            $request->slides_image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/slide/' . $imageName;
            $final_image = $imageName;
        } else {
            $imageName = null;
        }
        $add = slide::find($request->hidden_id);
        $add->title = $request->title;
        $add->subtitle = $request->subtitle;
        if($request->slides_image)
        {
            $add->src = (!empty($final_image)) ? $final_image : 'No image Specified';
        }
        $add->save();
        if($add)
        {
            return redirect()->route('slides.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $flag = slide::find($id)->delete();
        if($flag)
        {
            return redirect()->route('slides.index');
        }
        else
        {
            return redirect()->route('slides.crate');
        }
    }
}
