@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel daftar pesanan</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('dashboard.pesanpaket.create') }}">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            {{-- <div class="table-responsive"> --}}
            <div style="overflow-x:auto;">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-sm text-left text-gray-900 px-20 py-15">No</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Waktu Kedatangan</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Nama Paket</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Harga</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Nama Lengkap</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Email</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">No Telepon</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Kota Asal</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Negara Asal</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Jenis Pengunjung</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Jumlah Orang</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Potongan harga</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Total Bayar</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Status</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Keterangan Tambahan</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pesans as $item)
                            @php
                                // dd($item);
                                $total = $item->paket->harga * $item->jml_org;
                                $diskon = $total * $item->jns_paket->diskon;
                            @endphp
                            <tr>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ date('d F Y', strtotime($item->tgl_datang)) }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->paket->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    @currency($item->paket->harga)
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->nam_leng }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->email }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->no_tlp }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->askot }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->asne }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->jns_paket->jns_paket }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->jml_org }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->jns_paket->diskon * 100 }}%
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    @currency($total - $diskon)
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->status }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->ket_tam }}
                                </td>

                                <td>

                                    <a href="{{ route('dashboard.pesanpaket.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm"><span><i
                                                class="fa-solid fa-pen-to-square"></i></span></a>

                                    <form action="{{ route('dashboard.pesanpaket.delete', $item->id) }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('yakin ingin menghapus?');"><span><i
                                                    class="fa-solid fa-trash"></i></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
