<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
	@foreach ($tugas as $key => $data)
		<li> <a href="/form/show/{{ $key }}">{{ $data }}</li>
	@endforeach
	</ul>
	
</body>
</html>
