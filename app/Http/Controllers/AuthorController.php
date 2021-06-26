<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
class AuthorController extends Controller
{
    public function index(){
        $admin = Admins::all();
        return view ('authors.index', compact('admin'));
    }
    
    public function destroy($id){
        $admin = Admins::find($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request){
        Admins::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('authors.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $edit = Admins::find($id);
        return view('authors.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $edit = Admins::find($id);
        if($request->password == null){
            $edit->update([
                'name'=>$request->name,
                'username'=>$request->username,
            ]);
        }else{
            $edit->update([
                'name'=>$request->name,
                'username'=>$request->username,
                'password'=>bcrypt($request->password)
            ]);
        }
        return redirect()->route('authors.index')->with('success', 'Data berhasil diubah');
    }
}