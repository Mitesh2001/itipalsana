<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Http\Request;
use Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = page::all();
        return view('Admin.page.view',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.page.form');
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
            'page_title' => 'required',
            
        ]);
        $add = new page;
        $add->page_title = $request->page_title;
        $add->category = $request->category;
        $add->content = $request->content;
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
            return redirect()->route('page.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $page = page::find($id);
        return view('Admin.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {
        $request->validate([
            'page_title' => 'required',
            
        ]);
        $add = page::find($request->hidden_id);
        $add->page_title = $request->page_title;
        $add->category = $request->category;
        $add->content = $request->content;
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
            return redirect()->route('page.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         $flag = page::find($id)->delete();
        if($flag)
        {
             return redirect()->route('page.index');
        }
        else
        {
             return redirect()->route('page.index');
        }
    }
}
