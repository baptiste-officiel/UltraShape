<?php

session_start();

require_once __DIR__ . 'vendor/autoload.php';

try{
    $controllerFront = new \Projet\Controllers\ControllerFront();

    if (isset($_GET['action'])){
        if($_GET['action'] == 'contact'){
            $controllerFront->contactFront();
        }
        elseif($_GET['action'] == 'reparations'){
            $controllerFront->reparationsFront();
        }
        elseif($_GET['action'] == 'about'){
            $controllerFront->aboutFront();
        }
    } else{
        $controllerFront->home();
    }
} catch(Exception $e){
    require 'app/Views/front/error.php';
}