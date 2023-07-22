@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card text-center">
                    <div class="card text-center">
                        <div class="card-header">
                            Halaman Home
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Selamat Datang Di Aplikasi Catatan Perjalanan</h5>
                            <p class="card-text">
                                Catat Setiap Lokasi Yang Anda Kunjungi</p>
                            <a href="/catatan" class="btn btn-primary">
                                Lihat Catatan Perjalanan Anda</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Lindungi Diri Anda dan Keluarga
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection