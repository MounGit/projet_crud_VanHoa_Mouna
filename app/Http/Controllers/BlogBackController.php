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
        return redirect()->route('backB');
    }
    public function show(Blog $id){
        $blog=$id;
        return view('backoffice.showBlog',compact('blog'));
    }

    public function edit(Blog $id){
        $blog=$id;
        return view('backoffice.editBlog',compact('blog'));
    }
    public function update(Blog $id, Request $request){
        $blog = $id;
        $blog->image = $request->image;
        $blog->titre = $request->titre;
        $blog->description = $request->description;
        $blog->save();
        return redirect()->route('showB', $blog->id);
    }
}
