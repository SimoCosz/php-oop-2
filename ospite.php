<?php

require_once __DIR__. '/creditCard.php';
class ospite extends creditCard{

  public $nome;
  public $cognome;
  public $email;
  public $indirizzo;
  public $telefono;

  function __construct($_nome, $_cognome, $_email, $_indirizzo, $_telefono, $_numero, $_scadenza, $_cvv){
    parent::__construct($_numero, $_scadenza, $_cvv);
    
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->indirizzo = $_indirizzo;
    $this->telefono = $_telefono;
    $this->numero = $_numero;
    $this->scadenza = $_scadenza;
    $this->cvv = $_cvv;
  }

  public function getFullName(){
    "{$this->nome} {$this->cognome}";
  }
}