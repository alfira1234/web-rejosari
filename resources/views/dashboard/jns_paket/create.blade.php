@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')


@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data jenis pengunjung</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.jns_paket.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="jns_paket" class="form-label">Jenis Paket</label>
                            <div class="form-group">
                                <input name="jns_paket" type="text"
                                    class="form-control @error('jns_paket') is-invalid @enderror" id="jns_paket"
                                    placeholder="Nama paket wisata" required autofocus>
                                @error('jns_paket')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <div class="form-group">
                                <input name="diskon" type="float"
                                    class="form-control @error('diskon') is-invalid @enderror" id="diskon"
                                    placeholder="Tentukan diskon" required autofocus>
                                @error('diskon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/jenis" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
