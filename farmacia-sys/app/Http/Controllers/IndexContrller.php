<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexContrller extends Controller
{
    public function index(){
        return view('app.index');
    }
}
