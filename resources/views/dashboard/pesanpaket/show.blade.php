{{-- <div class="row"> --}}
{{-- Buat Konten di sini --}}
<!-- Begin Page Content -->
<!-- Page Heading -->
{{-- <h1 class="h3 mb-2 text-gray-800">Detail Pesanan</h1>
</div> --}}

@extends('layouts.main')

@section('container')
    <main class="container border">
        <div class="row">
            <div class="col-md-3 py-5"></div>
            <div class="col-md-6 py-5" style="background-color: #ffffff">
                <h1>Detail Pesanan Paket wisata</h1>

                {{-- <p style="font-family: Cambria, serif;"> Bidang Program: <a href="{{ $programdarwis->bidang->bidang_program }}"></a> </p> --}}
                <p style="font-family: Cambria, serif;"> Nama Pemesan &emsp;&emsp;&emsp;&emsp; : &emsp;
                    {{ $pesans->nam_leng }}
                </p>
                <p style="font-family: Cambria, serif;"> Email &emsp;&emsp;&emsp;&emsp;&emsp; :
                    &emsp;{{ $pesans->email }}</p>
                <p style="font-family: Cambria, serif;"> No Telepon &emsp;&emsp;&emsp;&emsp;&emsp; :
                    &emsp;{{ $pesans->no_tlp }}</p>
                <p style="font-family: Cambria, serif;"> Nama Paket Wisata &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;
                    {{ $pesans->paket->name }}
                </p>
                {{-- <p style="font-family: Cambria, serif;"> Status &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;<label
                        class="label {{ $program->status == 'Rencana' ? 'bg-info text-light' : ($program->status == 'Sedang Berjalan' ? 'bg-warning text-dark' : 'bg-success text-light') }}">{{ $program->status }}</label>
                </p> --}}
                <p style="font-family: Cambria, serif;"> Harga Paket &emsp;&emsp;&emsp;&emsp; &nbsp;:
                    &emsp;{{ $pesans->paket->harga }}</p>
                <p style="font-family: Cambria, serif;"> Jam Kedatangan &emsp;&emsp;&emsp;&emsp;&emsp;:
                    &emsp;{{ $pesans->jm_datang }}</p>
                <p style="font-family: Cambria, serif;"> Tanggal kedatangan &emsp;&emsp;&emsp;&emsp;&emsp; :
                    &emsp;{{ $pesans->tgl_datang }}</p>
                <p style="font-family: Cambria, serif;"> Jumlah Orang &emsp;: &emsp;{{ $pesans->jml_org }}</p>
                {{-- <p style="font-family: Cambria, serif;"> Total Bayar &nbsp; :
                    &emsp;{{ number_format($program->jumlah_anggaran, 0, ',', '.') }}</p> --}}
                <p style="font-family: Cambria, serif;">Keterangan &emsp;&emsp;&emsp;: &emsp;{!! $pesans->keterangan !!}</p>

                <a href="/pesanwis" class="d-block mt-3">Kembali</a>
            </div>
            <div class="col-md-3 py-5">
                {{-- <img class="w-100" src="{{ asset('img/pemandangan.jpeg') }}" alt="gambar alam"> --}}
            </div>
        </div>
    </main>
@endsection
