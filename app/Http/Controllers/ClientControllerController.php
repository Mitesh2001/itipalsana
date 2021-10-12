<?php

namespace App\Http\Controllers;

use App\Models\ClientController;
use App\Models\gallery;
use App\Models\general;
use App\Models\trades;
use App\Models\image_trades;
use App\Models\employe;
use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\page;
class ClientControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = slide::all();
        $principal = employe::where('id',1)->first();
        $trades = trades::all();
        $gallerys = gallery::all();
        $generals = general::all();
        return view('client.index', compact('slides','principal','trades','gallerys','generals'));
    }
   


    public function common_url($id)
    { 
        $data = page::where('id',$id)->first();
        if(isset($data))
        {
            return view('client.common_page', compact('data'));
        }
        else
        {
            abort(404);
        }
    }
    

   
    

  
}
