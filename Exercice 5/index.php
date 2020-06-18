<?php
setlocale(LC_TIME, 'fra_fra'); 

$currentDate =  time();
$pastDate = strtotime('2016-05-16');
$diff = round(($currentDate - $pastDate) / 86400);
$message = 'il y a ' . $diff . ' jours entre les deux dates';

// $todayDate = date_create(date('Y-m-d'));
// $pastDate = date_create('2016-05-16');
// $interval = date_diff($pastDate, $todayDate);
// $message = $interval->format('%R%a days');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 5</title>
</head>

<body>
  <h1>Exercice 5</h1>
  <p>Nombre de jour qui sépare la date du jour avec le 16 mai 2016 : <?= $message ?></p>

</body>

</html>