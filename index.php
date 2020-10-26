<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';

if(isset($_SESSION['identity'])){

    function show_error(){
        $error = new ErrorController();
        $error->index();
    }
    
    // Revisa lo que llega por GET
    if(isset($_GET['controller'])){
        $controller_name = $_GET['controller'].'Controller';
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $controller_name = controller_default;
    }else{
        show_error();
        exit();
    }
    
    // Verifica si exite la clase que llega por get
    if(class_exists($controller_name)){
        $controller = new $controller_name;
        if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
            $action = $_GET['action'];
            $controller->$action();
        } elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
            $default = action_default;
        } else{
            show_error();
        }
    
    } else{
        show_error();
    }
    
}
require_once 'views/layout/footer.php';
