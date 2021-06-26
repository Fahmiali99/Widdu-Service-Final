<?php

namespace App\Http\Controllers;
use App\Models\Vektors;
use Illuminate\Http\Request;

class VektordataController extends Controller
{
    public function index(){
        $vektors = Vektors::all();
        return view ('vektors.index', compact('vektors'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telp'=>'required',
            'problem'=>'required',
        ]);
        Vektors::create($request->all());
        return redirect()->back();
    }

    // Tampilkan ke data base
    public function destroy($id){
        $vektors = Vektors::find($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function create(){
        return view('vektors.create');
    }

    public function edit($id){
        $edit = Vektors::find($id);
        return view('vektors.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $edit = Vektors::find($id);
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
        return redirect()->route('vektors.index')->with('success', 'Data berhasil diubah');
    }
}