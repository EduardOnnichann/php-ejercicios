<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Subir archivo</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <label>Archivo:</label>
        <input type="file" name="archivo"><br><br>

        <label>Extensión:</label>
        <select name="extension">
            <option value="">-- Selecciona --</option>
            <option value="jpg">jpg</option>
            <option value="png">png</option>
            <option value="pdf">pdf</option>
        </select><br><br>

        <label>Tamaño MAX (KB):</label>
        <input type="number" name="tamano" min="1"><br><br>

        <input type="submit" name="uploadfotosej9" value="UPLOAD">
    </form>

    <?php
    // Por si no se ha enviado nada
    if (isset($_POST['uploadfotosej9'])) {

        $errores = [];

        // Validaciones básicas
        if (empty($_FILES['archivo']['name'])) {
            $errores[] = "Debe seleccionar un archivo.";
        }

        if (empty($_POST['extension'])) {
            $errores[] = "Debe seleccionar una extensión.";
        }

        if (empty($_POST['tamano']) || $_POST['tamano'] <= 0) {
            $errores[] = "Debe indicar un tamaño máximo válido.";
        }

        // Si no hay errores de formulario
        if (empty($errores)) {
            $archivo = $_FILES['archivo'];
            $extensionSeleccionada = $_POST['extension'];
            $tamanoMaximo = $_POST['tamano'] * 1024; // convertir KB a bytes

            $nombreArchivo = $archivo['name'];
            $extensionArchivo = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));
            $tamanoArchivo = $archivo['size'];

            //Lo de la extension
            if ($extensionArchivo !== $extensionSeleccionada) {
                $errores[] = "La extensión del archivo no coincide con la seleccionada.";
            } elseif ($tamanoArchivo > $tamanoMaximo) {
                $errores[] = "El archivo supera el tamaño máximo permitido.";
            } else {
                // Crear carpeta si no existe
                if (!is_dir("uploadfotosej9")) {
                    mkdir("uploadfotosej9", 0777, true);
                }

                $rutaDestino = "uploadfotosej9/" . basename($nombreArchivo);

                // Mover el archivo
                if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                    echo "<p> El archivo se subido a: <b>$rutaDestino</b></p>";
                } else {
                    echo "<p>Error al guardar el archivo.</p>";
                }
            }
        }

        // Mostrar errores (si los hay)
        if (!empty($errores)) {
            foreach ($errores as $error) {
                echo "<p>$error</p>";
            }
        }
    }
    ?>
</body>
</html> 