<?php

namespace Projet\Controllers;

class AdminController{

    // page inscription administrateur 
    public function createAdminPage(){
        require 'app/Views/admin/createAdmin.php';
    }


    // création de l'administrateur 
    public function createAdmin($firstname, $mail, $mdp){
        $userManager = new \Projet\Models\AdminModel();
        $user = $userManager->createAdmin($firstname, $mdp, $mail);
    }

    // page de connexion administrateur 
    public function connexionAdmin(){
        require 'app/Views/admin/connexion.php';
    }

    // vérification des coordonnées admin puis affichage dashboard 
    public function connexion($mail, $mdp){
        $userManager = new \Projet\Models\AdminModel();
        $connectAdm = $userManager->recupMdp($mail, $mdp);

        $resultat = $connectAdm->fetch();

        $isPasswordCorrect = password_verify($mdp, $resultat['password']); 
        // ca sera surement 'password'

        $_SESSION['mail'] = $resultat['mail'];
        $_SESSION['password'] = $resultat['password'];
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['firstname'] = $resultat['firstname'];

        $countMail = new \Projet\Models\ContactModel();
        $nbMail = $countMail->countMail();

        if ($isPasswordCorrect){
            require 'app/Views/admin/dashboard.php';
        }

        else{
            echo 'Vos identifiants sont incorrects';
        }
    }

    public function showMails(){
        $mails = new \Projet\Models\ContactModel();
        $allMails = $mails->getMails();

        require 'app/Views/admin/mails.php';
    }
}