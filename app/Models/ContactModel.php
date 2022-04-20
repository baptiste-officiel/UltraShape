<?php

namespace Projet\Models;

class ContactModel extends Manager{

    // Envoyer un message via le formulaire de contact 
    public function postMail($lastname, $firstname, $email, $object, $content){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare(
            'INSERT INTO contact (lastname, firstname, `email`, `object`, `content`) VALUES (?, ?, ?, ?, ?)'
        );
        $req->execute(array($lastname, $firstname, $email, $object, $content));
        return $req;
    }

    // Compter les mails 
    public function countMail(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT COUNT(`email`) FROM contact');
        $req->execute(array());
        return $req;
    }

    // Aller chercher tous les mails 
    public function getMails(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM contact');
        $req->execute(array());
        return $req;
    }

    // Supprimer un mail 
    public function deleteMail($id){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('DELETE FROM contact WHERE id = ?');
        $req->execute(array($id));
        return $req;
    }
}