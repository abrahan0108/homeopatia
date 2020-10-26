<?php

    function controllers_autoload($className){
        $path = 'controllers/'.str_replace('\\','/',$className).'.php';    
        require_once $path;
    }

    spl_autoload_register('controllers_autoload');
?>