<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class PortfolioBackController extends Controller
{
    public function index (){
        $dataPort = Projet::all();
        return view('backoffice.portfolioBack', compact('dataPort'));
    }
    public function create (){
        return view('backoffice.createPortfolio');
    }
    public function store(Request $request){
        $newEntry = new Projet;
        $newEntry->image = $request->image;
        $newEntry->titre = $request->titre;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect()->back();
    }
    public function destroy($id){
        $dataDelete = Projet::find($id);
        $dataDelete->delete();
        return redirect()->back();
    }
}
