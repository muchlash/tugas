<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Berita</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Berita<br><strong>Edit Berita</strong> 
                </div>
                <div class="card-body">
                    <a href="/tampil" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/tampil/{{ $berita->id_berita }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul_berita" value="{{$berita->judul_berita}}" class="form-control" placeholder="Judul ..">
 
                            @if($errors->has('judul_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_berita')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Tanggal Berita</label>
                            <input type="date" name="tanggal_berita" value="{{$berita->tanggal_berita}}" class="form-control">
 
                            @if($errors->has('tanggal_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_berita')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Penulis Berita</label>
                            <input type="text" name="penulis_berita" value="{{$berita->penulis_berita}}" class="form-control" placeholder="Penulis..">
 
                             @if($errors->has('penulis_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('penulis_berita')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Isi Berita</label>
                            <textarea name="isi_berita"  class="form-control" placeholder="Isi ..">{{$berita->isi_berita}}</textarea>
 
                            @if($errors->has('isi_berita'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_berita')}}
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