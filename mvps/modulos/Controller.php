<?php

/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 24/07/2016
 * Time: 15:42
 */

include_once ('clases/Mvp.php');

class Controller
{
    // Atributos
    private $mvp;

    // Metodos
    public function __construct()
    {
        $this->mvp = new Mvp();
    }

    public function index(){
        $resultado = $this->mvp->listar();
        return $resultado;
    }

    public function crear($nombre, $mapa, $matado, $respawn){
        $this->mvp->set("nombre", $nombre);
        $this->mvp->set("mapa", $mapa);
        $this->mvp->set("matado", $matado);
        $this->mvp->set("respawn", $respawn);

        $resultado = $this->mvp->crear();
        return $resultado;
    }

    public function eliminar($id){
        $this->mvp->set("id", $id);
        $this->mvp->eliminar();
    }

    public  function ver($id){
        $this->mvp->set("id", $id);
        $datos = $this->mvp->mostrar($id);
        return $datos;
    }

    public function editar($id, $nombre, $mapa, $matado, $respawn){
        $this->mvp->set('id', $id);
        $this->mvp->set('nombre', $nombre);
        $this->mvp->set('mapa', $mapa);
        $this->mvp->set('matado', $matado);
        $this->mvp->set('respawn', $respawn);
        $this->mvp->editar();
    }

}