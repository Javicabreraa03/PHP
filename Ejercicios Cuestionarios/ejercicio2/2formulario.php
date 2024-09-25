<?php
$nombre = $_POST["nom"];
$email = $_POST["email"];
$enlace = $_POST["enlace"];
$sexo = $_POST["sexo"];
$nConvivientes = $_POST["nConvivientes"];
$aficiones = $_POST["aficiones"];
$menuFav = $_POST["menuFav"];


?>
<table border="1">
    <tr>
        <th>Nombre y apellidos</th>
        <td><?php echo $nombre ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <th>Enlace a pagina personal</th>
        <td><a href="<?php echo $enlace ?>">enlace</a> </td>
    </tr>
    <tr>
        <th>Número de convivientes</th>
        <td><?php echo $nConvivientes ?></td>
    </tr>
    <tr>
        <th>Aficion(es)</th>

        <!-- el implode me lo ha enseñado Ivan-->
        <td><?= implode(", ", $aficiones)  ?></td>
    </tr>
    <tr>
        <th>Menu favorito</th>
        <td><?= implode(", ", $menuFav)  ?></td>
    </tr>
</table>