<?php

require_once 'models/User.php';

class UserController{
    public function index(){
        echo "Controlador de Usuario";
    }

    // Consulta la base de datos para el login
    public function login(){
        $user = new User();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        
        $identity = $user->login();

        if($identity && is_object($identity)){
            $_SESSION['identity'] = $identity;

            if($identity->rol == 'admin'){
                $_SESSION['admin'] = true;
            }
        } else{
            $_SESSION['error_login'] = 'Identificación fallida';
        }
    }
}