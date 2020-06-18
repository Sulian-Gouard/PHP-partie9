<?php
setlocale(LC_TIME, 'fr_fR'); 
$dayInMonth = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
$message = 'Le mois de février 2016 comptait : ' . $dayInMonth . ' jours.'
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 6</title>
</head>

<body>
  <h1>Exercice 6</h1>
  <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
  <p><?= $message ?></p>

</body>

</html>