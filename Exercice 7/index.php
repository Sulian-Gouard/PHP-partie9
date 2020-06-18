<?php
setlocale(LC_TIME, 'fra.utf8'); 
$addDays = date('d/m/Y', strtotime('+20 days'));
$message = 'Dans 20 jours nous serons le : ' . $addDays;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 7</title>
</head>

<body>
  <h1>Exercice 7</h1>
  <p>Afficher la date du jour + 20 jours.</p>
  <p><?= $message ?></p>

</body>

</html>