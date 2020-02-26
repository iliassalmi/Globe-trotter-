<?php

Class Manager{

public function reservation($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=pakpak;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO contact(nom, message, email) VALUES(:nom, :message, :email)');
        $a = $req->execute(array('nom'=>$jul->getNom(),'message'=>$jul->getMessage(),
        'email'=>$jul->getMail()));
        var_dump($a);
    }

}
?>
