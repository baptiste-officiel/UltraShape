<?php

namespace Projet\Models;

class ContactModel extends Manager{

    public function postMail($lastname, $firstname, $email, $phone, $object, $content){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'INSERT INTO contact (lastname, firstname, email, phone, `object`, `content`) VALUES (?, ?, ?, ?, ?, ?)'
        );
        $req->execute(array($lastname, $firstname, $email, $phone, $object, $content));
        return $req;
    }
}