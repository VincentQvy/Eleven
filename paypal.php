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
    <?php require_once 'component/navbar.php'?>
    <div class="forfait">
        <div class="row valign-wrapper">
            <div class="col l4 offset-l4 s12">
                <div class="card-panel">
                    <h5>Configurez votre paiement via Paypal.</h5>
                    <p>Pour terminer l'inscription, cliquez sur le bouton <strong>Continuer vers PayPal</strong> et identifiez-vous sur PayPal avec votre adresse e-mail et votre mot de passe.</p>
                    <div class="right"><a href="https://www.paypal.com/fr/webapps/mpp/home" target="blank" class="waves-effect waves-light btn border red darken-4 modal-trigger center">Continuer vers PayPal</a></div> 
                    <div class="left"><a href="sub.php" class="waves-effect waves-light btn border red darken-4 modal-trigger center">Retour</a></div> 
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once 'component/footer.php'?>
</html>