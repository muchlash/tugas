<!DOCTYPE html>
<html>
<head>
	<title>blog</title>
</head>
<body>
	@foreach($blogs as $blog )
	<h2>{{$blog->judul}}</h2>
	<p>{{$blog->isi}}</p>
	@endforeach
</body>
</html>