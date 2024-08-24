@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')


@section('contents')
    <div class="py-12">
        <h1>Halaman edit data Kategori</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.kategori.update', $kategori->id) }}"
                        class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Jenis Paket</label>
                            <div class="form-group">
                                <input name="kategori" type="text"
                                    class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                    value="{{ $kategori->kategori }}" placeholder="Nama paket wisata" required autofocus>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/kategori" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
