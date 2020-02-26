<?php
class inscription{
  private $_nom;
  private $_prenom;
  private $_tel;
  private $_login;
  private $_mdp;

public function __construct($nom,$prenom,$tel,$login,$mdp){
  $this->setNom($nom);
  $this->setPrenom($prenom);
  $this->setTel($tel);
  $this->setLogin($login);
  $this->setMdp($mdp);
}

public function setNom($nom){
  //if(is_string ($nom)){
$this->_nom = $nom ;
  //}
//else {
  //echo"t nul";
//}
}
public function setPrenom($prenom){
//  if(is_string ($prenom)){
$this->_prenom = $prenom ;
//  }
//else {
  //echo"t nul";
}

public function setTel($tel){
//  if(is_int ($tel)){
$this->_tel = $tel;
  //}
////echo"t nul";
//}
}

public function setLogin($login){
  //if(is_string ($nom)){
$this->_login = $login ;
  //}
//else {
  //echo"t nul";
//}
}public function setMdp($mdp){
  //if(is_string ($nom)){
$this->_mdp = $mdp ;
  //}
//else {
  //echo"t nul";
//}
}
public function getNom(){
  return $this->_nom;
}
public function getPrenom(){
  return $this->_prenom;
}
public function getTel(){
  return $this->_tel;
}
public function getLogin(){
  return $this->_login;
}
public function getMdp(){
  return $this->_mdp;
}
}




 ?>
