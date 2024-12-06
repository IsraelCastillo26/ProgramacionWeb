<html>
<head>
	<title>Practica 11</title>
</head>

<body>
<?php
echo "<b> Practica 11 <br> Palma Castillo Israel </b> <br><br>";
    require ("config.php");
    echo "<h1>Práctica: Insertar registros a una tabla</h1><br><br>";
    $conexion=mysqli_connect($servidor, $usuario, $password, $bd);

	$nombre = $_POST['nombre'];
	$carrera = $_POST['carrera'];
	$escuela = $_POST['escuela'];

    $consulta = "INSERT INTO alumnos (nombre, Carrera, Escuela) VALUES ('$nombre', '$carrera', '$escuela')";
	if ($resultado =mysqli_query($conexion, $consulta))
	{
		echo "Registro guardado con exito";
	}
	else
	{
		echo "No se pudo guardar tu registro pipipi";
	}
    echo "<br><br>";
    mysqli_close($conexion);
?>
</body>
</html>