<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<strong>Productos</strong></br></br>
	@isset($numero)
			<h3>{{$mensaje}}</h3>
	@else
			@for ($i = 1; $i <= $numero; $i++)	
				Producto{{$i}}</br>		
			@endfor	
	@endif
</body>
</html>