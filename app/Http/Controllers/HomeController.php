<?php

namespace App\Http\Controllers;

use App\Etiqueta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        //si queremos que este controlador solo lo pueda ver el admin se pone asi
        //$this->middleware('roles:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //dd($this->middleware('roles:admin'));

        if(Auth::user()->rol=='admin'){

            $etiquetas = Etiqueta::all();

            $countEtiquetas = DB::table('etiquetas')->count();

            return view('admin.home', compact('etiquetas', 'countEtiquetas'));

        }elseif(Auth::user()->rol=='alumno'){


            return view('alumno.home');


        }elseif(Auth::user()->rol=='profesor'){

            return view('profesor.home');



        }else{
            return view('invitado.home');
        }


    }
}
