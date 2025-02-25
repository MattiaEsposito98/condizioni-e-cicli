<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Condizioni e cicli</h1>
  <?php

  $const = 4;
  $numero = 5;

  // if ($numero < 4) {
  //   echo "Il numero $numero è piu piccolo di $const";
  // } elseif ($const == $numero) {
  //   echo "i due numeri sono uguali";
  // } else {
  //   echo "Il numero $numero è piu grande di $const";
  // }

  echo $numero > 5 ? "$numero è più grande di $const" : "$numero è più piccolo di $const";
  echo '<br>';
  echo $prova ?? "non esiste";

  $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  // var_dump($numeri);

  $persona = [
    'nome' => 'Mattia',
    'cognome' => 'Esposito'
  ];


  echo $persona['cognome'];
  $persona['eta'] = 27; //Aggiunge una chiave e valore
  // print_r($persona);
  var_dump($persona);


  $giochi = [
    [
      'nome' => 'league og legends',
      'tipo' => 'moba'
    ],
    [
      'nome' => 'god of war',
      'tipo' => 'avventura'
    ],
    [
      'nome' => 'fifa',
      'tipo' => 'sport'
    ]
  ];

  // var_dump($giochi)

  echo $giochi[2]['nome'];
  echo $giochi[1]['nome'];

  ?>
  <h3>link per cicli</h3>
  <a href="./cicli.php"> clicca</a>
</body>

</html>