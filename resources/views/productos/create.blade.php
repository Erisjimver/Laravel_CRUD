@extends("../layouts.plantilla")

@section("cabecera")

INSERTAR REGISTROS

@endsection

@section("contenido")





{!! Form::open(['url' => '/productos' , 'method' => 'post', 'files'=>true]) !!}
    

	
	<table>
		<tr>
		<td>Foto: </td>	<td>{!! Form::file('file')!!}</td>
		</tr>
		<tr>
			<td>{!! Form::label('nombre', 'Nombre: ') !!}</td>	
			<td>{!! Form::text('nombre_articulo') !!}	@csrf</td>
		</tr>
		<tr>
			<td>{!! Form::label('seccion', 'Seccion: ') !!}</td>
			
			<td>{!! Form::text('seccion') !!} @csrf</td>
		</tr>
		<tr>
			<td>{!! Form::label('precio', 'Precio: ') !!}</td>
			<td>{!! Form::text('precio') !!}	@csrf</td>
		</tr>
		<tr><td>{!! Form::label('fecha', 'Fecha: ') !!}</td>
			<td>{!! Form::text('fecha') !!}@csrf</td>
		</tr>
		<tr><td>{!! Form::label('pais_origen', 'Pais de origen: ') !!}</td>
			<td>{!! Form::text('pais_origen') !!}{{csrf_field()}}</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<!--<input type="submit" name="enviar" value="Registrar">-->
				{!! Form::submit('Enviar')  !!}
				<input type="reset" name="Borrar" value="Borrar">
			</td>
		</tr>
</table>

<!--</form>-->


{!! Form::close() !!}


@endsection


@section("pie")

@endsection