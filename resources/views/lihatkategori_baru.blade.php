<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Kategori</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Kategori<br><strong>Tambah Kategori</strong>
                </div>
                <div class="card-body">
                    <a href="/tampilkategori" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/tampilkategori">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" placeholder="Nama ..">

                            @if($errors->has('nama_kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kategori')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
