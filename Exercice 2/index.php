<?php

$message = 'En procédural : ' . date('d-m-y');

$testObjet = new DateTime();
$messageDeux = ', en test objet : ' . $testObjet->format('d-m-Y');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 2</title>
</head>

<body>
  <h1>Exercice 2</h1>
  <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).</p>
  <p><?= $message . ' ' . $messageDeux?></p>

</body>

</html>