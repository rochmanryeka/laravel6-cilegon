<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogs;

class BlogController extends Controller
{
    public function index(){
        $blogs = blogs::orderBy('created_at','desc')->paginate(5);

        return view('blog-list', [
            'blogs' => $blogs
        ]);
    }

    public function add(){
        return view('blog-add');
    }

    public function edit($id){
        $blog = blogs::find($id);

        return view('blog-edit',[
            'blog' => $blog
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'content' => 'required',
        ]);

        blogs::create($request->all());

        return redirect()->route('blog');
    }

    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'content' => 'required',
        ]);

        blogs::find($id)->update($request->all());

        return redirect()->route('blog');
    }

    public function delete(Request $request){
        blogs::find($request->id)->delete();

        return redirect()->route('blog');
    }
}
