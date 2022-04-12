<?php

class user{
  public $nome;
  public $cognome;
  public $email;
  private $password;
  public $indirizzo;
  public $telefono;

  function __construct($_nome, $_cognome, $_email, $_password, $_indirizzo, $_telefono){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->password = $_password;
    $this->indirizzo = $_indirizzo;
    $this->telefono = $_telefono;
  }
}