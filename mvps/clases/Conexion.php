<?php

/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 23/07/2016
 * Time: 18:28
 */
class Conexion
{
    private $host;
    private $user;
    private $pass;
    private $bd;


    //Metodos
    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->bd   = "mvps";

        $con = mysql_connect($this->host, $this->user, $this->pass );
        if($con)
            mysql_select_db($this->bd);

    }

    public function consulta($sql){
        mysql_query($sql);
    }


    public function consultaRetorno($sql){
        $consulta = mysql_query($sql);
        return $consulta;
    }


}