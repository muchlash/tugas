<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #25 : Relasi Many To Many Eloquent</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
				<h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Judul Berita</th>
							<th>Kategori</th>
						</tr>
					</thead>
					<tbody>
						@foreach($berita as $b)
						<tr>
							<td>{{ $b->judul_berita }}</td>
							<td>
								<ul>
									@foreach($b->kategori as $k)
									<li> {{ $k->nama_kategori }} </li>
									@endforeach
								</ul>
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