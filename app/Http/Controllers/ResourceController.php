<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        return view('Resources-page');
    }
}
