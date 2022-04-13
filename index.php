<?php

require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/user.php';
require_once __DIR__. '/ospite.php';
require_once __DIR__. '/carrello.php';

$prodotto1 = new prodotto(
  'Medicinale',
  'Collare antiparassitario',
  'Antiparassitario',
  'Seresto',
  49.70
);
$prodotto2 = new prodotto(
  'Cibo',
  'Dog Pacifica',
  'Crocchette',
  'Acana',
  27.50
);
$prodotto3 = new prodotto(
  'Cuccia',
  'Cuccia Tartan',
  'Cuccia ovale morbida',
  'LoveDi',
  31.50
);
$prodotto4 = new prodotto(
  'Cuccia',
  'Cuccia Buffa',
  'Cuccia esagonale morbidissima',
  'DormiQui',
  59.99
);
var_dump($prodotto1, $prodotto2, $prodotto3, $prodotto4);

// CARRELLO

$carrello1 = new carrello(
  [],
  '',
  ''
);
$carrello1->addProdotti($prodotto1);
$carrello1->addProdotti($prodotto2);
$carrello1->addProdotti($prodotto4);
$carrello1->addProdotti($prodotto4);
$carrello1->calcTot();
$carrello1->countTotProdotti();

$carrello2 = new carrello(
  [],
  '',
  ''
);
$carrello2->addProdotti($prodotto3);
$carrello2->addProdotti($prodotto2);
$carrello2->addProdotti($prodotto4);
$carrello2->calcTot();
$carrello2->countTotProdotti();

// CREDITCARD

$card1 = new creditCard(
  1234567890123456,
  '12-22',
  333
);
$card2 = new creditCard(
  9871231317653421,
  '05-25',
  123,
);

// USER
$user1 = new user(
  'Mario',
  'Rossi',
  'mario.rossi@gmail.com',
  'mariorossi',
  'Piazza la Bomba e Scappa',
  '12345678901',
  $card1,
  $carrello1,
);
$user1->getSconto();
var_dump($user1);

// OSPITE

$ospite1 = new ospite(
  'Giovanni',
  'bianchi',
  'giova.white@gmail.com',
  'Via da Qua',
  '3403948573',
  $card2,
  $carrello2,
);
// $ospite1->addCreditCard(123456789, date('m-y'), 123);

var_dump($ospite1);

