<html>
<head>
	<title>Practica 6</title>
</head>

<body>
<?php
echo "<b> Practica 6 <br> Palma Castillo Israel </b> <br><br>";
     require("config.php");
     echo "<h1> Practica: Conexion a mi servidor de datos MYSQL </h1><br>";
     if($conexion = mysqli_connect($servidor, $usuario, $password , $bd)){
        echo "Tu conexion ha sido exitosa";
     } else{
        echo "Error conectando a MySQL <br>" .mysqli_connect_error();
     }
     echo "<br><br>";
     mysqli_close($conexion);
?>
</body>
</html>