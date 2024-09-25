<?php
 echo $_SERVER["PHP_SELF"]."</br>";
 echo $_SERVER["SERVER_SOFTWARE"]."</br>";
 echo $_SERVER["SERVER_NAME"]."</br>";
 echo $_SERVER["REQUEST_METHOD"]."</br>";
 echo $_SERVER["REQUEST_URI"]."</br>";
 echo $_SERVER["QUERY_STRING"]."</br>";

 // del ejercicio 1enlace.html
 echo $_SERVER["HTTP_REFERER"]."</br>";
 // el metodo predeterminado es GET, a menos que, 
    // como en este ejercicio, se especifiqeu POST
?>