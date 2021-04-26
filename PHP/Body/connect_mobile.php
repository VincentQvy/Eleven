<html lang="fr" dir="ltr">
<?php require_once '../Header/Header.php'?>


<body class='blue_bg'>
    <?php require '../../config.php';
    require_once '../Navbar/navbar.php' ?>
    <div class='row valign-wrapper'>
        <div class='col s6 offset-s3 center white-text'>
            <form action="component/connect.php" method="post">
                <div class="row">
                    <div class="input-field col s12 white-text border">
                    <h1>Connexion</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 white border">
                        <input name="email_connect" type="email" placeholder='email' class="input">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12  white border">
                        <input name="password_connect" type="password" placeholder="password" class="validate">
                    </div>
                </div>
                <div>
                    <div>
                         <button class="waves-effect waves-light btn-large black-text blue_light border red" type="submit" name="formconnexion">Se connecter</button>
                    </div>
                </div>
            </form>
            <div >
                <a class="btn-flat grey-text mdpforget">Mot de passe oublié ?</a>
            </div>
            <hr>
            <div>
                <a href='inscription.php' class="waves-effect waves-light btn-large black-text blue_light border">Creer un compte</a>
            </div>
        </div>
    </div>
</body>

</html>
