<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo2.css">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/actualizarrestaurantes.php');
require('../dao/daoUsuariosImpl.php');
$dao=new DaoRestaurantesImpl();
if (isset($_GET['update'])) {
    $IdRestaurantes=$_GET['IdRestaurantes'];
    $NombresDue=$_GET['nombresDue'];    
    $Email=$_GET['correo'];
    $NumeroDue=$_GET['numerodue'];
    $Contrasena=$_GET['contrasena'];
    $TipoPersona=$_GET['tipopersona'];
    $NIT=$_GET['nit'];
    $NomRes=$_GET['nombreres'];
    $CelularRes=$_GET['celres'];
    $Barrio=$_GET['barrio'];
    $a1=new Restaurantes($IdRestaurantes,$NombresDue,$Email,$NumeroDue,$ContrasenaUsuarios,$TipoPersona,$NIT,$NomRes,$CelularRes,$Barrio);
    $dao->modificar1($a1);
    echo '<span class="mensaje">¡¡SE ACTUALIZÓ CORRECTAMENTE!!</span>';
}
?> 
</body>
</html>