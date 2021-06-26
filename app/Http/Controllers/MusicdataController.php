<?php

namespace App\Http\Controllers;
use App\Models\Musics;
use Illuminate\Http\Request;

class MusicdataController extends Controller
{
    public function index(){
        $musics = Musics::all();
        return view ('musics.index', compact('musics'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telp'=>'required',
            'problem'=>'required',
        ]);
        Musics::create($request->all());
        return redirect()->back();
    }

    // Tampilkan ke data base
    public function destroy($id){
        $musics = Musics::find($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function create(){
        return view('musics.create');
    }

    public function edit($id){
        $edit = Musics::find($id);
        return view('musics.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $edit = Musics::find($id);
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
        return redirect()->route('musics.index')->with('success', 'Data berhasil diubah');
    }
}