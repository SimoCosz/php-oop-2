<?php

require_once __DIR__. '/creditCard.php';
class ospite extends creditCard{

  public $nome;
  public $cognome;
  public $email;
  public $indirizzo;
  public $telefono;

  function __construct($_nome, $_cognome, $_email, $_indirizzo, $_telefono){
    
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->indirizzo = $_indirizzo;
    $this->telefono = $_telefono;
  }
}