<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $dataProjets = Projet::all();
        return view('pages.portfolio', compact('dataProjets'));
    }
}
