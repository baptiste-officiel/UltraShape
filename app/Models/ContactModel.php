<?php

namespace Projet\Models;

class ContactModel extends Manager{

    public function postMail($lastname, $firstname, $email, $object, $content){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'INSERT INTO contact (lastname, firstname, `email`, `object`, `content`) VALUES (?, ?, ?, ?, ?)'
        );
        $req->execute(array($lastname, $firstname, $email, $object, $content));
        return $req;
    }

    public function countMail(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT COUNT(`email`) FROM contact WHERE id');
        $req->execute(array());
        return $req;
    }

    public function getMails(){
        $bdd = $this->dbConnect();
        $req = $bdd->query('SELECT * FROM contact WHERE id');
        return $req;
    }
}