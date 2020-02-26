<?php
class connexion{
  private $_login;
  private $_mdp;

public function __construct($login,$mdp){
  $this->setLogin($login);
  $this->setMdp($mdp);
}

public function setLogin($login){
  //if(is_string ($nom)){
$this->_login = $login ;
  //}
//else {
  //echo"t nul";
//}
}


public function setMdp($mdp){
//  if(is_int ($tel)){
$this->_mdp = $mdp;
  //}
////echo"t nul";
//}
}

public function getLogin(){
  return $this->_login;
}


public function getMdp(){
  return $this->_mdp;
}
}




 ?>
