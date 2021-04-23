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
    <div class="mastercard">
        <div class="row valign-wrapper">
            <div class="col l4 offset-l4 s12">
                <div class="card-panel">
                    <h5>Configurez votre paiement par carte bancaire.</h5> 
                    <div class="row">
                        <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="firstname" class="validate">
                                <label for="firstname">Prénom</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="lastname" class="validate">
                                <label for="lastname">Nom</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="cardnumber" class="validate">
                                <label for="cardnumber">Numéro de carte</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="expirationdate" class="validate">
                                <label for="expirationdate">Date d'expiration (MM/AA)</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="cryptogram" class="validate">
                                <label for="cryptogram">Cryptogramme (CVV)</label>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="row">
                        <p class="conditions">En cliquant sur le bouton Activer mon abonnement payant ci-dessous, vous acceptez nos Conditions d'utilisation, reconnaissez avoir plus de 18 ans et prenez acte de la Déclaration de confidentialité. Vous acceptez que votre abonnement commence immédiatement et renoncez à votre droit de rétractation. One on One renouvelle automatiquement votre abonnement et prélève chaque mois les frais correspondants (actuellement EUR15.99) via le mode de paiement choisi, sauf résiliation de votre part. Vous pouvez annuler votre abonnement à tout moment pour éviter tout prélèvement ultérieur.</p>
                    </div>
                         
                    <div class="right"><a href="index.php" class="waves-effect waves-light btn border red darken-4 modal-trigger center">Activer mon abonnement payant</a></div> 
                    <div class="left"><a href="sub.php" class="waves-effect waves-light btn border red darken-4 modal-trigger center">Retour</a></div> 
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once 'component/footer.php'?>
</html>