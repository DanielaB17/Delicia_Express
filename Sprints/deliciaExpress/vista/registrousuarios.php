<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>		
	<link rel="stylesheet" type="text/css" href="../estilos/estilo2.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
	<!--<a id="r" href="registrorestaurante.php"><button class="r">Restaurantes</button></a>
	<a id="c" href="registroempleado.php"><button class="r">Soy Empleado</button></a>-->
<header>
	<h1 id="tit">REGISTRO USUARIOS</h1>
</header>
<form method="GET" action="../controlador/controladorregistro.php"> 
	<p>Registre aqui los datos referentes a los usuarios registrados.</p>
	<input type="hidden" class="ctexto" id="nombre" name="idUser" ><br><br>
	<label>Nombres completos</label>
	<input type="text" class="ctexto" id="nombre" name="nombres" ><br><br>
	<label>Apellidos completos</label>
	<input type="text" class="ctexto" id="apellido" name="apellidos" ><br><br>
	<label>Correo Electronico</label>
	<input type="email" class="ctexto" id="correo" name="email"><br><br>	
	<label>Crea tu contraseña</label>
	<input type="password" class="ctexto" id="contraseña" name="contrasena"><br><br>
	<label>IdRoles</label>
	<input type="text" class="ctexto" id="nombre" name="idRol" ><br><br>
	<label>IdTipos</label>
	<input type="text" class="ctexto" id="nombre" name="idTipo" ><br><br>
	<label>Eps</label>
	<input type="text" class="ctexto" id="nombre" name="eps" ><br><br>
	
	<input class="b1" type="submit" id="m" name="register">
	<!--<a href="../vista/iniciosesion.php">Ya te registraste? <u>INICIA SESIÓN</u> </a>-->
</form>
	<a id="v" href="../vista/listarusuarios.php"><button class="b1"> VOLVER AL LISTADO</button></a>
</body>
</html>
