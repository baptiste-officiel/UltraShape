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

    public function compte($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT firstname, mail FROM administrateurs WHERE id = ?');
        $req->execute(array($id));

        return $req->fetch();
    }


    public function modifPseudo($firstname, $id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE administrateurs SET firstname = :firstname WHERE id = :id');
        $req->execute(array(
            ":firstname" => $firstname,
            ":id" => $id
        ));
    }
}