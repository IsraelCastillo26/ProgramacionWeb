<html>
<head>
	<title>Practica 2</title>
</head>

<body>
<?php
echo "<b> Practica 2 <br> Palma Castillo Israel </b> <br><br>";
function Mensaje (){
echo "<br>";
echo "Hola mundo <br>";
}

Mensaje(); //Mandamos a llamar a la función 

$a=10; //Variable global
function Variables(){
$b=15; //Variable local ya que no se declaro como variable global
echo "Prueba de la impresión de variables dentro <br>";
echo "La variable a es $a <br>";
echo "La variable b es $b <br><br>";
}
Variables();

echo "Prueba de la impresión de variables fuera <br>";
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";
?> 
</body>
</html>