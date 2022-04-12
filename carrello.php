<?php
require_once __DIR__. '/index.php';
class carrello {
  public $prodotti;
  public $totProdotti;
  public $totEuro;

  function __construct(array $_prodotti, $_totProdotti, $_totEuro){
    $this->prodotti = $_prodotti;
    $this->totProdotti = $_totProdotti;
    $this->totEuro = $_totEuro;
  }

  public function addProdotti($prodotto){
    $this->prodotti[] = $prodotto;
  }

  public function calcTot(){
    foreach($this->prodotti as $value){
      $this->totEuro += $value->prezzo;
    }
  }

  public function countTotProdotti(){
    return $this->totProdotti =  count($this->prodotti);
  }
}