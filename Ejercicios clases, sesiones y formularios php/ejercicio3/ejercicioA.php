<?php
if(isset($_POST["boton"])){
$acessosPagina = 0; 
echo "<br>Se han reiniciado las cookies";
}
else{
    $acessosPagina = $_COOKIE['accesos'];
}
//CONTADOR
setcookie('accesos',++$acessosPagina);
if($acessosPagina==1){
    echo "<br>Bienvenido es la primera ve que entras";
}
else{
echo "Accesos a la pagina : ".$acessosPagina;
}

?>
<!-- EL FORMULARIO -->
<form action="ejercicioA.php" method = "post">
<input type="submit"value="boton"name="boton">
</form>

