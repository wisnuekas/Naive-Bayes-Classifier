<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatatriningController extends Controller
{
    public function index(){
        return view('datatrining.index');
    }
}
