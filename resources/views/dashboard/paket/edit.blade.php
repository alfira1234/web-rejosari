@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')


@section('contents')

    <div class="py-12">
        <h1>Halaman edit data</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="col-lg-8">
                        <form method="post" action="{{ route('dashboard.paket.update', $paket->id) }}" class="mt-6 space-y-6"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="mb-3">
                                <label for="kategori">Kategori</label>
                                <select id="kategori" class="form-control @error('kategori') is-invalid @enderror"
                                    name="kategori">
                                    <option selected>Pilih paket wisata</option>
                                    @foreach ($kategoris as $item)
                                        @if ($paket->kategori_id == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->kategori }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                        @endif
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
                                <input name="name" type="text" class="form-control" id="name"
                                    value="{{ $paket->name }}" placeholder="Nama paket wisata">
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga Paket</label>
                                <input name="harga" type="text" class="form-control" id="harga"
                                    value="{{ $paket->harga }}" placeholder="Tentukan harga">
                            </div>
                            <div class="mb-3">
                                <label for="destinasi" class="form-label">Destinasi</label>
                                <input name="destinasi" type="text" class="form-control" id="destinasi"
                                    value="{{ $paket->destinasi }}" placeholder="Tentukan destinasi">
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input name="lokasi" type="text" class="form-control" id="lokasi"
                                    value="{{ $paket->lokasi }}" placeholder="Tentukan lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="luas" class="form-label">Luas Area</label>
                                <input name="luas" type="text" class="form-control" id="luas"
                                    value="{{ $paket->luas }}" placeholder="Tentukan luas">
                            </div>

                            <div class="mb-3">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input name="fasilitas" type="text" class="form-control" id="fasilitas"
                                    value="{{ $paket->fasilitas }}" placeholder="Tentukan fasilitas">
                            </div>

                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Upload Gambar</label>
                                <img src="{{ asset('storage/' . $paket->thumbnail) }}" class="mb-3 col-sm-5 d-block">
                                <input type="hidden" value="{{ $paket->thumbnail }}">
                                <input name="thumbnail" class="form-control" type="file" id="thumbnail"
                                    value="{{ $paket->thumbnail }}">
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <div class="form-group">
                                    <input id="deskripsi" type="hidden" name="deskripsi"
                                        value="{{ old('deskripsi', $paket->deskripsi) }}">
                                    <trix-editor input="deskripsi"></trix-editor>
                                </div>
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
