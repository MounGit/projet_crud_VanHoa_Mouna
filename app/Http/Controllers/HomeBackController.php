<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBackController extends Controller
{
    public function index (){
        return view('backoffice.homeBack');
    }
}
