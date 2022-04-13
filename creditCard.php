<?php

class creditCard{
  private $numero;
  private $scadenza;
  private $cvv;

  function __construct($_numero, $_scadenza, $_cvv){
    
    $this->setNumero($_numero);
    
    $this->setCvv($_cvv);

    $this->setScadenza($_scadenza);
    
  }

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($_numero){
    if(strlen($_numero) == 16){
      $this->numero = $_numero;
    } else {
      echo 'Numero carta errato';
    }
  }

  public function getScadenza(){
    return $this->scadenza;
  }

  public function setScadenza($_scadenza){
    $this->scadenza = $_scadenza;
  }

  public function getCvv(){
    return $this->cvv;
  }

  public function setCvv($_cvv){
    if(strlen($_cvv) == 3){
      $this->cvv = $_cvv;
    } else {
      echo 'Numero CVV errato';
    }
  }

  public function addDataCard($numero, $scadenza, $cvv){
    $this->scadenza = $scadenza;
    $this->numero = $numero;
    $this->cvv = $cvv;
  }
}