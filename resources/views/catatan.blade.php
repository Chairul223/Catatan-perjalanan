@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center" <div class="card text-center">
                    <div class="card-header">
                        Data Perjalanan Anda
                        <div class="container-fluid">
                            <form action="/catatan/cari" class="d-flex" role="search" method="GET">
                                <input class="form-control me-2" type="date" placeholder="Search" aria-label="Search" name="cari">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Lokasi</th>
                                    <th>Suhu(Celcius)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($catatan as $p)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->tanggal }}</td>
                                    <td>{{ $p->waktu }}</td>
                                    <td>{{ $p->lokasi }}</td>
                                    <td>{{ $p->suhu }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                Halaman : {{ $catatan->currentPage() }} <br />
                Jumlah Data : {{ $catatan->total() }} <br />
                Data Per Halaman : {{ $catatan->perPage() }}
                <br />
                {{ $catatan->links() }}
            </div>
        </div>
        @endsection