<?php

class creditCard{
  private $numero;
  private $scadenza;
  private $cvv;

  function __construct($_numero, $_scadenza, $_cvv){
    $this->numero = $_numero;
    $this->scadenza = $_scadenza;
    $this->cvv = $_cvv;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function getscadenza(){
    return $this->scadenza;
  }

  public function getcvv(){
    return $this->cvv;
  }
}