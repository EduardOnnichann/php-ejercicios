<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <h2>Introduce números entre 0 y 20</h2>

<form method="GET">
  Numero 1: <input type="text" name="Numero1">
  Numero 2: <input type="text" name="Numero2">
  <input type="submit" value="Submit">
  
</form>
    <hr>

    <?php
    if (isset($_GET["Numero1"]) && isset($_GET["Numero2"])) {
        $num1 = $_GET["Numero1"];
        $num2 = $_GET["Numero2"];

        if ($num1 > 20 || $num2 > 20 || $num1 < 0 || $num2 < 0) {
            echo "Los números deben estar entre 0 y 20.";
        } else {
            echo "<h3>Lista de menor a mayor:</h3>";
            if ($num1 <= $num2) {
                for ($i = $num1; $i <= $num2; $i++) {
                    //color
                    echo "<span style='color: red;'>$i</span><br>";
                    
                }
            } else {
                for ($i = $num2; $i <= $num1; $i++) {
                    echo "<span style='color: red;'>$i</span><br>";//color
                }
            }

            echo "<h3>Lista de mayor a menor:</h3>";
            if ($num1 >= $num2) {
                for ($i = $num1; $i >= $num2; $i--) {
                    echo "<span style='color: blue;'>$i</span><br>";//color
                }
            } else {
                for ($i = $num2; $i >= $num1; $i--) {
                    echo "<span style='color: blue;'>$i</span><br>";//color
                }
            }
        }
    }
    ?>

</body>
</html>