<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Projet;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $dataBlog = Blog::all()
            ->take(4);
        return view('pages.blog', compact('dataBlog'));
    }
}
