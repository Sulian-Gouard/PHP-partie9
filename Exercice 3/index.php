<?php
setlocale(LC_TIME, 'fr-FR.utf8'); 
$message = strftime('%A %d %B %Y');
$messageDos = date('l d F Y');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 3</title>
</head>

<body>
  <h1>Exercice 3</h1>
  <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.</p>
  <p><?= $message ?></p>
  <p><?= $messageDos ?></p>

</body>

</html>