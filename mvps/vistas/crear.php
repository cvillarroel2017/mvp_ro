<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 24/07/2016
 * Time: 20:45
 */
    $controller = new Controller();
    if(isset($_POST['enviar'])){
        $r = $controller->crear($_POST['nombre'],$_POST['mapa'],$_POST['matado'],$_POST['respawn']);

        if($r){
            echo "Se ha ingresado el nuevo MVP!";
        }else{
            echo "No se ha ingresado el MVP";
        }
    }
?>
<h1>Ingresar un nuevo MVP</h1>
<hr>
    <form action="" method="POST">
        <label>Nombre MVP</label>
        <input type="text" name="nombre" maxlength="50" required>
        <br>
        <label>Mapa MVP</label>
        <input type="text" name="mapa" maxlength="50" required>
        <br>
        <label>Matado</label>
        <input type="time" name="matado" maxlength="50" value="00:00" required>
        <br>
        <label>Respawn MVP</label>
        <input type="time" name="respawn" maxlength="50" value="00:00" required>
        <br>
        <input type="submit" value="Añadir MVP" name="enviar"/>
    </form>