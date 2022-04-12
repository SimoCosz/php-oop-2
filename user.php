<?php

require_once __DIR__.'/ospite.php';
class user extends ospite{

  private $password;

  function __construct($_nome, $_cognome, $_email, $_password, $_indirizzo, $_telefono, $_numero, $_scadenza, $_cvv){
    parent::__construct($_nome, $_cognome, $_email, $_indirizzo, $_telefono, $_numero, $_scadenza, $_cvv);
    $this->password = $_password;
  }
}