<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Cicli</h1>

  <?php
  echo '<h2>Ciclo for</h2>';
  for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo '<br>';
  }

  echo '<h2> while </h2>';
  $a = 5;

  do {
    $a += 1; // Incrementa prima
    echo $a . '<br>'; // Poi stampa
  } while ($a < 10);


  echo '<h2> ForEach </h2>';

  $nomi = ['Mattia', 'peppe', 'Genny', 9];
  foreach ($nomi as $nome) {
    echo "<p> $nome </p>";
  }

  echo '<h3>Array associativo </h3>';
  $persona = [
    'nome' => 'Mattia',
    'cognome' => 'Esposito'
  ];

  foreach ($persona as $key => $value) {
    echo "<p>$key $value </p>";
  }

  echo '<h3>Array multidimensionale </h3>';
  $persone = [
    [
      'nome' => 'Mattia',
      'cognome' => 'Esposito'
    ],
    [
      'nome' => 'Nicola',
      'cognome' => 'Rossi',
    ],
    [
      'gelato' => 'Algida',
      'colore' => 'Blu'
    ]
  ];

  foreach ($persone as $persona) {
    foreach ($persona as $key => $value) {
      echo "<p> $key: $value</p>";
    }
  }

  ?>



</body>

</html>