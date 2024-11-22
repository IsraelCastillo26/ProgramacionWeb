<html>
<head>
	<title>Practica 9</title>
</head>

<body>
<?php
echo "<b> Practica 9 <br> Palma Castillo Israel </b> <br><br>";
    require ("config.php");
    echo "<h1>Práctica: Creación de una tabla</h1><br><br>";
    $conexion=mysqli_connect($servidor, $usuario, $password, $bd);
    $tabla="Tareas";

    $consulta="create table $tabla (id int(2), nombre varchar(30), valor int(2))";
    if ($resultado=mysqli_query($conexion, $consulta))
    {
        echo"La tabla $tabla, se creó con éxito <br>";
        echo"El script utilizado fue: $consulta <br> <br>";
    }
        else
    {
        echo"La tabla $tabla no se ha podido crear<br>  ".mysqli_connect_error($conexion);
    }
    echo "<br><br>";
    mysqli_close($conexion);
?>
</body>
</html>