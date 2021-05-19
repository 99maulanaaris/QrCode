@extends('Layouts.app')

@section('content')

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkin
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Pengunjung</h4>
            </div>
            <div class="card-body text-center">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Identitas</th>
                            <th>Nama</th>
                            <th>Waktu Checkin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkins as $check)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $check->kunjungan->noIdentitas }}</td>
                                <td>{{ $check->kunjungan->nama }}</td>
                                <td>{{ $check->waktuCheckin }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
