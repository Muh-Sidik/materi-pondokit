<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function homepage()
    {
        return view('blog.homepage');
    }
    // create article
    public function index()
    {
        $articles = \App\Article::orderBy('created_at', 'desc')->simplePaginate(4);
        $category = \App\Category::all();
        return view('welcome', compact('articles', 'category'));
    }
    
    public function createIndexArticle()
    {   
        $user_id = Auth::user();
        $category =\App\Category::all();
        return view('blog.create', compact('category', 'user_id'));
    }

    public function create(Request $req)
    {
        $create = new Article();
        $create->title = $req->input('title');
        $create->description = $req->input('desc');
        $create->user_id = $req->input('user_id');
        $create->category_id = $req->input('category_id');

        if($create->save()) {
            return redirect('/home');
        }

        return;
    }
    // create category
    public function createIndexCategory()
    {
        $category = \App\Category::orderBy('created_at', 'desc')->paginate(4);
        return view('blog.category', compact('category'));
    }

    public function createCategory(Request $req)
    {
        $create = new Category();
        $create->name_category = $req->input('category');
        if($create->save()) {
            return redirect()->back();
        }

        return;
    }
    //update
    public function updateIndex($id)
    {
        $update = Article::find($id);
        $category = \App\Category::all();
        return view('blog.update', compact('update', 'category'));
    }

    public function update(Request $req)
    {
        $update = Article::find($req->input('id'));
        $update->title = $req->input('title');
        $update->description = $req->input('desc');
        $update->user_id = $req->input('user_id');
        $update->category_id = $req->input('category_id');

        if($update->save())
        {
            return redirect('/home');
        }

        return;
    }






}
