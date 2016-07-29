<?php

/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 23/07/2016
 * Time: 20:22
 */
include_once('Conexion.php');

class Mvp
{
    private $id;
    private $nombre;
    private $mapa;
    private $matado;
    private $respawn;

    private $con;

    public function __construct(){
        $this->con = new Conexion();
    }

    public function  set($atributo, $contenido){
        $this->$atributo = $contenido;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    // Listar mvps
    public function listar(){
        $sql = "SELECT id_mvp,
                       nombre_mvp,
                       mapa_mvp,
                       matado,
                       respawn
                FROM mvp";
        $result = $this->con->consultaRetorno($sql);
        return $result;
    }

    // Lista los mvp de la tabla mvp
    public function mostrar(){
        $sql = "SELECT id_mvp, nombre_mvp, mapa_mvp, matado, respawn from mvp
                WHERE id_mvp = '{$this->id}'";

        $result = $this->con->consultaRetorno($sql);
        $row = mysql_fetch_assoc($result);

        // Set
        $this->id      = $row['id_mvp'];
        $this->nombre  = $row['nombre_mvp'];
        $this->mapa    = $row['mapa_mvp'];
        $this->matado  = $row['matado'];
        $this->respawn = $row['respawn'];

        return $row;

    }

    // Crea un mvp en la tabla mvp
    public function crear(){
    //    $sql_0  = "SELECT * FROM mvp WHERE ID = '{$this->id}'";
    //    $result = $this->con->consultaRetorno($sql_0);
    //    $num    = mysql_num_rows($result);
          $num = 0;
        //Si existe registro no ingresa nada
        if($num > 0)
        {
            return false;
        }
        else
        {
            $sql = "INSERT INTO mvp (nombre_mvp, mapa_mvp, matado, respawn) VALUES (
                   '{$this->nombre}', '{$this->mapa}', '{$this->matado}', '{$this->respawn}')";
            $this->con->consulta($sql);
            return true;
        }
    }

    // Elimina un mvp de la mvp
    public function eliminar(){
        $sql = "DELETE FROM mvp where id_mvp = '{$this->id}'";
        $this->con->consulta($sql);
    }

    // Edita un mvp
    public function editar(){
        $sql = "UPDATE mvp set nombre_mvp = '{$this->nombre}',
                               mapa_mvp   = '{$this->mapa}',
                               matado     = '{$this->matado}',
                               respawn    = '{$this->respawn}'
                               
                WHERE id_mvp = '{$this->id}'";
        $this->con->consulta($sql);
    }

}