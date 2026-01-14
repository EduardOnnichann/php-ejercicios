<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Datos personales</h2>

<form method="get" action="">
    Nombre: <input type="text" name="nombre"><br><br>
    Número 1: <input type="number" name="num1"><br><br>
    Número 2: <input type="number" name="num2"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET['nombre']) && isset($_GET['num1']) && isset($_GET['num2'])) {
    $nombre = $_GET['nombre'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "<h3>Welcome $nombre!</h3>";

    //enseñar si los números son pares o impares
    if ($num1 % 2 == 0) {
        echo "$num1 is even<br>";
    } else {
        echo "$num1 is odd<br>";
    }

    if ($num2 % 2 == 0) {
        echo "$num2 is even<br>";
    } else {
        echo "$num2 is odd<br>";
    }

    //orden
    if ($num1 < $num2) {
        $inicio = $num1;
        $fin = $num2;
    } else {
        $inicio = $num2;
        $fin = $num1;
    }

    //enseñar números con color
    for ($i = $inicio; $i <= $fin; $i++) {
        if ($i % 2 == 0) {
            echo "<span style='color:green;'>$i </span>";
        } else {
            echo "<span style='color:orange;'>$i </span>";
        }
    }
}
?>

</body>
</html>