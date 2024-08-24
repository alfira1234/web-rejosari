@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')


@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data paket</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.paket.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="kategori">Kategori</label>
                            <select id="kategori" class="form-control @error('kategori') is-invalid @enderror"
                                name="kategori">
                                <option selected>Pilih kategori</option>
                                @foreach ($kategoris as $item)
                                    <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="name" class="form-label">Paket Wisata</label>
                            <div class="form-group">
                                <input name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Nama paket wisata" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Paket</label>
                            <div class="form-group">
                                <input name="harga" type="text"
                                    class="form-control @error('harga') is-invalid @enderror" id="harga"
                                    placeholder="Tentukan harga" required autofocus>
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="destinasi" class="form-label">Destinasi</label>
                            <div class="form-group">
                                <input name="destinasi" type="text"
                                    class="form-control @error('destinasi') is-invalid @enderror" id="destinasi"
                                    placeholder="Tentukan destinasi" required autofocus>
                                @error('destinasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <div class="form-group">
                                <input name="lokasi" type="text"
                                    class="form-control @error('lokasi') is-invalid @enderror" id="lokasi"
                                    placeholder="Masukkan lokasi" required autofocus>
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="luas" class="form-label">Luas Area</label>
                            <div class="form-group">
                                <input name="luas" type="text"
                                    class="form-control @error('luas') is-invalid @enderror" id="luas"
                                    placeholder="Masukkan luas" required autofocus>
                                @error('luas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <div class="form-group">
                                <input name="fasilitas" type="text"
                                    class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas"
                                    placeholder="Tentukan fasilitas" required autofocus>
                                @error('fasilitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <label for="thumbnail" class="form-label">Upload Gambar</label>
                        <div class="form-group">
                            <input name="thumbnail" class="form-control" type="file" id="thumbnail" multiple>
                            <input-error class="mt-2" :messages="$errors == get('thumbnail')" />
                            @error('thumbnail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="form-group">
                                <input id="deskripsi" type="hidden" name="deskripsi">
                                <trix-editor input="deskripsi"></trix-editor>

                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/paketwis" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
