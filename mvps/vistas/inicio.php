<?php
    $controller = new Controller();
    $resultado = $controller->index();

?>

<h2>MVPS MATADOS</h2>
<table class="table">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>MAPA</th>
        <th>MATADO</th>
        <th>RESPAWN</th>
    </thead>
    <tbody>

    <?php while($row = mysql_fetch_array($resultado)):?>
        <tr>
            <td> <?php echo $row['id_mvp'];     ?></td>
            <td> <?php echo $row['nombre_mvp']; ?></td>
            <td> <?php echo $row['mapa_mvp'];   ?></td>
            <td> <?php echo $row['matado'];     ?></td>
            <td> <?php echo $row['respawn'];    ?></td>

            <td>
                <a href="?cargar=ver&id=<?php echo $row['id_mvp']?>">Ver</a>
                <a href="?cargar=editar&id=<?php echo $row['id_mvp']?>">Editar</a>
                <a href="?cargar=eliminar&id=<?php echo $row['id_mvp']?>">Eliminar</a>
            </td>
        </tr>
    <?php endwhile;?>
    </tbody>
</table>





