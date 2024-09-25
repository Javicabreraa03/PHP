<?php
//Crea el formulario registro.php donde el usuario introduzca los datos de registro y 
// vincúlalo con nuevoUsuario.php para que recoja los datos mediante POST y los 
// inserte en la base de datos si todo ha ido bien.
echo"<form action=\"nuevoUsuario.php\" method=\"post\">
<p><label for=\"nombre\">nombre: </label> <input type=\"text\" name=\"nombre\" id=\"nombre\"></p>
<p><label for=\"usuario\">usuario: </label> <input type=\"text\" name=\"usuario\" id=\"usuario\"></p>
<p><label for=\"contrasena\">contraseña: </label> <input type=\"text\" name=\"contrasena\" id=\"contrasena\"></p>
<p><label for=\"email\">email: </label> <input type=\"text\" name=\"email\" id=\"email\"></p>
<p><input type=\"submit\" name=\"accion\" value=\"enviar\"></p>
</form>";
?>