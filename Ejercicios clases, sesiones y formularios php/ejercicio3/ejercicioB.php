
<form action="ejercicioB.php" method="POST">
    <input type="number" name="numero">
    <input type="submit" value="Aceptar">
</form>
<?php
session_start();
if ($_POST) {
    $numero = 0;
    $numero = $_POST['numero'];
    if (isset($numero) || ($_SESSION['suma'] <= 10000)) {

        if (isset($n)) {
            $_SESSION['contador']++;
            $_SESSION['suma'] += $numero;

            if ($_SESSION['suma'] > 10000) {
                echo "<br><br>Ha introducido " . $_SESSION['contador'] . " números.<br>";
                echo "La suma es " . $_SESSION['suma'] . "<br>";
                echo "La media es " . $_SESSION['suma'] / $_SESSION['contador'] . "<br>";
            }
        }
    }
}
?>




