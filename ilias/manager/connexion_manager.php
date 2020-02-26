<?php
//session_start();

Class Manager{

public function connexion($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=pakpak;charset=utf8','root','');


  $red = $bdd->prepare('SELECT * FROM utilisateurs WHERE login=:login AND mdp=:mdp ');
  $red->execute(array('login'=> $jul->getLogin(), 'mdp'=>md5($jul->getMdp())));
  $c = $red->fetch();

  if ($c == true) {

    $_SESSION['id'] = $c['id'];
    $_SESSION['nom'] = $c['nom'];
    $_SESSION['login'] = $c['login'];

    header('Location: ../index.php');


  }
  else {
    echo "Mauvais login veuillez réessayer !";
    header('Location:../connexion.php');
  }


  }

  public function afficheUser($id){
  $bdd = new PDO('mysql:host=localhost;dbname=pakpak;charset=utf8','root','');


$red = $bdd->prepare('SELECT * FROM utilisateurs WHERE id=:id');
$red->execute(array('id'=>$_SESSION['id']));
$c = $red->fetch();
    return $c;

  }

}

?>
