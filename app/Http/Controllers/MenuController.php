<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Validator;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = menu::all();
        return view('Admin.menu.view',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.menu.form');
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
            'menuName' => 'required', 
            'menuLink' => 'required',
        ]);
        $add = new menu;
        $add->menuName = $request->menuName;
        $add->menuLink = $request->menuLink;
        $add->submenu = $request->submenu;
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
            return redirect()->route('menus.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = menu::find($id);
        return view('Admin.menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
        $request->validate([
            'menuName' => 'required', 
            'menuLink' => 'required',
        ]);
        $add = menu::find($request->hidden_id);
        $add->menuName = $request->menuName;
        $add->menuLink = $request->menuLink;
        $add->submenu = $request->submenu;
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
            return redirect()->route('menus.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = menu::find($id)->delete();
        if($flag)
        {
             return redirect()->route('menus.index');
        }
        else
        {
             return redirect()->route('menus.index');
        }
    }
}
