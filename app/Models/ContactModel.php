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
}