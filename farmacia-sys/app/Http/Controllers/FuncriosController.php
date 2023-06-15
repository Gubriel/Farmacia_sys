<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncriosController extends Controller
{
    public function list(){
        $clientes = Clientes::paginate(25);
        Paginator::useBootstrap();

        return view('app.clientes.listar');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('app.clientes.index');
    }

    public function create(){
        //return view('app.clientes.index');
    }

    public function list(){
        //return view('app.clientes.index');
    }

    public function store(){
        //return view('app.clientes.index');
    }

    public function update(){
        //return view('app.clientes.index');
    }
}
