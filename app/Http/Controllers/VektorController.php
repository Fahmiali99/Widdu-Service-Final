<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VektorController extends Controller
{
    public function index(){
        return view('vektor');
    }
}