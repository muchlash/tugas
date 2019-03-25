<!DOCTYPE html>



<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Lihat Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Berita
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-secondary">kembali</a>
                    <a href="/tampil/baru" class="btn btn-primary">Masukkan Berita Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Penulis</th>
                                <th>Isi</th>
                                <th width='15%'>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($berita as $b)
                            <tr>
                                <td>{{ $b->judul_berita }}</td>
                                <td>{{ $b->tanggal_berita }}</td>
                                <td>{{ $b->penulis_berita }}</td>
                                <td>{{ $b->isi_berita }}</td>
                                <td>
                                    <a href="/tampil/edit/{{ $b->id_berita }}" class="btn btn-warning">Edit</a>
                                    <a href="/tampil/hapus/{{ $b->id_berita }}"  class="btn btn-danger">Hapus</a>
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