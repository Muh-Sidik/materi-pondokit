<?php

namespace App\Http\Controllers;

use App\Subclass;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function kelas()
    {
        $kelas = \App\Subclass::orderBy('created_at', 'desc')->paginate(6);
        $class_id = \App\Classes::all();
        return view('system.kelas', compact('kelas', 'class_id'));
        
    }

    public function inputKelas(Request $req)
    {
        $input = new Subclass();
        $input->name_subclass = $req->input('nama');
        $input->name_class_id = $req->input('class_id');
        if($input->save()) {
            return redirect()->back();
        }
        return;
    }

    public function updateIndex($id)
    {
        $sub = \App\Subclass::find($id);
        $class = \App\Classes::all();
        return view('system.updatekelas', compact('sub', 'class'));
    }

    public function update(Request $req)
    {
        $update = Subclass::find($req->input('id'));
        $update->name_subclass = $req->input('nama');
        $update->name_class_id  = $req->input('class_id');
        if($update->save()) {
            return redirect('/jurusan');
        }
        return;
    }

    public function detailSubclass($id)
    {
        $nama = \App\Classes::find($id);
        $class = \App\Classes::find($id)->subclass()->orderBy('created_at', 'desc')->paginate(5);
        return view('system.detailsubclass', compact('class', 'nama'));
    }

    public function deleteSub($id)
    {
        $delete = Subclass::find($id);
        if($delete->delete()) {
            return redirect()->back();
        }
        return;
    }


}
