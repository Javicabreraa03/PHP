<?php
    $cantidadProductos= $_GET["numero"];
?>

<form action="datosticket.php" method="get">
    <ul>
        <?php
            for ($i=0;$i<=$cantidadProductos-1;$i++){
                echo "<li>
                <label for='nombreproducto$i'>Nombre:</label>
                <input type='text' id='nombreproducto$i' name='nombreproducto$i'>
                </li>
                <li>
                <label for='cantidad$i'>Cantidad:</label>
                <input type='int' id='cantidad$i' name='cantidad$i'>
                </li>
                <li>
                <label for='precio$i'>Precio:</label>
                <input type='int' id='precio$i' name='precio$i'>
                </li>";
            }
        ?>
     <p><input type="submit" value="Dar ticket"></p>
    </ul>
    <input type="hidden" id="numeroProductos" name="numeroProductos" value="<?php echo $cantidadProductos; ?>" />
</form>