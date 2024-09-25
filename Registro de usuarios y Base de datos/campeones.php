<?php

$conexion = new PDO('mysql:host=localhost; dbname=lol', 'root','');

    $consulta = $conexion->query("SELECT * FROM `campeon`");

    echo "<table border=\"1\">";
    echo"<tbody>";
    echo"<tr>
        <th>id</th>
        <th>nombre</th>
        <th>rol</th>
        <th>dificultad</th>
        <th>descripcion</th>
    </tr>";

    while ($campeones = $consulta->fetch()) {
        echo "<tr>
        <td>$campeones[id]</td>
        <td>$campeones[nombre]</td>
        <td>$campeones[rol]</td>
        <td>$campeones[dificultad]</td>
        <td>$campeones[descripcion]</td>
        </tr>";
    }
    echo"</tbody>
    </table>";
    /*if (mysqli_connect_errno()) {

        echo "Failed to connect to MySQL: ". mysqli_connect_error();
        exit();
    }
    
    $listaCampeones = mysqli_query($conexion, $consulta);

    echo "<table border=\"1\">";
    echo"<tbody>";
    echo"<tr>
        <th>id</th>
        <th>nombre</th>
        <th>rol</th>
        <th>dificultad</th>
        <th>descripcion</th>
    </tr>";
    if ($listaCampeones) {

        foreach ($listaCampeones as $campeones) {
            echo "<tr>
            <td>$campeones[id]</td>
            <td>$campeones[nombre]</td>
            <td>$campeones[rol]</td>
            <td>$campeones[dificultad]</td>
            <td>$campeones[descripcion]</td>
            </tr>";
        }
    }
    echo"</tbody>";
    echo "</table>";*/
?>