<?php

require_once __DIR__.'/ospite.php';
class user extends ospite{

  private $password;
  protected $sconto;

  function __construct($_nome, $_cognome, $_email, $_password, $_indirizzo, $_telefono, $_credit_card, $_carrello){
    parent::__construct($_nome, $_cognome, $_email, $_indirizzo, $_telefono, $_credit_card, $_carrello);
    $this->password = $_password;
  }

  public function getSconto(){
    if($this->password){
      $this->sconto = 20;
    } else {
      echo 'Registrati e avrai uno sconto!!!';
    }
  }
}