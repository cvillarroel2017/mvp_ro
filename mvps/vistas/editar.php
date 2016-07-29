<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 28/07/2016
 * Time: 23:29
 */
    $controller = new Controller();
    if(isset($_GET['id'])){
        $row = $controller->ver($_GET['id']);
    }else{
        header('location: index.php');
    }

    if(isset($_POST['enviar'])){
        $controller->editar($_GET['id'], $_POST['nombre'], $_POST['mapa'], $_POST['matado'], $_POST['respawn']);
        header('location: index.php');
    }



?>
<h1>Editar MVP</h1>
<form action="" method="POST">
    Nombre MVP<br>
    <input type="text" name="nombre" value="<?php echo $row['nombre_mvp'];?>" />
    <br><br>
    Mapa MVP<br>
    <input type="text" name="mapa" value="<?php echo $row['mapa_mvp'];?>" />
    <br><br>
    Matado<br>
    <input type="text" name="matado" value="<?php echo $row['matado'];?>" />
    <br><br>
    Respawn<br>
    <input type="text" name="respawn" value="<?php echo $row['respawn'];?>" />
    <br><br>
    <input type="submit" name="enviar" value="Editar">
</form>
