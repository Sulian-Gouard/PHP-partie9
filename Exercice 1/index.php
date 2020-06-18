<?php

$message = 'En procédural : ' . date('d/m/Y');

$testObjet = new DateTime();
$messageDeux = ', en test objet : ' . $testObjet->format('d/m/Y');

var_dump($testObjet);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 1</title>
</head>

<body>
  <h1>Exercice 1</h1>
  <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).</p>
  <p><?= $message . ' ' . $messageDeux?></p>

</body>

</html>