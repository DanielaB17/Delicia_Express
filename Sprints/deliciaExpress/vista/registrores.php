<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>		
	<link rel="stylesheet" type="text/css" href="../estilos/estilo11.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
<header>
	<h1 id="tit">REGISTRO RESTAURANTE</h1>
</header>

<form method="GET" action="../controlador/controladorregistrores.php"> 
<input type="hidden" class="ctexto" id="id" name="idres"><br><br>
	<label>Nombres del dueño</label>
	<input type="text" class="ctexto" id="nombre" name="nombresDue"><br><br>
	<label>Email</label>
	<input type="email" class="ctexto" id="correo" name="correo"><br><br>
	<label>Numero Dueño</label>
	<input type="text" class="ctexto" id="numerod" name="numerodue"><br><br>	
	<label>Contrasena</label>
	<input type="password" class="ctexto" id="contraseña" name="contrasena"><br><br>
	<label>TipoPersona</label>
	<input type="text" class="ctexto" id="tipop" name="tipopersona" ><br><br>
	<label>NIT</label>
	<input type="text" class="ctexto" id="nitt" name="nit" ><br><br>
	<label>Nombre Restaurante</label>
	<input type="text" class="ctexto" id="nombrer" name="nombreres" ><br><br>
    <label>Celular del Restaurante</label>
	<input type="text" class="ctexto" id="cel" name="celres" ><br><br>
	<label>Barrio</label>
	<input type="text" class="ctexto" id="barrior" name="barrio" ><br><br>
	<input class="b1" type="submit" id="m" name="register">
</form>
	<a id="v" href="../vista/listarusuarios.php"><button class="b1"> VOLVER AL LISTADO</button></a>
	
<footer>
	Contactanos <br>
	Numeros: 3182883910-3002608446-3229564274 <br>
	Direccion: Carrera 9 Este N 30C-36 San Mateo
</footer>

</body>
</html>