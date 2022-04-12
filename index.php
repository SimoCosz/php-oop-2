<?php

require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/user.php';
require_once __DIR__. '/ospite.php';

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

var_dump($prodotto1, $prodotto2, $prodotto3);

$user1 = new user(
  'Mario',
  'Rossi',
  'mario.rossi@gmail.com',
  'mariorossi',
  'Piazza la Bomba e Scappa',
  '12345678901'
);

var_dump($user1);

$ospite1 = new ospite(
  'Giovanni',
  'bianchi',
  'giova.white@gmail.com',
  'Via da Qua',
  '3403948573'
);

var_dump($ospite1);