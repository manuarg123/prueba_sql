<?php

/**
 * Conexion a DB
 * @method getConexion()
 */
class Conexion{
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'prueba_sql';
    }

    public function getConexion(){
        $conexion = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($conexion->connect_errno) {
            return die('Error en la conexión a la base de datos: ' . $conexion->connect_error);
        }

        return $conexion;
    }
}
?>