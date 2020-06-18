<?php
setlocale(LC_TIME, ['fr.utf8', 'fra', 'fr_FR']);
date_default_timezone_set('Europe/Paris');

$monthsArray = [
  1 => 'Janvier',
  2 => 'Février',
  3 => 'Mars',
  4 => 'Avril',
  5 => 'Mai',
  6 => 'Juin',
  7 => 'Juillet',
  8 => 'Août',
  9 => 'Septembre',
  10 => 'Octobre',
  11 => 'Novembre',
  12 => 'Décembre'
];

$daysArray = [
  1 => 'Lundi',
  2 => 'Mardi',
  3 => 'Mercredi',
  4 => 'Jeudi',
  5 => 'Vendredi',
  6 => 'Samedi',
  7 => 'Dimanche',
];



if ($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($_POST))) {
  $nbDays = cal_days_in_month(CAL_GREGORIAN, $_POST['chosenMonth'], $_POST['chosenYear']);
  $firstDayMonth = date('N', mktime(0, 0, 0, $_POST['chosenMonth'], 1, $_POST['chosenYear']));
  $chosenMonth = $_POST['chosenMonth'];
  $chosenYear = $_POST['chosenYear'];
} else {

  $monthNow = strftime('%m');
  $yearNow = strftime('%Y');
  $nbDays = cal_days_in_month(CAL_GREGORIAN, $monthNow, $yearNow);
  $firstDayMonth = date('N', mktime(0, 0, 0, $monthNow, 1, $yearNow));
  $chosenMonth = intval($monthNow);
  $chosenYear = $yearNow;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>TP Calendrier</title>
</head>

<body>
  <div class="container">
    <div class="text-sm-left ml-5">
      <h1>TP Calendrier</h1>
      <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.</p>
    </div>

    <div class="myForm">
      <form method="post" enctype="multipart/form-data" class="container col-sm-8 row m-3">
        <div class="form col-sm-6">
          <label for="months">Mois</label>
          <select class="form-control" id="chosenMonth" name="chosenMonth">
            <option value="" disabled selected>--- sélectionnez ---</option>
            <?php
            foreach ($monthsArray as $key => $month) { ?>
              <option value=<?= $key ?>><?= $month  ?></option>
            <?php }
            ?>
          </select>
        </div>
        <div class="form col-sm-6">
          <label for="year">Année</label>
          <select class="form-control" name="chosenYear" id="chosenYear">
            <option value="" disabled selected>--- sélectionnez ---</option>
            <?php
            for ($dateYear = 2015; $dateYear <= 2025; $dateYear++) {
            ?>
              <option value="<?= $dateYear ?>"><?= $dateYear ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <button class="btn btn-primary m-3" type="submit">Afficher</button>
      </form>
    </div>

    <div class="monthAndYearTitle text-left ml-5 h2 ">
      <div class="myTab">
        <?= $monthsArray[$chosenMonth] . ' ' . $chosenYear ?>
      </div>
    </div>
    <table class="table table-bordered col-sm-8 ml-5">
      <thead style="background-color:lightgrey">
        <tr>
          <?php
          foreach ($daysArray as $key => $days) { ?>
            <th><?= $days ?></th>
          <?php }
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          if ($nbDays) {
            $day = 0;
            $casesTotales = $nbDays + $firstDayMonth - 1;
            for ($caseNb = 1; $caseNb <= $casesTotales + (7 - ($casesTotales % 7)); $caseNb++) {
              if ($caseNb >= $firstDayMonth) {
                $day++
          ?>
                <td class='<?= $day <= $nbDays ? 'bg-danger' : 'backGroundCases'?>'><?= $day <= $nbDays ? $day : '' ?></td>
              <?php } else { ?>
                <td class="backGroundCases"></td>
              <?php }
              if (($caseNb % 7) == 0) { ?>
        </tr>
        <tr>
    <?php }
            }
          }
    ?>
        </tr>
      </tbody>
    </table>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>