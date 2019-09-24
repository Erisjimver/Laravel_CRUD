@extends("../layouts.plantilla")

@section("cabecera")

INSERTAR REGISTROS

@endsection

@section("contenido")






<!--<form method="post" action="/productos" type="multipart/form-data">-->
{!! Form::open(['url' => '/productos' , 'method' => 'post', 'files'=>true]) !!}
    

	
	<table>
		<tr>
			<!--<td>Foto: </td>	<td><input type="file" name="imagen">@csrf</td>-->
		<td>Foto: </td>	<td>{!! Form::file('file')!!}</td>
		</tr>
		<tr>
			<td>Nombre: </td>	<td><input type="text" name="nombre_articulo">	@csrf</td>
		</tr>
		<tr>
			<td>Seccion: </td>	<td><input type="text" name="seccion">@csrf</td>
		</tr>
		<tr>
			<td>Precio: </td><td><input type="text" name="precio" required>	@csrf</td>
		</tr>
		<tr><td>Fecha: </td><td><input type="text" name="fecha">@csrf</td>
		</tr>
		<tr><td>Pais de origen: </td><td><input type="text" name="pais_origen">{{csrf_field()}}</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="enviar" value="Registrar">
				<input type="reset" name="Borrar" value="Borrar"></td>
		</tr>
</table>

<!--</form>-->


{!! Form::close() !!}


@endsection


@section("pie")

@endsection