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
        <div class='col s6 offset-s3 center white-text'>
            <form action="component/signup.php" method="post">
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
        </div>
    </div>
</body>

</html>