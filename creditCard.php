<?php

class creditCard{
  private $numero;
  private $scadenza;
  private $cvv;

  public function getNumero(){
    return $this->numero;
  }

  public function getscadenza(){
    return $this->scadenza;
  }

  public function getcvv(){
    return $this->cvv;
  }

  public function addCrediCard($numero, $scadenza, $cvv){
    $this->numero = $numero;
    $this->scadenza =$scadenza;
    $this->cvv = $cvv;
  }
}