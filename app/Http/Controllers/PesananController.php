<?php

namespace App\Http\Controllers;

use App\Models\Jns_paket;
use App\Models\Paket;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesans = Pesan::with(["jns_paket", "paket"])->get();

        return view('dashboard.pesanpaket.index', [
            "title" => "Pesanan",
            'pesans' => $pesans

        ]);

    }

    public function create()
    {

        return view('dashboard.pesanpaket.create', [
            "title" => "Pesanan",
            'jns_pakets' => Jns_paket::all(),
            'pakets' => Paket::all()
        ]);
    }

    public function store(Request $request)
    {
        //validasi kolom
        $validatedData = $request->validate([
            'name' => 'required',
            'jns_paket' => 'required',
            'nam_leng' => 'required',
            'jml_org' => 'required',
            'email' => 'required',
            'tgl_datang' => 'required',
            'no_tlp' => 'required',
            'status' => 'required',
            'askot' => 'required',
            'asne' => 'required',
            'ket_tam' => '',
        ]);

        $validatedData['paket_id'] = $validatedData['name'];
        $validatedData['jns_paket_id'] = $validatedData['jns_paket'];

        Pesan::create($validatedData);
        return redirect()->route('dashboard.pesanpaket.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $pesans = Pesan::findOrfail($id);

        return view('dashboard.pesanpaket.edit', [
            'pesans'=>$pesans,
            'jns_pakets' => Jns_paket::all(),
            'pakets' => Paket::all()
        ]);
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validatedData = $request->validate([
            'name' => 'required',
            'jns_paket' => 'required',
            'nam_leng' => 'required',
            'jml_org' => 'required',
            'email' => 'required',
            'tgl_datang' => 'required',
            'no_tlp' => 'required',
            'status' => 'required',
            'askot' => 'required',
            'asne' => 'required',
            'ket_tam' => '',
        ]);


        $validatedData['paket_id'] = $validatedData['name'];
        $validatedData['jns_paket_id'] = $validatedData['jns_paket'];
        unset($validatedData['name']);
        unset($validatedData['jns_paket']);

        Pesan::where('id',$id)->update($validatedData);

        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.pesanpaket.index')->with('success', 'Data berhasil diupdate!');
    }
    public function delete($id)
    {
        $pesans = Pesan::findOrfail($id);
        $pesans->delete();

        return redirect()->route('dashboard.pesanpaket.index')->with('success', 'Data berhasil dihapus!');
    }
}
