<?php
setlocale(LC_TIME, ['fr.utf8', 'fra', 'fr_FR']);
date_default_timezone_set('Europe/Paris');

// EN PROCEDURAL

$dateAjd = 'Timestamp du jour : ' . time() . ' secondes depuis 1970';
$datePrecise = mktime(15,0,0,8,02,2016);
$month = strftime('%A %d %B %Y', $datePrecise);

// EN OBJET

$dateObj1 = new DateTime();
$dateObj2 = DateTime::createFromFormat('d-m-Y H:i:s', '2-08-2016 15:00:00');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 4</title>
</head>

<body>
  <h1>Exercice 4</h1>

  <!-- // EN PROCEDURAL -->

  <p><?= $dateAjd ?></p>  
  <p>Timestamp du mardi <?= $month ?> à 15h00 : <?= $datePrecise ?> secondes depuis 1970</p>

  <!-- // EN OBJET -->

  <p>Timestamp du jour : <?= $dateObj1->getTimestamp() ?> secondes depuis 1970</p>  
  <p>Timestamp du mardi 2 Août 2016 <?= $dateObj1->getTimestamp() ?>  secondes depuis 1970</p>

</body>

</html>