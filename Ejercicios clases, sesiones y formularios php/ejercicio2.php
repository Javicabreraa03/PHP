<h1>TAQUILLA</h1>
<form action="ejercicio2.php" method="post">
    <label for="Entradas">Número de entradas: </label>
    <input type="number" name="Entradas" id="Entradas"><br>
    <label for="Zona">Zona: </label>
    <select name="tipo">
        <option value="principal">Zona Principal</option>
        <option value="vip">Zona VIP</option>
        <option value="compraventa">Compraventa</option>
    </select> <br>
    <input type="submit" value="comprar entradas">
</form>

<?php
session_start();
if (isset($_POST['tipo']) && isset($_POST['Entradas'])) {
    $_SESSION['entradas'];

    $Entradas = $_POST["Entradas"];
    $tipo = $_POST['tipo'];

    $entradasZP = 1000;
    $entradasCompraVenta = 200;
    $entradasVip = 25;

    echo "entradas y zona seleccionadas: $Entradas, $tipo <br>";

    if ($_POST['tipo'] == "principal" && $Entradas <= $entradasN) {
        echo "Entradas en la Zona ", $tipo, "<br>";
        $entradasZP -= $Entradas;
        
        echo "Entradas de la Zona Principal restantes: ", $entradasN, "<br>";
        $_SESSION['entradas'] = $entradasZP;
        $_SESSION['entradas'] = $entradasCompraVenta;
        $_SESSION['entradas'] = $entradasVip;

    } elseif ($_POST['tipo'] == "vip" && $Entradas <= $entradasVip) {
        echo "Entradas en la Zona ", $tipo, "<br>";
        $entradasVip -= $Entradas;

        echo "Entradas en la Zona VIP restantes: ", $entradasVip, "<br>";
        $_SESSION['entradas'] = $entradasZP;
        $_SESSION['entradas'] = $entradasCompraVenta;
        $_SESSION['entradas'] = $entradasVip;

    } elseif ($_POST['tipo'] == "compraventa" && $Entradas <= $entradasCompraVenta) {
        echo "Entradas de tipo ", $tipo, "<br>";
        $entradasCompraVenta -= $Entradas;

        echo "Entradas de Compra-Venta restantes: ", $entradasCompraVenta, "<br>";
        $_SESSION['entradas'] = $entradasZP;
        $_SESSION['entradas'] = $entradasCompraVenta;
        $_SESSION['entradas'] = $entradasVip;
    } elseif ($Entradas > $entradasZP || $Entradas > $entradasCompraVenta || $Entradas > $entradasVip) {
        echo "¡Estas intentado comprar más entradas de las disponibles!";
    }
}



?>