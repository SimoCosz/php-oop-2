<?php
require_once __DIR__. '/index.php';
class carrello {
  public $prodotti;
  public $totProdotti;
  public $totEuro;

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