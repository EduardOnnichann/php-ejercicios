<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 07</h1>
    
    <form method="POST" action="ejercicio12.php"> 
        <div>
            <div>
                <h2>Jugador 1</h2>
                <label for="luchador1">Luchador:</label>
                <select name="luchador1" id="luchador1">
                    <option value="Doraemon">Doraemon</option>
                    <option value="Nobita">Nobita</option>
                </select>
                <br><br>
                <label for="objeto1">Objeto:</label>
                <select name="objeto1" id="objeto1">
                    <option value="Sarten">Sartén 1d8</option>
                    <option value="Katana">Katana 2d4</option>
                </select>
            </div>

            <div>
                <h2>Jugador 2</h2>
                <label for="luchador2">Luchador:</label>
                <select name="luchador2" id="luchador2">
                    <option value="Nobita">Nobita</option>
                    <option value="Doraemon">Doraemon</option>
                </select>
                <br><br>
                <label for="objeto2">Objeto:</label>
                <select name="objeto2" id="objeto2">
                    <option value="Dorayaki">Dorayaki 2d4</option>
                    <option value="Escudo">Escudo 1d8</option>
                </select>
            </div>
            <div style="clear: both;"></div> </div>

        <br><hr><br>
        
        <div>
            <label for="rondas">Rondas (1–10):</label>
            <input type="number" name="rondas" id="rondas" min="1" max="10" value="5" required>
        </div>
        
        <br>
        <input type="submit" name="luchar" value="¡Luchar!">
    </form>
    <?php
    

    if (isset($_POST['luchar'])) {
        
        $luchador1 = $_POST['luchador1'];
        $objeto1   = $_POST['objeto1'];
        $luchador2 = $_POST['luchador2'];
        $objeto2   = $_POST['objeto2'];
        // no de decimal
        $rondas    = (int)$_POST['rondas']; 

        // contador
        $victorias1 = 0;
        $victorias2 = 0;
        $empates    = 0;
        $resultados_ronda = [];
        
        echo "<h2>Resultados por ronda</h2>";
        
        // bucle del combate
        for ($i = 1; $i <= $rondas; $i++) {
            
            //jugador 1 
            $puntuacion1 = 0;
            $tiros_j1_str = ""; 

            // las armas, dados1
            if ($objeto1 == 'Sarten' || $objeto1 == 'Escudo') { // 1d8
                $dado = rand(1, 8);
                $puntuacion1 = $dado;
                $tiros_j1_str = "$dado";
            } elseif ($objeto1 == 'Katana' || $objeto1 == 'Dorayaki') { // 2d4
                $dado1 = rand(1, 4);
                $dado2 = rand(1, 4);
                $puntuacion1 = $dado1 + $dado2;
                $tiros_j1_str = "$dado1 + $dado2";
            }

            // jugador 2
            $puntuacion2 = 0;
            $tiros_j2_str = "";

            // las armas, dados2
            if ($objeto2 == 'Sarten' || $objeto2 == 'Escudo') { // 1d8
                $dado = rand(1, 8);
                $puntuacion2 = $dado;
                $tiros_j2_str = "$dado";
            } elseif ($objeto2 == 'Katana' || $objeto2 == 'Dorayaki') { // 2d4
                $dado1 = rand(1, 4);
                $dado2 = rand(1, 4);
                $puntuacion2 = $dado1 + $dado2;
                $tiros_j2_str = "$dado1 + $dado2";
            }
            
            // quien gana
            $resultado_ronda = "";
            $ronda_actual = $i;
            
            if ($puntuacion1 > $puntuacion2) {
                $resultado_ronda = "Ganador: " . $luchador1;
                $victorias1++;
            } elseif ($puntuacion2 > $puntuacion1) {
                $resultado_ronda = "Ganador: " . $luchador2;
                $victorias2++;
            
            }
            
            //guardar results para la tabla
            $resultados_ronda[] = [
                'ronda'   => $ronda_actual,
                'luchador1' => $tiros_j1_str . " ($puntuacion1)",
                'luchador2' => $tiros_j2_str . " ($puntuacion2)",
                'resultado' => $resultado_ronda,
            ];
        }
        
        // tabla
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Ronda</th><th>" . $luchador1 . "</th><th>" . $luchador2 . "</th><th>Resultado</th></tr>";
        
        foreach ($resultados_ronda as $fila) {
            echo "<tr>";
            echo "<td>" . $fila['ronda'] . "</td>";
            echo "<td>" . $fila['luchador1'] . "</td>";
            echo "<td>" . $fila['luchador2'] . "</td>";
            echo "<td>" . $fila['resultado'] . "</td>";
            echo "</tr>";
        }
            echo "</table>";
            echo "<div style='text-align: center; width: 30%;'>";
                echo "Victorias {$luchador1}: <b>{$victorias1}</b>";
                // Imagen del luchador 1
                $imagen_luchador1 = ($luchador1 == 'Doraemon') ? "
" : "
";
            echo "<br><img src=doraemon.jpg alt='{$luchador1}' style='width: 80px; height: 80px;'>";
            echo "</div>";
            echo "<div style='text-align: center; width: 30%;'>";


                echo "Rondas empatadas: <b>{$empates}</b>";
                echo "<br><img src=va.jpg alt='VS' style='width: 80px; height: 80px;'>";
                echo "</div>";

                
            echo "<div style='text-align: center; width: 30%;'>";
                echo "Victorias {$luchador2}: <b>{$victorias2}</b>";
                // Imagen del luchador 2
                $imagen_luchador2 = ($luchador2 == 'Doraemon') ? "
" : "
";
            echo "<br><img src=nobita.jpg alt='{$luchador2}' style='width: 80px; height: 80px;'>";
            echo "</div>";
            echo "</div>";



        //ganador final
        echo "<h2>Resultado Final</h2>";
        echo "<p>Victorias {$luchador1}: <b>{$victorias1}</b> | Victorias {$luchador2}: <b>{$victorias2}</b> | Rondas Empatadas: <b>{$empates}</b></p>";
        
        $ganador_final = "";
        if ($victorias1 > $victorias2) {
            $ganador_final = "Ha ganado " . $luchador1;
        } elseif ($victorias2 > $victorias1) {
            $ganador_final = "Ha ganado " . $luchador2;
        } else {
            $ganador_final = "Empate en la partida";
        }

        echo "<h3>" . $ganador_final . "</h3>";
    }

    ?>
</body>
</html>