<?php

/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 24/07/2016
 * Time: 20:19
 */
class Enrutador
{
    public function cargarVista($vista){
        switch($vista):
            case "crear":
                include_once('vistas/' .$vista. '.php');
                break;

            case "ver":
                include_once('vistas/' .$vista. '.php');
                break;

            case "editar":
                include_once('vistas/' .$vista. '.php');
                break;

            case "eliminar":
                include_once('vistas/' .$vista. '.php');
                break;

            default:
                include_once('vistas/error.php');
        endswitch;
    }

    public function validarGet($variable){
        if(empty($variable)){
            include_once('vistas/inicio.php');
        }else{
            return true;
        }

    }

}