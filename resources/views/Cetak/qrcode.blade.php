<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    .page-wrapper {
        margin-top: 50px;
        margin-bottom: 250px;
        margin left: 250px;
        margin right: 250px;
    }

    .judul {
        font-size: 20px;
        font-weight: 500;
        text-align: center;
    }

    .paragraf {
        font-size: 18px;
        text-align: center;
        font-style: italic
    }

    .gambar {
        margin: 20px 250px 20px 250px;
    }

    .page-data {
        margin-left: 200px;
    }

</style>

<body>
    <div class="page-wrapper">

        <div class="row">
            <p class="judul">Terima Kasih</p>
            <p class="paragraf">Ini Adalah QRcode anda untuk akses k dalam museum <br>
                Harap Gunakan Untuk CheckIn Kedalam museum dan Checkout untuk keluar museum <br>
                Masa Berlaku QrCode ini hanya bisa di akses sekali pada saat CheckIn dan CheckOut
            </p>

        </div>
        <div class="page-data">
            <table class="table table-responsive table-striped ">
                <tbody>

                    <tr>
                        <td>Nama </td>
                        <td>: {{ request('nama') }}</td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>: {{ request('email') }}</td>
                    </tr>
                    <tr>
                        <td>No Identitas </td>
                        <td>: {{ request('noIdentitas') }}</td>
                    </tr>
                    <tr>
                        <td>No Handphone </td>
                        <td>: {{ request('noHp') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <img src="data:image/png;base64, {!! $qrcode !!}" class="img-thumbnail gambar">
    </div>
</body>

</html>
