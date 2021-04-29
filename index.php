<!-- SNEAK 1 -->
<?php
 $partite =[
    [
      'squadra_in_casa' => 'Cantu',
      'squadra_in_trasferta' => 'Milano',
      'punteggio_casa' => '50',
      'punteggio_trasferta' => '51'
    ],
    [
      'squadra_in_casa' => 'Genova',
      'squadra_in_trasferta' => 'Torino',
      'punteggio_casa' => '60',
      'punteggio_trasferta' => '58'
    ],
    [
      'squadra_in_casa' => 'Caserta',
      'squadra_in_trasferta' => 'Bari',
      'punteggio_casa' => '60',
      'punteggio_trasferta' => '41'
    ]
 ];


 for ($i=0; $i < count($partite); $i++) { ?>
    <div class="partidos">
      <?php echo $partite[$i]['squadra_in_casa'] . ' - ' . $partite[$i]['squadra_in_trasferta'] . ' | ' . $partite[$i]['punteggio_casa'] . ' - ' . $partite[$i]['punteggio_trasferta']
      ?>
    </div>
<?php  }?>

<!-- SNEAK 2 -->
<?php
$name = $_GET['nome'];
$mail = $_GET['email'];
$age = $_GET['eta'];
echo 'nome: ' . $name . '<br>' . 'eta: ' . $age . '<br>' .  'mail: ' . $mail;
?>
<?php if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') !== false &&  strpos($mail, '.') !== false) { ?>
  <p>
    <?php echo 'Accesso riuscito' ?>
  </p>
<?php }
  else {?>
    <p>
      <?php echo 'Accesso negato' ?>
    </p>
<?php  }?>
<!-- SNEAK 3 -->
<?php
$posts= [
    '25/03/1973' => [
        [
            'title' => 'Post 1',
            'author' => 'Gianni',
            'text' => 'Ciao sono Gianni'
        ]
    ],
   '13/07/1970' => [
        [
            'title' => 'Post 2',
            'author' => 'Bash',
            'text' => 'Ciao sono Bash'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Jonny',
            'text' => 'Ciao sono Jonny'
        ],
    ],
   '29/04/2004' => [
        [
            'title' => 'Post 4',
            'author' => 'Marco',
            'text' => 'Ciao sono Marco'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Ludovica',
            'text' => 'Ciao sono Ludovica'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Paul',
            'text' => 'Ciao sono Paul'
        ]
    ],
];
?>
<?php
foreach ($posts as $data => $data) {
  echo $data . '<br>';
  for ($i=0; $i < count($posts[$data]) ; $i++) {
    echo $posts[$data][$i]['title'] . '<br>';
    echo $posts[$data][$i]['author'] . '<br>';
    echo $posts[$data][$i]['text'] . '<br>';
  }
}
?>

<!-- SNEAK 4 -->
<?php
 $classe = [
   'alunno0' => [
     'nombre' => 'Alessandro',
     'surname' => 'Benigni',
     'voto' => [6, 10 ,8]
   ],
     'alunno1' => [
       'nombre' => 'Marco',
       'surname' => 'Benigni',
       'voto' => [7, 6, 5]
     ]
 ]
?>
<?php
  foreach ($classe as $alunno_registro  => $alunno_registro ) {
    $somma = 0;
    $media = 0;
    echo $alunno_registro . '<br>';
    for ($k=0; $k < 1 ; $k++) {
      echo $classe[$alunno_registro]['nombre'] . '<br>';
      echo $classe[$alunno_registro]['surname'] . '<br>';
    }
    for ($jj=0; $jj < count($classe[$alunno_registro]['voto']); $jj++) {
     $somma += $classe[$alunno_registro]['voto'][$jj] . '<br>';
    }
    $media = $somma / $jj;
    echo "la sua media è: " . $media . '<br>';
  }


 ?>
