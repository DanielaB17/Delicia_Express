<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>	
	<link rel="stylesheet" type="text/css" href="../estilos/estilo19.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
    
</head>
<body>

<div class="Main">
<h1 id="subt" align="center">Listado de usuarios</h1>
<a href="../vista/listarusuarios.php"><input type="button" value="Recargar tabla" class="boton1"></a>
<table class="table">
            <thead>
                <tr>
                    <th>IdUsuarios</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
					<th>Contraseña</th>
					<th>Rol</th>
					<th>Acciones</th>
                </tr>
            </thead>
			<tbody>		
			<?php
			    include('../controlador/controladorlistar.php');
                foreach ($Usuarios as $key) {
            ?>
			<tr>
            <td><?php echo  $key->getIdUsuarios() ?></td>
			<td><?php echo  $key->getNombreUsuarios() ?></td>
			<td><?php echo  $key->getApellidoUsuarios() ?></td>
			<td><?php echo  $key->getEmailUsuarios() ?></td>
			<td><?php echo  $key->getContrasenaUsuarios() ?></td>
			<td><?php echo  $key->getIdRoles() ?></td>      
			<td>		
			<a href="../controlador/controladoreliminar.php?IdUsuarios=<?php echo $key->getIdUsuarios();?>"><input type="submit" value="Eliminar" ></a>
			<a href="actualizarusuarios.php?IdUsuarios=<?php echo $key->getIdUsuarios();?>"><input type="submit" value="Actualizar" name="update"></a>
			</td>
			</tr>
			<?php
			}
			?>
			</tbody> 
	<a href="../vista/registrousuarios.php"><input type="button" value="Registrar" class="boton2"></a>
</div>

<div class="Main">
<h1 id="subt" align="center">Listado de Domiciliarios</h1>
<table class="table">
			<thead>
                <tr>
                    <th>IdDomciliarios</th>
                    <th>AseguradoraSoat</th>
                    <th>LicenciaConduccion</th>
					<th>Acciones</th>
                </tr>
            </thead>
			<tbody>	
			<?php
                foreach ($Domiciliarios as $key1) {
            ?>	
			<tr>
			<td><?php echo  $key1->getIdDomiciliarios() ?></td>
            <td><?php echo  $key1->getAseguradoraSoat() ?></td>
			<td><?php echo  $key1->getLicenciaConduccion() ?></td>
			<td>		
			<a href="../controlador/controladoreliminar1.php?IdDomiciliarios=<?php echo $key1->getIdDomiciliarios();?>"><input type="submit" value="Eliminar" ></a>
			<a href="actualizardomiciliarios.php?IdDomiciliarios=<?php echo $key1->getIdDomiciliarios();?>"><input type="submit" value="Actualizar" name="update1"></a>
			</tr>
			<?php
			}
			?>
			</tbody> 
	<a href="../vista/registrousuarios.php"><input type="button" value="Registrar" class="boton2"></a>
</div>
</body>
</html>