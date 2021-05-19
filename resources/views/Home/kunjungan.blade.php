<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <title>Cetak QR</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url('/Image/MuseumSumpahPemuda.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        margin-top: 20px
    }

    .regForm {
        width: 800px;
        background-color: rgb(0, 0, 0, 0.6);
        margin: auto;
        padding: 10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
    }

    .regForm-title {
        color: white;
    }

    .main {
        background-color: rgb(0, 0, 0, 0.5);
        width: 800px;
        margin: auto;
    }

    form {
        padding: 10px;
    }

    #name {
        width: 100%;
        height: 100px;
    }

    .name {
        margin-left: 25px;
        margin-top: 30px;
        width: 125px;
        color: white;
        font-size: 18px;
        font-weight: 700;
    }

    .firstname {
        position: relative;
        left: 200px;
        top: -27px;
        width: 543px;
        line-height: 40px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
    }


    .email {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 535px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555
    }

    .identitas {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 532px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555
    }


    .phone {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 40px;
        width: 315px;
        border-radius: 6px;
        padding: 0 22px;
        font-size: 16px;
        color: #555
    }

    .phone_area {
        position: relative;
        color: #e5e5e5;
        text-transform: capitalize;
        font-size: 16px;
        left: -106px;
        top: -4px;
    }

    .button {
        background-color: #3baf9f;
        display: block;
        margin: 20px 0px 0px 20px;
        text-align: center;
        border-radius: 12px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color: white;
        cursor: pointer;
        transition: 0.25px;
    }

    .error-text {
        position: relative;
        left: 210px;
        top: -30px
    }

</style>

<body>
    <div class="regForm">
        <h1 class="regForm-title">Registrasi Form</h1>
    </div>
    <div class="main">
        <form action="/daftar" method="POST">
            @csrf
            <div id="name">
                <h2 class="name">Nama</h2>
                <input type="text" name="nama" class="firstname"><br />
                @error('nama')
                    <div class="text-danger error-text">{{ $message }}</div>
                @enderror
            </div>
            <h2 class="name">Email</h2>
            <input type="text" name="email" class="email">
            @error('email')
                <div class="text-danger error-text">{{ $message }}</div>
            @enderror
            <h2 class="name">No Identitas</h2>
            <input type="number" name="noIdentitas" class="identitas">
            @error('noIdentitas')
                <div class="text-danger error-text">{{ $message }}</div>
            @enderror
            <h2 class="name">Handphoe</h2>
            <input type="number" name="noHp" class="phone">
            @error('noHp')
                <div class="text-danger error-text">{{ $message }}</div>
            @enderror

            <button type="submit" class="button">Cetak QrCode</button>
        </form>
    </div>
</body>

</html>
