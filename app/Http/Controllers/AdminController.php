<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AltaFormRequest;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function altas()
    {
        return view('admin.altas');
    }

    public function store(AltaFormRequest $request)
    {

        $alta = new User(array(
            'name' => $request->get('name'),
            'rol' => $request->get('rol'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ));

        $alta->save();
        return redirect('/admin/altas')-> with('status', 'Se ha dado de alta el nuevo usuario');
    }


}