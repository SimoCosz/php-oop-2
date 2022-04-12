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
// USER

$user1 = new user(
  'Mario',
  'Rossi',
  'mario.rossi@gmail.com',
  'mariorossi',
  'Piazza la Bomba e Scappa',
  '12345678901',
);
$user1->getSconto();
$user1->addCrediCard(123812831283, '10/29', 333);

var_dump($user1);

$ospite1 = new ospite(
  'Giovanni',
  'bianchi',
  'giova.white@gmail.com',
  'Via da Qua',
  '3403948573',
);
// $ospite1->addCrediCard(123456789, '05/23', 123);

var_dump($ospite1);

$carrello1 = new carrello(
  [],
  0,
  0
);
$carrello1->addProdotti($prodotto1);
$carrello1->addProdotti($prodotto2);
$carrello1->addProdotti($prodotto4);
$carrello1->addProdotti($prodotto4);
$carrello1->calcTot();
$carrello1->countTotProdotti();
var_dump($carrello1);