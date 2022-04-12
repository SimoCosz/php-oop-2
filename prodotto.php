<?php

class prodotto {
  public $categoria;
  public $nome;
  public $descrizione;
  public $marca;
  public $prezzo;

  function __construct($_categoria, $_nome, $_descrizione, $_marca, $_prezzo){
    $this->categoria = $_categoria;
    $this->nome = $_nome;
    $this->descrizione = $_descrizione;
    $this->marca = $_marca;
    $this->prezzo = $_prezzo;
  }
};