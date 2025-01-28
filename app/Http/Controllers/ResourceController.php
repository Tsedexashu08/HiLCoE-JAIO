<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        return view('Resources-page');
    }
    public function AddResource(Request $request){}
    public function EditResource(Request $request){}
    public function DeleteResource(Request $request){}

}
