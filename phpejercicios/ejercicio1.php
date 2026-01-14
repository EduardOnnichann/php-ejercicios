<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "EJERCICIO 1" . "<br>" . "<br>";

$num1 = 5;
$num2 = 4;
$resultSum = $num1 + $num2;
$resultSub = $num1 - $num2;
$resultMul = $num1 * $num2;
$resultDiv = $num1 / $num2;
$resultTriangulo = $resultMul / 2;

echo "The numbers are " . $num1 . " and " . $num2 . "<br>";
echo "The sum of " . $num1 . " and " . $num2 . " = " . "<br>";
echo "The sub of " . $num1 . " and " . $num2 . " = " . $resultSub . "<br>";
echo "The mul of " . $num1 . " and " . $num2 . " = " . $resultMul . "<br>";
echo "The div of " . $num1 . " and " . $num2 . " = " . $resultDiv . "<br>";


if ($num1 > $num2) {
    echo "the number ". $num1 .  "is the greatest number " . $num2 . "<br>"; 
}

echo "The triangle area is " . $resultTriangulo .  "<br>";

echo "<br>";

    ?>    



echo "EJERCICIO 3" . "<br>" . "<br>";

$var1 = 12;
$var2 = 15;


for ($i = 0; $i <= $var1; $i++) {
}

 if ($i%2==0) {

echo $i . ", " . "<br>";

}


while ($var2 >= 0) {
    echo $var2 . ", <br> ";
    $var2--;

}
do {

echo $var1;
$var1++;

} while ($var1 <= $var2);

echo "<br>" . "<br>";    

?>

<?php

echo "EJERCICIO 4" . "<br>" . "<br>";

$numero = rand(1, 6);
 
 
$raiz = sqrt($numero);
 
 
echo "The square root of $numero is $raiz";

echo "<br>";

?>  




</body>
</html>