<?php

namespace App\Http\Controllers;

use App\Models\Codings;
use Illuminate\Http\Request;

class CodingdataController extends Controller
{
    public function index(){
        $codings = Codings::all();
        return view ('codings.index', compact('codings'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telp'=>'required',
            'problem'=>'required',
        ]);
        Codings::create($request->all());
        return redirect()->back();
    }

    // Tampilkan ke data base
    public function destroy($id){
        $codings = Codings::find($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function create(){
        return view('codings.create');
    }

    public function edit($id){
        $edit = Codings::find($id);
        return view('codings.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $edit = Codings::find($id);
        if($request->password == null){
            $edit->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'telp'=>$request->telp,
                'problem'=>$request->problem,
            ]);
        }else{
            $edit->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'telp'=>$request->telp,
                'problem'=>$request->problem,
            ]);
        }
        return redirect()->route('codings.index')->with('success', 'Data berhasil diubah');
    }
}