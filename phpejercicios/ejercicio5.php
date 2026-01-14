<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
$a = 0;          
$num = 0;        
$pares = 0;      
$impares = 0;    
$valores = [];   

do {
    $num = rand(0, 20);     
    echo $num . ",";       
    $a += $num;            
    $valores[] = $num;     

    
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

} while ($a <= 100);

echo "<br><br>";
echo "The sum total is $a <br>";
echo "There were $pares even numbers <br>";
echo "There were $impares odd numbers <br>";

    ?>

</body>
</html>