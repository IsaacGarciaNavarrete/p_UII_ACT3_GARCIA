<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 
	&& strlen($_POST['apellido']) >= 1 
	&& strlen($_POST['edad']) >= 1
	&& strlen($_POST['INE']) >= 1
	&& strlen($_POST['CURP']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
	    $edad = trim($_POST['edad']);
		$INE = trim($_POST['INE']);
		$CURP = trim($_POST['CURP']);
	    $consulta = "INSERT INTO empleado (nombre, apellido, edad, INE, CURP) VALUES ('$nombre','$apellido','$edad','$INE','$CURP')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>