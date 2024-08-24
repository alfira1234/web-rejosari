@extends('dashboard.layouts.app')

@section('title', 'Dashboard Admin')


@section('contents')
    <div class="py-12">
        <h1>Halaman tambah data pesanan</h1>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}

                <div class="col-lg-8">
                    <form method="post" action="{{ route('dashboard.pesanpaket.update', $pesans->id) }}"
                        class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nam_leng">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nam_leng') is-invalid @enderror"
                                id="nam_leng" name="nam_leng" value="{{ $pesans->nam_leng }}" placeholder="Masukkan nama"
                                required autofocus>
                            @error('nam_leng')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="no_tlp">No Telepon</label>
                                <input type="text" class="form-control @error('no_tlp') is-invalid @enderror"
                                    id="no_tlp" name="no_tlp" value="{{ $pesans->no_tlp }}" placeholder="Nomor telepon"
                                    required autofocus>
                                @error('no_tlp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ $pesans->email }}" placeholder="email" required
                                    autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="jns_paket">Jenis Pengunjung</label>
                                <select id="jns_paket" class="form-control @error('jns_paket') is-invalid @enderror"
                                    name="jns_paket">
                                    <option selected>Pilih Jenis Pengunjung</option>
                                    @foreach ($jns_pakets as $item)
                                        @if ($pesans->jns_paket_id == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->jns_paket }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->jns_paket }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('jns_paket')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="name">Paket Wisata</label>
                                <select id="name" class="form-control @error('name') is-invalid @enderror"
                                    name="name">
                                    <option selected>Pilih paket wisata</option>
                                    @foreach ($pakets as $item)
                                        @if ($pesans->paket_id == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="tgl_datang">Waktu Kedatangan</label>
                                <input type="date" class="form-control @error('tgl_datang') is-invalid @enderror"
                                    id="tgl_datang" name="tgl_datang" value="{{ $pesans->tgl_datang }}"
                                    value="Tanggal datang" required>
                                @error('tgl_datang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="jml_org">Jumlah Orang</label>
                                <input type="text" class="form-control @error('jml_org') is-invalid @enderror"
                                    id="jml_org" name="jml_org" value="{{ $pesans->jml_org }}" placeholder="Jumlah Orang"
                                    required>
                                @error('jml_org')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="status">Status</label>
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status"
                                    value="Sudah Dibayar" checked>
                                <label class="form-check-label" for="status">
                                    Sudah Dibayar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status"
                                    value="Belum Dibayar">
                                <label class="belum dibayar" for="status">
                                    Belum Dibayar
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="askot">Kota Asal</label>
                            <input type="text" class="form-control @error('askot') is-invalid @enderror" id="askot"
                                name="askot" value="{{ $pesans->askot }}" placeholder="Kota asal" required autofocus>
                            @error('askot')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="asne">Negara Asal</label>
                            <input type="text" class="form-control @error('asne') is-invalid @enderror" id="asne"
                                name="asne" value="{{ $pesans->asne }}" placeholder="Negara asal" required autofocus>
                            @error('asne')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ket_tam">Keterangan Tambahan</label>
                            <input type="text" class="form-control" id="ket_tam" name="ket_tam"
                                value="{{ $pesans->ket_tam }}" placeholder="Keterangan Tambahan" autofocus>
                        </div>

                        <div>

                        </div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/pesanwis" class="btn btn-warning">Batal</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
