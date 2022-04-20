<?php

session_start();

require_once __DIR__. '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


try{

    $adminController = new \Projet\Controllers\AdminController();

    if (isset($_GET['action'])){

        // Page de création d'un admin 
        if($_GET['action'] == 'createAdminPage'){
            $adminController->createAdminPage();
        }

        // Page de connexion d'un admin 
        if($_GET['action'] == 'connexionAdminPage'){
            $adminController->connexionAdmin();
        }

        // Affichage du dashboard 
        if($_GET['action'] == 'dashboard'){
            $adminController->dashboard();
        }

        // création d'un admin 
        if($_GET['action'] == 'createAdmin'){
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $mdp = password_hash($password, PASSWORD_DEFAULT);
            $adminController->createAdmin($firstname, $mdp, $mail);
        }

        // connexion de l'admin 
        if($_GET['action'] == 'connexionAdmin'){
            $mail = htmlspecialchars($_POST['mail']);
            $mdp = $_POST['password'];
            if(!empty($mail) && !empty($mdp)){
                $adminController->connexion($mail, $mdp);
            }else{
                throw new Exception('Renseignez vos identifiants');
            }
        }

        // Accès au compte 
        if ($_GET['action'] == 'compte'){
            $id = $_GET['id'];
            $adminController->compte($id);
        }

        // Affichage des mails 
        if ($_GET['action'] == 'showMails'){
            $adminController->showMails();
        }

        // Suppression d'un mail 
        if ($_GET['action'] == 'deleteMail'){
            $id = $_GET['id'];
            $adminController->deleteMail($id);
        }

        // Déconnexion admin 
        elseif ($_GET['action'] == 'deconnexion'){
            session_destroy();
            header('Location: indexAdmin.php');
        }


    } else{
        $adminController->connexionAdmin();
    }


} catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}