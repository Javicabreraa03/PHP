<?php
$usuario = $_GET["usuario"];
$contraseña = $_GET["contraseña"];
$array=["usuario"=>$usuario,"contraseña"=>$contraseña];
if($usuario == "javi03" and $contraseña == "siuuuu"){
  echo "Correcta";
}else{
 echo "Incorrecta";

}