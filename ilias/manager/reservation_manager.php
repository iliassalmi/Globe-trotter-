<?php

Class Manager{

public function reservation($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=pakpak;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO reservation(nom,date, message, email, heure, phone, nb_personne) VALUES(:nom, :date, :message, :email, :heure, :phone, :nb_personne)');
        $a = $req->execute(array('nom'=>$jul->getNom(), 'date'=>$jul->getDate(), 'message'=>$jul->getMessage(),
        'email'=>$jul->getMail(),  'heure'=>$jul->getHeure(),  'phone'=>$jul->getTel(),
        'nb_personne'=>$jul->getNb_personne()));
        var_dump($a);



      header('Location: ../index.php');


}
}

?>
