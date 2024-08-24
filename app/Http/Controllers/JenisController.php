<?php

namespace App\Http\Controllers;

use App\Models\Jns_paket;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jns_paket::orderby('id', 'ASC')->get();
        return view('dashboard.jns_paket.index', [
            "title" => "Jenis Paket",
            'jns' => $jenis

        ]);

    }

    public function create()
    {
        return view('dashboard.jns_paket.create', [
            "title" => "Jenis Paket",
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'jns_paket' => 'required',
            'diskon' => 'required'
        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        Jns_paket::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.jns_paket.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $jenis = Jns_paket::find($id);
        return view('dashboard.jns_paket.edit', compact('jenis'));
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'jns_paket' => 'required',
            'diskon' => 'required'
        ]);


        Jns_paket::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.jns_paket.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $jenis = Jns_paket::findOrfail($id);
        $jenis->delete();

        return redirect()->route('dashboard.jns_paket.index')->with('success', 'Data berhasil dihapus!');;
    }
}
