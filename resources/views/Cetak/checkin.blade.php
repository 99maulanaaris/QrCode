<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome/css/brands.css" rel="stylesheet">
    <link href="/fontawesome/css/solid.css" rel="stylesheet">
    <title>Success</title>
</head>

<body>
    <div class="row" style="margin-top: 30px; margin-left: 40px">
        <div class="col-md-4">
            <a href={{ route('checkin') }} class="btn btn-info btn-block"><i class="fas fa-fast-backward"></i>
                Kembali</a>
        </div>
    </div>
    <div class="row">
        @if (session('success'))
            <h3 style="font-style: italic; margin: 50px 400px 0px 400px;">{{ session('success') }}
            </h3>
        @endif

    </div>
    <span style="font-size: 350px; margin-left: 530px;" class="fa-3x">
        <span style="color: green;">
            <i class="fas fa-check "></i>
        </span>
    </span>
</body>

</html>
