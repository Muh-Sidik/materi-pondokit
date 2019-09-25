<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Classes;
use App\Item;
use App\Exports\ItemExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SystemController extends Controller
{
    public function menu()
    {
        $class = \App\Classes::all();
        $data = \App\Item::orderBy('created_at', 'desc')->simplePaginate(4);
        return view('system.menu', compact('class', 'data'));
    }

    //tambah data
    public function menuTambah()
    {
        $user_id = Auth::user();
        $class_id = \App\Classes::all();
        return view('system.input', compact('user_id', 'class_id'));
    }
    //export
    public function export_excel()
    {
        return Excel::download(new ItemExport, 'inventaris.xlsx');
    }

    public function input(Request $req)
    {
        $input = new Item();
        $input->name_item = $req->input('name_item');
        $input->code_item = $req->input('code_item');
        $input->user_id = $req->input('user_id');
        $input->class_id = $req->input('class_id');
        $input->type = $req->input('type');

        if($input->save()) {
            return redirect('/menu');
        }

        return;

    }

    //input nama class
    public function class()
    {
        $class = \App\Classes::all();
        return view('system.class', compact('class'));
    }

    public function inputClass(Request $req)
    {
        $input = new Classes();
        $input->name_class = $req->input('name_class');

        if($input->save()) {
            return redirect()->back();
        }

        return;
    }

    //detail
    public function detail($id)
    {
        $nama = \App\Classes::find($id);
        $detail = \App\Classes::find($id)->item()->orderBy('created_at', 'desc')->paginate(5);
        $class = \App\Classes::all();
        return view('system.detail', compact('detail', 'nama', 'class'));
    }

    //update
    public function edit($id)
    {
        $items = \App\Item::find($id);
        $class_id = \App\Classes::all();
        $user_id = Auth::user();
        return view('system.update', compact('items', 'class_id', 'user_id'));
    }

    public function update(Request $req)
    {
        $edit = Item::find($req->input('id'));
        $edit->name_item = $req->input('name_item');
        $edit->code_item = $req->input('code_item');
        $edit->user_id = $req->input('user_id');
        $edit->class_id = $req->input('class_id');
        $edit->type = $req->input('type');
        if($edit->save()) {
            return redirect('/menu');
        }

        return;
    }

    //delete
    public function delete($id)
    {
        $delete = Item::find($id);
        if($delete->delete()) {
            return redirect()->back();
        }

        return;

    }

    public function deleteClass($id)
    {
        $delete = Classes::find($id);
        if($delete->delete()) {
            return redirect()->back();
        }
        return;
    }
    //contact
    public function contact()
    {
        return view('system.contact');
    }
}
