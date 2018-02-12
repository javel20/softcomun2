<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('home controler');
        $proyectoss = Proyecto::where('user_id',Auth()->user()->id)->get();
        //dd(Auth()->user()->id);
        return view("proyectos.indexporlogin")->with([
             'proyectoss' => $proyectoss
        ]);

        return view('asd');
    }
}
