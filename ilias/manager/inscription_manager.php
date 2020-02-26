<?php

Class Manager{

public function inscription($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=pakpak;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, tel, Login, mdp) VALUES(:nom, :prenom, :tel, :Login, :mdp)');
        $a = $req->execute(array('nom'=>$jul->getNom(), 'prenom'=>$jul->getPrenom(), 'tel'=>$jul->getTel(), 'Login'=>$jul->getLogin(), 'mdp'=>md5($jul->getMdp())));
  var_dump($a);
  header('Location: ../index.php');
  }

}
?>
