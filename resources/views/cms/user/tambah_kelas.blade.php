<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    <title>Daftar Orang Tua</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('tambahkelas') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="inputtext3" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" id="inputtext3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <script src="{{ asset('assets') }}/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>

</body>

</html>