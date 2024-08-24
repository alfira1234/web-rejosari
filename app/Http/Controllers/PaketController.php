<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        // $paket = Paket::orderby('id', 'ASC')->get();
        $paket = Paket::with(["kategoris"])->get();
        // dd($paket);
        return view('dashboard.paket.index', [
            "title" => "Paket",
            'pakets' => $paket

        ]);

    }

    public function create()
    {
        return view('dashboard.paket.create', [
            "title" => "Paket",
            'kategoris' => Kategori::all(),
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'kategori' => 'required',
            'name' => 'required',
            'harga' => 'required',
            'destinasi' => 'required',
            'lokasi' => 'required',
            'luas' => 'required',
            'fasilitas' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'image|mimes:jpeg,jpg,png',
        ]);


        if($request->file('thumbnail')){
            $validateData['thumbnail'] = $request->file('thumbnail')->store('images');
        }

        $validateData['kategori_id'] = $validateData['kategori'];

        //insert ke table paket
        Paket::create($validateData);
        // dd($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.paket.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $paket = Paket::findOrfail($id);
        // dd($paket);

        return view('dashboard.paket.edit', [
            'paket'=>$paket,
            'kategoris' => kategori::all(),
        ]);
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData=$request->validate([
            'kategori' => 'required',
            'name' => 'required',
            'harga' => 'required',
            'destinasi' => 'required',
            'lokasi' => 'required',
            'luas' => 'required',
            'fasilitas' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'image|mimes:jpeg,jpg,png',
        ]);



        if($request->file('thumbnail')){
            $validateData['thumbnail'] = $request->file('thumbnail')->store('images');
        }

        $validateData['kategori_id'] = $validateData['kategori'];
        unset($validateData['kategori']);

        Paket::where('id',$id)->update($validateData);
        // dd($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.paket.index')->with('success', 'Data berhasil diupdate!');

    }

    public function delete($id)
    {


        $paket = Paket::findOrfail($id);
        $paket->delete();

        return redirect()->route('dashboard.paket.index')->with('success', 'Data berhasil dihapus!');;
    }
}
