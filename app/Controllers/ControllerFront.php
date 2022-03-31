<?php

namespace Projet\Controllers;

class ControllerFront{
    function home(){
        require 'app/Views/front/home.php';
    }

    function contactFront(){
        require 'app/Views/front/contact.php';
    }
}