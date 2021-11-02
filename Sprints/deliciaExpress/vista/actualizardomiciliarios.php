<?php 
$consulta1= consultarPersona($_GET['IdDomiciliarios']);

function consultarPersona($id){
    include '../conexion/conexion2.php';
    $sentencia="SELECT * FROM domiciliarios WHERE IdDomiciliarios='".$id."'";
    $resultado=$conexion->query($sentencia) or die ("Error de conexion".mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
return[
    $fila['IdDomiciliarios'],
    $fila['AseguradoraSoat'],
    $fila['LicenciaConduccion'],
];
}

?>
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
	<h1 id="tit">ACTUALIZAR DOMICILIARIO</h1>
</header>
<form method="GET" action="../controlador/controladoractualizar.php">
	<p>Hola! Nos complace saber que deseas registrarte y empezar a usar nuestros servicios, a continuacion encontraras un formulario, diligencialo correctamente y asi podras empezar a disfrutar.</p>
	<input type="hidden" class="ctexto" id="idDomiciliario" name="IdDomiciliarios" value="<?php echo $consulta1[0]?>"><br><br>
	<label>Aseguradora Soat</label>
    <input type="text" class="ctexto" id="aseguradora" name="AseguradoraSoat" value="<?php echo $consulta1[1]?>"><br><br>
	<label>Licencia de Conduccion</label>
    <input type="text" class="ctexto" id="licencia" name="LicenciaConduccion" value="<?php echo $consulta1[2]?>"><br><br>
	<input class="b1" type="submit" id="m"  name="update1" value="Actualizar">
	<!--<a href="../vista/iniciosesion.php">Ya te registraste? <u>INICIA SESIÓN</u> </a>-->
</form>
	<a id="v" href="../vista/listarusuarios.php"><button class="b1"> VOLVER AL LISTADO</button></a>


</body>
</html>