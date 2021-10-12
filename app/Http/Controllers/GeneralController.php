<?php

namespace App\Http\Controllers;

use App\Models\general;
use Illuminate\Http\Request;
use Validator;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $generals = general::all();
        
        return view('Admin.generals.view',compact('generals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.generals.form');
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
            'key' => 'required', 
          /*  'value' => 'required', */
             'image' => 'mimes:gif,jpg,jpeg,png,bmp|max:3072',
           ],[
               "image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
                'image.*.max' => "Maximum File Size is 2 MB"  
           ]);
 

        if ($request->has('image')) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/general';
            $request->image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/general/' . $imageName;
            $final_image = $imageName;
        }

          $add = new general;
          $add->key = $request->key;
          
          $add->value = (!empty($final_image)) ? $final_image : $request->value;
           if(!$request->status)
            {            
                $add->status ="0";
            }
            else
            {
                $add->status =$request->status;
            }
          $add->save();

          if($add)
          {
             return redirect()->route('general.index');
          }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\general  $general
     * @return \Illuminate\Http\Response
     */
    public function show(general $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\general  $general
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $general = general::find($id);
        return view('Admin.generals.edit',compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\general  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, general $general)
    {   
        $request->validate([
            'key' => 'required', 
          /*  'value' => 'required', */
             'image' => 'mimes:gif,jpg,jpeg,png,bmp|max:3072',
           ],[
               "image.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
                'image.*.max' => "Maximum File Size is 2 MB"  
           ]);


        if ($request->has('image')) {
            $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $request->image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/general';
            $request->image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/general/' . $imageName;
            $final_image = $imageName;
        }

          $add = general::find($request->hidden_id);
          $add->key = $request->key;
          
          $add->value = (!empty($final_image)) ? $final_image : $request->value;
           if(!$request->status)
            {            
                $add->status ="0";
            }
            else
            {
                $add->status =$request->status;
            }
          $add->save();

          if($add)
          {
             return redirect()->route('general.index');
          }





         /* $add = general::find($request->hidden_id);
          $add->key = $request->key;
          $add->value = $request->value;
           if(!$request->status)
            {            
                $add->status ="0";
            }
            else
            {
                $add->status =$request->status;
            }
          $add->save();

          if($add)
          {
             return redirect()->route('general.index');
          }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\general  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = general::find($id)->delete();
        if($flag)
        {
             return redirect()->route('general.index');
        }
        else
        {
             return redirect()->route('general.index');
        }
    }
}
