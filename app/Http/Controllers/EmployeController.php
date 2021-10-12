<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = employe::all();
        return view('Admin.employe.view',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.employe.form');
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
            'name' => 'required', 
            'designation' => 'required', 
            'class' => 'required', 
            'bio' => 'required', 
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', 

            'employe_image' => 'required|mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "employe_image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'employe_image.*.max' => "Maximum File Size is 2 MB"
       ]);

        if ($request->has('employe_image') && $request->employe_image != null) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->employe_image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/employe';
            $request->employe_image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/employe/' . $imageName;
            $final_image = $imageName;
        } else {
            $imageName = null;
        }
        $add = new employe;
        $add->name = $request->name;
        $add->designation = $request->designation;
        $add->class = $request->class;
        $add->bio = $request->bio;
        $add->contact = $request->contact;
        $add->image = (!empty($final_image)) ? $final_image : 'No image Specified';
        $add->save();
        if($add)
        {
            return redirect()->route('employe.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = employe::find($id);
        return view('Admin.employe.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employe $employe)
    {
         $request->validate([
            'name' => 'required', 
            'designation' => 'required', 
            'class' => 'required', 
            'bio' => 'required', 
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10', 

            'employe_image' => 'mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "employe_image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'employe_image.*.max' => "Maximum File Size is 2 MB"
       ]);

        if ($request->has('employe_image') && $request->employe_image != null) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->employe_image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/employe';
            $request->employe_image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/employe/' . $imageName;
            $final_image = $imageName;
        } else {
            $imageName = null;
        }
        $add = employe::find($request->hidden_id);
        $add->name = $request->name;
        $add->designation = $request->designation;
        $add->class = $request->class;
        $add->bio = $request->bio;
        $add->contact = $request->contact;
        if($request->employe_image)
        {
            $add->image = (!empty($final_image)) ? $final_image : 'No image Specified';
        }
        $add->save();
        if($add)
        {
            return redirect()->route('employe.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $flag = employe::find($id)->delete();
        if($flag)
        {
            return redirect()->route('employe.index');
        }
        else
        {
            return redirect()->route('employe.crate');
        }
    }
}
