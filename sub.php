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

<body class="blue_bg">
  <?php require_once 'component/navbar.php'?>
  <div class="forfait">
        <div class="row valign-wrapper">
            <div class="col l4 offset-l4 s12">
                <div class="card-panel">
                    <div class="center"><div class="check"><i class="fas fa-lock"></i></div></div>
                    <h5>Définissez votre mode de paiement</h5>
                    <ul>
                        <li><i class="fas fa-check"></i> Votre abonnement commence immédiatement après la configuration de votre paiement.</li>
                        <li><i class="fas fa-check"></i> <strong>Sans engagement. Abonnement annulable en ligne à tout moment.</strong></li>
                    </ul>
                    <div class="collection">
                      <a href="mastercard.php" class="collection-item black-text">Carte de crédit ou de débit <i class="far fa-credit-card"></i> <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-mastercard"></i> <i class="fas fa-paper-plane right"></i></a>
                      <a href="paypal.php" class="collection-item black-text">Paypal <i class="fab fa-cc-paypal"></i><i class="fas fa-paper-plane right"></i></a>
                      <a href="giftcode.php" class="collection-item black-text">Code cadeau <i class="fas fa-gift"></i><i class="fas fa-paper-plane right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
<?php require_once 'component/footer.php'?>
</html>