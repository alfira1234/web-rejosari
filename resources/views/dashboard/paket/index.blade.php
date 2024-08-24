@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')

@section('contents')
    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel daftar paket</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('dashboard.paket.create') }}">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>


        <div class="card-body">
            <div style="overflow-x:auto;">
                <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-sm text-left text-gray-900 px-20 py-15 text-center">No</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Kategori</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Paket Wisata</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Harga Paket</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Destinasi</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Lokasi</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Luas Area</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Fasilitas</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Deskripsi</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Upload Gambar</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Aksi</th>
                        </tr>
                    </thead>

                    @foreach ($pakets as $item)
                        <tbody>
                            <tr>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                                    {{ $item->kategoris->kategori }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    @currency($item->harga)
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->destinasi }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->lokasi }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->luas }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->fasilitas }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {!! $item->deskripsi !!}
                                </td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" width="100">
                                </td>

                                <td>
                                    <a href="{{ route('dashboard.paket.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm"><span><i
                                                class="fa-solid fa-pen-to-square"></i></span></a>

                                    <form action="{{ route('dashboard.paket.delete', $item->id) }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('yakin ingin menghapus?');"><span><i
                                                    class="fa-solid fa-trash"></i></span></button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
