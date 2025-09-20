<?php

require_once 'config/database.php';

class Usuario{
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $correo;
    public $password;

    private $db;

    public function __construct()
    {
        $this->db = database::conectar();
    }

    function getId_usuario(){
        return $this->getId_usuario;
    }

     function getNombre(){
        return $this->nombre;
    }

     function getApellido(){
        return $this->apellido;
    }

    function getCorreo(){
        return $this->correo;
    }

    function getPassword(){
        return $this->password;
    }

    function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setCorreo($correo){
        $this->correo = $correo;
    }

    function setPassword($password){
        $this->password = $password;
    }

    public function conseguirTodos(){
        // var_dump($this->db);
        $query = $this->db->query("SELECT * FROM t_usuario");
        return $query;
        echo "IMPRIMIENDO TODOS LOS USUARIOS...";
    }

    public function crear(){
        $sql = "INSERT INTO t_usuario(id_usuario,nombre,apellido,correo,password,id_rol) VALUES ({$this->id_usuario},'{$this->nombre}','{$this->apellido}','{$this->correo}','{$this->password}',1);";
        $guardar = $this->db->query($sql);
        return $guardar;
    }
}