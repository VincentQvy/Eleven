<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="materialize/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>One on One</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <script type="text/javascript" src="materialize/js/jquery.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</head>

<body class='blue_bg'>
    <?php require 'component/config.php';
    require_once 'component/navbar.php' ?>
    <div class='row valign-wrapper'>
        <div class='col s2'>
        </div>
        <div class='col s4 center white-text'>
            <h3>One on One</h3>
            <p>Avec One on One, profitez de l'ensemble des compétitions d'esport du monde entier !</p>
        </div>
        <div class='col s4 center white-text logo_place'>
            <img src='images/esport_victory.jpg'>
        </div>
        <div class='col s2'>
        </div>
    </div>
    <div class="row valign-wrapper">
        <div class="col s3">
        </div>
        <div class="col s6 center">
            <hr>
            <p class="white-text">Accédez à tous les services que propose Eleven pour 7.99€/ mois.</p>
            <p class="white-text">Annulez votre abonnement à tout moment, c'est sans engagement.</p>
            <a href="index.php" class="waves-effect waves-light btn-large black-text jaune border">Finaliser inscription</a>
        </div>
        <div class="col s3">
        </div>
    </div>

</body>
<?php require_once 'component/footer.php'?>

</html>