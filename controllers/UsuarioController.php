<?php

// aca mostramos las acciones que puede hacer un controlador
class UsuarioController{

    public function mostrarTodos(){

        require_once 'models/usuarioModels.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once 'views/usuarios/mostrar-todos.php';

    }

    public function crear(){
        require_once 'models/usuarioModels.php';

        $practicanteDeBodega = new Usuario();
        
        $practicanteDeBodega->setId_usuario('null');
        $practicanteDeBodega->setNombre('Juan sebastian');
        $practicanteDeBodega->setApellido('Guerrero');
        $practicanteDeBodega->setCorreo('niok@gmail.com');
        $practicanteDeBodega->setPassword('123456');

        
        $guardar = $practicanteDeBodega->crear();

        require_once 'views/usuarios/crear.php';

        
    }
}