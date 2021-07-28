<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogBackController extends Controller
{
    public function index(){
        $dataBlog=Blog::all();

        return view('backoffice.blogBack',compact('dataBlog'));
    }
    public function create(){
        return view('backoffice.createBlog');
    }
    public function store(Request $request){
        $newEntry=new Blog;
        $newEntry->image=$request->image;
        $newEntry->titre=$request->titre;
        $newEntry->description=$request->description;
        $newEntry->save();
        return redirect()->back();

    }

    public function destroy($id){
        $dataDelete=Blog::find($id);
        $dataDelete->delete();
        return redirect()->back();
    }
}
