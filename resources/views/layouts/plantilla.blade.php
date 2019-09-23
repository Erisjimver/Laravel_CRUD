<!DOCTYPE html>
<html>
<head>
	<title>Plantilla</title>
	<style type="text/css">
		
.imagenCabecera{
	float: right;
	padding-right: 150px;
	width: 150px
}

.cabecera{
	text-align: center;
	font-size: x-large;
	font-family: Tahoma, Geneva, sans-serif;
	margin-bottom: 100px;
	color: #090;
}

.contenido form{
	width: 300px;
	margin: 0 auto;
}

.contenido table{
	width: 500px;
	margin: 0 auto;
}
.pie{
	position: fixed;
	bottom: 0px;
	width: 100%
	font-size=0.7em;
	margin-bottom: 15px;
}

	</style>
</head>
<body>



	<div class="cabecera">
		<img src="/images/logo.png" class="imagenCabecera"/>

		@yield("cabecera")

		
	</div>

	<div class="contenido">
		@yield("contenido")
	</div>

	<div class="pie">
		@yield("pie")
		Israel Jimenez. Laravel Avanzado. Todos los derechos reservados
	</div>


</body>
</html>