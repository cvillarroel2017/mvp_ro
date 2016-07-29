<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 28/07/2016
 * Time: 22:52
 */
    $controller = new Controller();
    if(isset($_GET['id'])){
        $row = $controller->ver($_GET['id']);
    }else{
        header('location: index.php');
    }

?>

<b>Nombre MVP</b> <?php echo $row['nombre_mvp']; ?>
<br><br>
<b>Mapa MVP</b> <?php echo $row['mapa_mvp']; ?>
<br><br>
<b>Nombre MVP</b> <?php echo $row['matado']; ?>
<br><br>
<b>Nombre MVP</b> <?php echo $row['respawn']; ?>
<br><br>

