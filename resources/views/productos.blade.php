<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<strong>Productos</strong></br></br>
	@isset($producto->numero)
		@for ($i = 1; $i <= $producto->numero; $i++)	
			Producto{{$i}}
       		@if ($producto->premio==$i) &nbsp;(premiado)&nbsp;consumiendo más de {{$producto->unidades}} productos
       		@endif
			</br>	
		@endfor		
	@else
		<h3>No hay productos</h3>
	@endif
</body>
</html>