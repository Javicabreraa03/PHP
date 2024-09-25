<?php
if (is_uploaded_file($_FILES["archivo"]["tmp_name"])) {
    $anchura = $_POST["Anchura"];
    $altura = $_POST["Altura"];
    $archivo = $_FILES["archivo"]["name"];
    move_uploaded_file($_FILES["archivo"]["tmp_name"], "./imagenes/$archivo");

    echo "¡Archivo $archivo subido con exito! <br>";
    echo"<img src=\"./imagenes/{$archivo}\" alt=\"\" width=\"$anchura\" height=\"$altura\">";
}else {
    echo"¡Error al subir el archivo!";
}
    
?>
