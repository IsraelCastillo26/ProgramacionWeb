<html>
<head>
	<title>Practica 3</title>
</head>

<body>
<?php
$a = 7;
$b = 4;
echo "<b> Practica 3 <br> Palma Castillo Israel </b> <br><br>";
echo "A la variable a se le asigna el valor de $a y la variable b el valor de $b <br><br>";
echo "<b> Operadores aritmeticos </b> <br>";

echo "Esto es una suma $a + $b = " .($a + $b). "<br>";
echo "Esto es una resta $a - $b = " . ($a - $b) . "<br>";
echo "Esto es una multiplicación $a * $b = " . ($a * $b) . "<br>";
echo "Esto es una división $a / $b = " . ($a / $b) . "<br>";
echo "Esto es un módulo (resto de la división) $a % $b = " . ($a % $b) . "<br><br>";

echo "<b> Operadores de incremento y decremento </b> <br>";
$a++;
echo "Esto es un incremento (++), ahora a es igual a $a <br>";

$b--;
echo "Esto es un decremento (--), ahora b es igual a $b <br><br>";

$a = 7;
$b = 4;
echo "<b> Operadores de comparacion </b> <br>";
echo "Comparación de igualdad ($a == $b): " . ($a == $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de identidad ($a === $b): " . ($a === $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de diferencia ($a <> $b): " . ($a <> $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de diferencia ($a != $b): " . ($a != $b ? "verdadero" : "falso") . "<br>";
echo "Comparación de no identidad ($a !== $b): " . ($a !== $b ? "verdadero" : "falso") . "<br>";
echo "Comparación mayor que ($a > $b): " . ($a > $b ? "verdadero" : "falso") . "<br>";
echo "Comparación menor que ($a < $b): " . ($a < $b ? "verdadero" : "falso") . "<br>";
echo "Comparación mayor o igual que ($a >= $b): " . ($a >= $b ? "verdadero" : "falso") . "<br>";
echo "Comparación menor o igual que ($a <= $b): " . ($a <= $b ? "verdadero" : "falso") . "<br> <br>";

echo "<b> Operadores de asignacion </b> <br>";
echo "En estos operadores agregamos una variable c, a la cual le asignamos el valor a.<br><br>";
$c = $a;
echo "Asignación, ahora c es igual a = $c <br>";

$c += $b;
echo "Esto es una suma y asignación, ahora c = $c (resultado de $a + $b) <br>";

$c -= $b;
echo "Esto es una resta y asignación, ahora c = $c (resultado de $a - $b) <br>";

$c *= $b;
echo "Esto es una multiplicación y asignación, ahora c = $c (resultado de $a * $b) <br>";

$c /= $b;
echo "Esto es una división y asignación, ahora c = $c (resultado de $a / $b) <br>";

$c %= $b;
echo "Esto es un módulo y asignación, ahora c = $c (resto de $a % $b) <br> <br>";

echo "<b> Operadores logicos </b> <br>";
echo "Se agrega una nueva variable para asignar el posible resultado. <br><br>";
$d = ($a > 10) && ($b < 10);
echo "Esto es una operación lógica AND: (($a > 10) && ($b < 10)) es " . ($d ? "verdadero" : "falso") . "<br>";

$d = ($a > 10) || ($b > 10);
echo "Esto es una operación lógica OR: (($a > 10) || ($b > 10)) es " . ($d ? "verdadero" : "falso") . "<br>";

$d = !($a == $b);
echo "Esto es una operación lógica NOT: !($a == $b) es " . ($d ? "verdadero" : "falso") . "<br><br>";

echo "<b> Operadores de cadena </b> <br>";
echo "Tenemos la variable mensaje y le asignamos el valor Emilio para luego juntarlo con la palabra Loeza<br>";
$mensaje = "Emilio";
echo "Concatenación de cadena con (.): " . $mensaje . " Loeza<br><br>";
echo "Acá ya teniendo la variable anterior le asignaremos ahora la palabra Loeza<br>";
$mensaje .= " Loeza";
echo "Asignación con concatenación (.=): " . $mensaje . "<br>";
?>
</body>
</html>