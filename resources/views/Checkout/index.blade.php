@extends('Layouts.auth')

@section('content')
    <div class="card-header">
        <h1 class="card-title text-center" style="font-size: 20px; font-weight: 800">Selamat Datang Di Museum Sumpah Pemuda
        </h1>
        <p class="card-title text-center" style="font-style: italic">Silahkan Cari Atau Scan QrCode Data Diri anda</p>
    </div>
    <div class="card-content">
        <img src="/image/msp.png" alt="" width="200" class="img-fluid" style="margin: 0px 430px 10px 430px">
    </div>
    <div class="card-body" style="margin-left: 150px; margin-top: -10px">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="cari" id="cari" class="form-control">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="badge bg-info"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection
