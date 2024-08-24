<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::orderby('id', 'ASC')->get();
        return view('dashboard.kategori.index', [
            "title" => "Kategori",
            'kategoris' => $kategori

        ]);

    }

    public function create()
    {
        return view('dashboard.kategori.create', [
            "title" => "Kategori",
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'kategori' => 'required'

        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        kategori::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.kategori.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('dashboard.kategori.edit', compact('kategori'));
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData = $request->validate([
            'kategori' => 'required'

        ]);


        Kategori::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.kategori.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $kategori = kategori::findOrfail($id);
        $kategori->delete();

        return redirect()->route('dashboard.kategori.index')->with('success', 'Data berhasil dihapus!');;
    }
}
