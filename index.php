<!DOCTYPE html>
<html>
<head>
	<title>Registro de Empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Empleados</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
		<input type="text" name="apellido" placeholder="Apellidos">
		<input type="text" name="edad" placeholder="Edad">
		<input type="text" name="INE" placeholder="INE">
		<input type="text" name="CURP" placeholder="CURP">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>