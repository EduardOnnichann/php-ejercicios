<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar números</title>
</head>
<body>

<h2>Simple Greeting Form</h2>
<form method="get">
  Numero 1: <input type="text" name="numero1">
  <br><br>
  Numero 2: <input type="text" name="numero2">
  <br><br>
  <input type="submit" value="Submit">
</form>

<?php
$Numero1 = $Numero2 = null;

//determinar todas las posibilidades

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $Numero1 = htmlspecialchars($_GET['numero1']);
    $Numero2 = htmlspecialchars($_GET['numero2']);

    if ($Numero1 > $Numero2) {
        echo "El número $Numero1 es mayor que $Numero2";
    } else if ($Numero1 < $Numero2) {
        echo "El número $Numero1 es menor que $Numero2";
    } else {
        echo "El número $Numero1 es igual a $Numero2";
    }
}
?>
</body>
</html>