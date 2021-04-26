<html lang="fr" dir="ltr">
<?php require_once '../Header/Header.php'?>

<body class="blue_bg">
  <?php require_once '../Navbar/navbar.php'?>
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
<?php require_once '../Footer/footer.php'?>
</html>