<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="materialize/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>One on One</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body class='blue_bg'>
    <?php require_once 'component/navbar.php'?>
    <div class='row valign-wrapper'>
        <div class='col s3'>
        </div>
        <div class='col s6 center white-text'>
            <div class="row">
                <div class="input-field col s12 white border">
                    <input id="pseudo" type="text" placeholder='Pseudo' class="input">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 white border">
                    <input id="password" type="password" placeholder="Password" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 white border">
                    <input id="confirm_password" type="password" placeholder="Confirm Password" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 white border">
                    <input id="email" type="email" placeholder="Email" class="input">
                </div>
            </div>
            <div>
                <a href="inscription_finalize.php" class="waves-effect waves-light btn-large black-text jaune border">Connexion</a>
            </div>
        </div>
        <div class='col s3'>
        </div>
    </div>

</body>

</html>