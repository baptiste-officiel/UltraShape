<?php

namespace Projet\Models;

class AdminModel extends Manager{

    public function createAdmin($firstname, $mdp, $mail){
        $bdd = $this->dbConnect();
        $user = $bdd->prepare('INSERT INTO administrateurs(firstname, mail, `password`) VALUE (?, ?, ?)');
        $user->execute(array($firstname, $mdp, $mail));

        return $user;
    }

    public function recupMdp($mail, $mdp){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM administrateurs WHERE mail=?');
        $req->execute(array($mail));

        return $req;
    }
}