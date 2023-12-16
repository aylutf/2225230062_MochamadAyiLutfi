<?php

namespace App\Http\Controllers;

use App\Models\Cdata;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        $data = Cdata::all();
        return view('datac', compact('data'));
    }
    public function tambahdata(){
        return view('tambahdata');
    }
    public function tambahdatac(Request $request){
        //dd($request->all());
        Cdata::create($request->all());
        return redirect()->route('data')->with('success','Data telah ditambahkan');
    }

    public function tampilkandata($id){
        $data = Cdata::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Cdata::find($id);
        $data->update($request->all());
        return redirect()->route('data')->with('success','Data telah berhasil diedit');
    }

    public function delete($id){
        $data = Cdata::find($id);
        $data->delete();
        return redirect()->route('data')->with('success','Data telah berhasil dihapus');
    }
}

