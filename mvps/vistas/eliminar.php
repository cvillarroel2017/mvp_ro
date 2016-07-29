<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 29/07/2016
 * Time: 0:02
 */
    $controller = new Controller();
    if(isset($_GET['id'])){
        $row = $controller->ver($_GET['id']);
    }else{
        header('location: index.php');
    }

    if(isset($_POST['enviar'])){
        $controller->eliminar($_GET['id']);
        header('location: index.php');
    }

?>
¿ Estas seguro que quieres eliminar el MVP <?php echo $row['nombre_mvp'];?> ?
<br>
<form action="" method="POST">
    <input type="submit" name="enviar" value="Eliminar"/>
</form>

