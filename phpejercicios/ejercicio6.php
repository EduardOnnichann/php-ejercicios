<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
if (isset($_GET['Nombre'])) {
    $Nombre = htmlspecialchars($_GET['Nombre']);
    $Apellido = htmlspecialchars($_GET['Apellido']);
    echo "<h3>Hola, $Nombre . $Apellido!</h3>";
}
?>

<h2>¡ MUY BUENAS !</h2>
<form method="get">
  Nombre:<br>
<input type="text" name="Nombre"> <br> <br>
  Apellido:<br>
   <input type="text" name="Apellido">
  <input type="submit" value="Submit">
</form>



</body>
</html>