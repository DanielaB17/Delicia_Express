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
					<th>Tipos</th>
					<th>Eps</th>
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
			<td><?php echo  $key->getIdTipos() ?></td>  
			<td><?php echo  $key->getEps() ?></td>      
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
<h1 id="subt" align="center">Listado de Restaurantes</h1>
<a href="../vista/listarusuarios.php"><input type="button" value="Recargar tabla" class="boton1"></a>
<table class="table">
            <thead>
                <tr>
                    <th>IdRestaurantes</th>
                    <th>Nombres Dueño</th>
                    <th>Email</th>
                    <th>Numero Dueño</th>
					<th>Contraseña</th>
					<th>Tipo de Persona</th>
					<th>NIT</th>
					<th>Nombre del Restaurante</th>
					<th>Celular del Restaurante</th>
					<th>Barrio</th>
					<th>Acciones</th>
                </tr>
            </thead>
			<tbody>		
			<?php
			    include('../controlador/controladorlistarres.php');
                foreach ($Restaurantes as $key) {
            ?>
			<tr>
            <td><?php echo  $key->getIdRestaurantes() ?></td>
			<td><?php echo  $key->getNombresDue() ?></td>
			<td><?php echo  $key->getEmail() ?></td>
			<td><?php echo  $key->getNumeroDue() ?></td>
			<td><?php echo  $key->getContrasena() ?></td>
			<td><?php echo  $key->getTipoPersona() ?></td>  
			<td><?php echo  $key->getNIT() ?></td>  
			<td><?php echo  $key->getNomRes() ?></td> 
			<td><?php echo  $key->getCelularRes() ?></td>  
			<td><?php echo  $key->getBarrio() ?></td>      
			<td>		
			<a href="../controlador/controladoreliminarres.php?IdRestaurantes=<?php echo $key->getIdRestaurantes();?>"><input type="submit" value="Eliminar" ></a>
			<a href="actualizarrestaurantes.php?IdRestaurantes=<?php echo $key->getIdRestaurantes();?>"><input type="submit" value="Actualizar" name="update"></a>
			</td>
			</tr>
			<?php
			}
			?>
			</tbody> 
	<a href="../vista/registrorestaurantes.php"><input type="button" value="Registrar" class="boton2"></a>
</div>
</body>
</html>