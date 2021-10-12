<?php

namespace App\Http\Controllers;

use App\Models\trades;
use App\Models\image_trades;
use Illuminate\Http\Request;
use Validator;

class TradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trades = trades::all();
        $image_trades = image_trades::all();

        return view('Admin.trades.view',compact('trades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.trades.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /* $request->validate([
            'name' => 'required', 
            'affilated' => 'required', 
            'seats' => 'required', 
            'batches' => 'required', 
          
            
            'eligibility' => 'required', 
            'duration' => 'required', 
            'benefits' => 'required', 
            'images' => 'required|mimes:gif,jpg,jpeg,png,bmp|max:3072', 
       ],[
             "images.*.mimes" => "Invalid image files, please upload file with file type (.gif, .jpeg, .png, .jpg,.bmp) only",
            'images.*.max' => "Maximum File Size is 2 MB"
       ]);*/
       
        
        $add = new trades;
        $add->name = $request->name;
        $add->affilated = $request->affilated;
        $add->seats = $request->seats;
        $add->batches = $request->batches;
        $add->duration = $request->duration;
        $add->eligibility = $request->eligibility;
        $add->benefits = $request->benefits;
        $add->save();



          if ($request->has('images') && $request->images != null) {
           foreach ($request->images as $image) {
             $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/trades';
            $image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/trades/' . $imageName;
            $final_image = $imageName;

            $imgadd = new image_trades;
            $imgadd->trade_id = $add->id;
            $imgadd->image = $final_image;
            $imgadd->save();
            } 
         }

        if($imgadd)
        {
            return redirect()->route('trades.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trades  $trades
     * @return \Illuminate\Http\Response
     */
    public function show(trades $trades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trades  $trades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trades = trades::find($id);
        $image_trades = image_trades::where('trade_id',$id)->get();
        return view('Admin.trades.edit',compact('trades','image_trades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trades  $trades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trades $trades)
    {
        $add = trades::find($request->hidden_id);
        $add->name = $request->name;
        $add->affilated = $request->affilated;
        $add->seats = $request->seats;
        $add->batches = $request->batches;
        $add->duration = $request->duration;
        $add->eligibility = $request->eligibility;
        $add->benefits = $request->benefits;
        $add->save();



          if ($request->has('images') && $request->images != null) {
            image_trades::where('trade_id',$add->id)->delete();
           foreach ($request->images as $image) {
             $name = time() . mt_rand(10000, 99999);
            $imageName = $name . '.' . $image->getClientOriginalExtension();
            $originalPath = public_path() . '/img/trades';
            $image->move($originalPath, $imageName);
            $imageName = env('APP_URL') . '/img/trades/' . $imageName;
            $final_image = $imageName;

            $imgadd = new image_trades;
            $imgadd->trade_id = $add->id;
            $imgadd->image = $final_image;
            $imgadd->save();
            } 
         }

        if($add)
        {
            return redirect()->route('trades.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trades  $trades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = trades::find($id)->delete();
         if($flag)
        {
            return redirect()->route('trades.index');

        }

        
    }
}
