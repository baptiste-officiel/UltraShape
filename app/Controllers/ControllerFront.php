<?php

// Le ControllerFront avec les méthodes à exécuter qui fait le lien entre les Models et les Views 

namespace Projet\Controllers;

class ControllerFront{
    function home(){
        require 'app/Views/front/home.php';
    }

    function contactFront(){
        require 'app/Views/front/contact.php';
    }

    function contactPost($lastname, $firstname, $email, $object, $content){
        $postMail = new \Projet\Models\ContactModel();

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = $postMail->postMail($lastname, $firstname, $email, $object, $content);
            require 'app/Views/front/confirmContact.php';
        } else{
            header('Location: app/Views/front/error.php');
        }
    }

    function aboutFront(){
        require 'app/Views/front/about.php';
    }

    function mentions(){
        require 'app/Views/front/mentionsLegales.php';
    }

    function rgpd(){
        require 'app/Views/front/rgpd.php';
    }
}