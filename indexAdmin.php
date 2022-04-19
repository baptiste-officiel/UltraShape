<?php

session_start();

require_once __DIR__. '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


try{

    $adminController = new \Projet\Controllers\AdminController();

    if (isset($_GET['action'])){

        if($_GET['action'] == 'createAdminPage'){
            $adminController->createAdminPage();
        }

        if($_GET['action'] == 'connexionAdminPage'){
            $adminController->connexionAdmin();
        }

        // création d'un admin 
        if($_GET['action'] == 'createAdmin'){
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $mdp = password_hash($password, PASSWORD_DEFAULT);
            $adminController->createAdmin($firstname, $mdp, $mail);
        }

        if($_GET['action'] == 'connexionAdmin'){
            $mail = htmlspecialchars($_POST['mail']);
            $mdp = $_POST['password'];
            if(!empty($mail) && !empty($mdp)){
                $adminController->connexion($mail, $mdp);
            }else{
                throw new Exception('Renseignez vos identifiants');
            }
        }

        elseif ($_GET['action'] == 'deconnexion'){
            session_destroy();
            header('Location: index.php');
        }

        elseif ($_GET['action'] == 'showMails'){
            $adminController->showMails();
        }

    } else{
        $adminController->connexionAdmin();
    }


} catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}