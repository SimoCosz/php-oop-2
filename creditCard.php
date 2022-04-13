<?php

class creditCard{
  private $numero;
  private $scadenza;
  private $cvv;

  function __construct($_numero, $_scadenza, $_cvv){
    if(strlen($_numero) == 16){
      $this->numero = $_numero;
    } else {
      echo 'Numero carta errato';
    }
    
    if(strlen($_cvv) == 3){
      $this->cvv = $_cvv;
    } else {
      echo 'Numero CVV errato';
    }
    $this->scadenza = $_scadenza;
  }

  public function getNumero(){
    return $this->numero;
  }

  public function getScadenza(){
    return $this->scadenza;
  }

  public function getcvv(){
    return $this->cvv;
  }

  public function addDataCard($numero, $scadenza, $cvv){
    $this->scadenza = $scadenza;
    $this->numero = $numero;
    $this->cvv = $cvv;
  }
}