<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\HechoFormRequest;
use App\Hecho;

class HechosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:alumno');
    }

    public function index(){

        $hechos = Hecho::all();

        return view('hechos.index', compact('hechos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('hechos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $slug = uniqid();
       $hecho = new Hecho(array(
        'titulo' => $request->get('titulo'),
        'descripcion' => $request->get('descripcion'),
        'slug' => $slug
        ));
       $hecho->save();
       return redirect('/nuevo-hecho')-> with('status', 'Has creado un nuevo hecho. Su identificador único es: ' .$slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $hecho = Hecho::whereSlug($slug)->firstOrFail();

        return view('hechos.show', compact('hecho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $hecho = Hecho::whereSlug($slug)->firstOrFail();
        return view('hechos.edit', compact('hecho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($slug,Request $request)
    {
        $hecho = Hecho::whereSlug($slug)->firstOrFail();
        $hecho->titulo = $request->get('titulo');
        $hecho->descripcion = $request->get('descripcion');

        if($request->get('status') != null) {
            $hecho->status = 0;
        } else {
            $hecho->status = 1;
        }
        $hecho->save();
        return redirect(action('HechosController@edit', $hecho->slug))->with('status', 'El hecho con id '.$slug.' ha sido actualizado');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
        {
            $hecho = Hecho::whereSlug($slug)->firstOrFail();
            $hecho->delete();
            return redirect('/hechos')->with('status', 'El hecho '.$slug.' ha sido borrado');
        }
}
