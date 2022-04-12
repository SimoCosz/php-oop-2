<?php

require_once __DIR__. '/prodotto.php';

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