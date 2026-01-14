<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="ejercicio9.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br><br>
    <input type="file" name="uploadfotosej9" id="uploadfotosej9"><br><br>
    <input type="submit" value="Upload Image" name="submit"><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Para saber si le ha dado al boton
    //Lo pasas de un sitio a
    $target_dir = "uploadfotosej9/"; //carpeta destino
    //definir nombre fichero
    $target_file = $target_dir . basename($_FILES["uploadfotosej9"]["name"]);
    $uploadOk = 1;

    $imageFileType = strtolower(string: pathinfo(path: $target_file, flags: PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["uploadfotosej9"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["uploadfotosej9"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


</body>
</html>