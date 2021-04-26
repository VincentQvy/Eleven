<html lang="fr" dir="ltr">

<?php require_once '../Header/Header.php'?>


<body class="blue_bg">
    <?php require_once '../Navbar/navbar.php'?>
    <div class="forfait">
        <div class="row valign-wrapper">
            <div class="col l4 offset-l4 s12">
                <div class="card-panel">
                    <h5>Saisissez votre code cadeau.</h5>                
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cardnumber" class="validate">
                            <label for="cardnumber">Code ou PIN de la carte cadeau</label>
                        </div>
                    </div>                    
                    <div class="row">
                        <p class="conditions">En cliquant sur le bouton Utiliser le code cadeau ci-dessous, vous acceptez nos Conditions d'utilisation, reconnaissez avoir plus de 18 ans et prenez acte de la Déclaration de confidentialité. Vous acceptez que votre abonnement commence immédiatement et renoncez à votre droit de rétractation. Chaque code cadeau étant à usage unique, vous ne pourrez plus l'utiliser ultérieurement.</p>
                    </div>
                    <div class="row">
                        <div class="right"><a href="index.php" class="waves-effect waves-light btn border red darken-4 modal-trigger center">Utiliser le code cadeau</a></div> 
                        <div class="left"><a href="sub.php" class="waves-effect waves-light btn border red darken-4 modal-trigger center">Retour</a></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once '../Footer/footer.php'?>
</html>