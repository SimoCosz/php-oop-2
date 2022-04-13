<?php

require_once __DIR__. '/creditCard.php';
class ospite{

  public $nome;
  public $cognome;
  public $email;
  public $indirizzo;
  public $telefono;
  protected $credit_card = [];
  public $carrello;

  function __construct($_nome, $_cognome, $_email, $_indirizzo, $_telefono, $_credit_card, $_carrello){
    
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->indirizzo = $_indirizzo;
    $this->telefono = $_telefono;
    $this->credit_card [] = $_credit_card;
    $this->carrello [] = $_carrello;
  }

}