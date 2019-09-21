<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Auth::user()->article()->orderBy('created_at', 'desc')->paginate(4);
        return view('home', compact('articles'));
    }

    public function delete($id)
    {
        $delete = Article::find($id);
        if($delete->delete()) {
            return redirect()->back();
        }
        return;
    }


}
