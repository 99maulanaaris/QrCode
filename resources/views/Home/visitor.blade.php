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
                        <li class="breadcrumb-item active" aria-current="page">Data Pengunjung
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
                            <th>No Identitas</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitors as $visitor)
                            <tr>
                                <td>{{ $visitor->noIdentitas }}</td>
                                <td>{{ $visitor->nama }}</td>
                                <td>{{ $visitor->email }}</td>
                                <td>{{ $visitor->noHp }}</td>
                                <td>
                                    @if ($visitor->checkin === 0)
                                        <span class="badge bg-danger">Tidak</span>
                                    @else
                                        <span class="badge bg-success">Checkin</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($visitor->checkout === 0)
                                        <span class="badge bg-danger">Tidak</span>
                                    @else
                                        <span class="badge bg-success">Checkout</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
