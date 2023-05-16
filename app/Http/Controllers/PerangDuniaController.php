<?php

namespace App\Http\Controllers;

use App\Models\PerangDunia;
use Illuminate\Http\Request;
use App\Http\Requests\PerangDuniaRequest;

class PerangDuniaController extends Controller
{
    public function index(){
        $PerangDunia = PerangDunia::get();
        return view('index', compact('PerangDunia'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $PerangDunia = PerangDunia::where('id', $id)->first();
        return view('edit', compact('PerangDunia'));
    }

    public function lihat($id){
        $PerangDunia = PerangDunia::where('id', $id)->first();
        return view('lihat', compact('PerangDunia'));

    }    
    public function store(PerangDuniaRequest $request) 
    { 
        $PerangDunia = new PerangDunia(); 
 
        $PerangDunia->nama_perang = $request->nama_perang; 
        $PerangDunia->kronologi_perang = $request->kronologi_perang; 
 
        $PerangDunia->save(); 
 
        return redirect('/'); 
    }

    public function update(PerangDuniaRequest $request, $id) 
    { 
        $PerangDunia = PerangDunia::where('id', $id)->first(); 
 
        $PerangDunia->nama_perang = $request->nama_perang; 
        $PerangDunia->kronologi_perang = $request->kronologi_perang; 

        $PerangDunia->update(); 
 
        return redirect('/'); 
    }

    public function hapus($id) 
    { 
        $PerangDunia = PerangDunia::where('id', $id)->first(); 
 
        $PerangDunia->delete(); 
 
        return redirect('/'); 
    }
}
