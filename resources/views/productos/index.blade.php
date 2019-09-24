@extends("../layouts.plantilla")

@section("cabecera")

LEER INFORMACION
@endsection

@section("contenido")

<table border="1">
<tr>
	<td>Nombre Articulo</td>
	<td>Seccion</td>
	<td>Precio</td>
	<td>Fecha</td>
	<td>Pais de origen</td>
	<th>Imagen: </th>

</tr>


@foreach($productos as $producto)
<tr>
	<td><a href="{{route('productos.edit', $producto->id)}}">{{$producto->nombre_articulo}}</a></td>
	<td>{{$producto->seccion}}</td>
	<td>{{$producto->precio}}</td>
	<td>{{$producto->fecha}}</td>
	<td>{{$producto->pais_origen}}</td>
	<td><img src="images/{{$producto->ruta}}" width="100px" height="50px"></td>
</tr>
@endforeach

</table>



<!--<ul>

@foreach($productos as $producto)

<li>{{$producto->nombre_articulo}}&nbsp;{{$producto->seccion}}&nbsp;</li>
@endforeach
</ul>
-->
@endsection


@section("pie")

@endsection