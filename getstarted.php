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
                    <div class="center"><div class="check"><i class="far fa-check-circle"></i></div></div>
                    <h5>Choisissez votre forfait</h5>
                    <ul>
                        <li><i class="fas fa-check"></i> Sans engagement. Annulable à tout moment.</li>
                        <li><i class="fas fa-check"></i> Tous les programmes One on One pour un abonnement très attractif.</li>
                        <li><i class="fas fa-check"></i> Accès illimité sur tous vos appareils.</li>
                    </ul>
                    <div class="center"><a href="sub.php" class="waves-effect waves-light btn border red darken-4 modal-trigger center">C'est parti ! <i class="fas fa-paper-plane"></i></a></div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php require_once 'component/footer.php'?>
</html>