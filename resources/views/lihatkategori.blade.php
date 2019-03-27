<!DOCTYPE html>



<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <title>Lihat Kategori</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Kategori
                </div>
                <div class="card-body">
                    <a href="/dashboard" class="btn btn-secondary">kembali</a>
                    <a href="/tampilkategori/baru" class="btn btn-primary">Masukkan Kategori Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Kategori</th>
                                <th width='15%'>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $k)
                            <tr>
                                <td>{{ $k->nama_kategori }}</td>
                                <td>
                                    <a href="/tampilkategori/edit/{{ $k->id_kategori }}" class="btn btn-warning">Edit</a>
                                    <a href="/tampilkategori/hapus/{{ $k->id_kategori }}"  class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
