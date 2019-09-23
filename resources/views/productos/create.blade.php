@extends("../layouts.plantilla")

@section("cabecera")

INSERTAR REGISTROS

@endsection

@section("contenido")

<form method="post" action="/productos">
	
	<table>
		<tr>
			<td>Nombre: </td>	<td><input type="text" name="nombre_articulo">	<!--{{csrf_field()}}-->	@csrf</td>
		</tr>
		<tr>
			<td>Seccion: </td>	<td><input type="text" name="seccion"><!--{{csrf_field()}}-->	@csrf</td>
		</tr>
		<tr>
			<td>Precio: </td><td><input type="text" name="precio">	<!--{{csrf_field()}}-->		@csrf</td>
		</tr>
		<tr><td>Fecha: </td><td><input type="text" name="fecha"><!--{{csrf_field()}}-->		@csrf</td>
		</tr>
		<tr><td>Pais de origen: </td><td><input type="text" name="pais_origen"><!--{{csrf_field()}}-->@csrf</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="enviar" value="Registrar">
				<input type="reset" name="Borrar" value="Borrar"></td>
		</tr>
</table>
</form>


@endsection


@section("pie")

@endsection