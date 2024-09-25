<?php

$nombre = $_POST["nombre"];
$user = $_POST["usuario"];
$contra = $_POST["contrasena"];
$email = $_POST["email"];

// echo "$nombre, $user, $contra, $email";
$conexion = new PDO('mysql:host=localhost; dbname=lol', 'root','');

$hash=password_hash($contra, PASSWORD_DEFAULT);

if($nombre == null || $user== null || $contra== null || $email== null){
    echo"¡AVISO! ¡Le falta uno o más campos por rellenar!<br>";
    echo"<button> <a href=\"registro.php\">volver</a> </button>";
}else {
    echo "El usuario <strong>$user</strong> ha sido introducido en el sistema 
        con la contraseña <strong>$contra</strong>.";
    $insercion = $conexion->exec("INSERT INTO usuario(nombre, usuario, password, email) 
        VALUES('$nombre', '$user', '$hash', '$email')");
}



// $consulta = $conexion->query("SELECT * FROM `usuario`");
?>