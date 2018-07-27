<?php
$lastname = 'Nemare';
$firstname = 'Jean';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>

    <?php
    if (isset($_GET['firstname']) && isset($_GET['lastname'])) // si on a le nom et le prénom, test les variable lastname et firstname
    {
echo 'Hey ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '!';
} else //manque de paramêtre
{
  echo 'manque de renseignement';
}
     ?>
   </p>
  </body>
</html>
