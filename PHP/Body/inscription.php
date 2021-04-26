<html lang="fr" dir="ltr">
<?php require_once '../Header/Header.php'?>

<body class='blue_bg'>
    <?php require '../../config.php';
    require_once '../Navbar/navbar.php' ?>
    <div class="center-align placement_img_inscription">
        <a class="brand-logo "><img src='images/eleven.png' height="150"></a>
    </div>
    <div class='row valign-wrapper'>
        <div class='col s6 offset-s3 center white-text'>
            <form action="component/signup.php" method="post">
                <div class="row">
                <div class ="col s3"></div>
                    <div class="input-field col s4 offset-s1 white border">
                        <input name="pseudo" type="text" placeholder='Pseudo' class="input">
                    </div>
                    <div class ="col s3"></div>
                <div class ="col s3"></div>
                </div>
                <div class="row">
                <div class ="col s3"></div>
                    <div class="input-field col s4 offset-s1 white border">
                        <input name="last_name" type="text" placeholder='Nom' class="input">
                    </div>
                <div class ="col s3"></div>
                </div>
                <div class="row">
                <div class ="col s3"></div>
                    <div class="input-field col s4 offset-s1 white border">
                        <input name="first_name" type="text" placeholder='Prénom' class="input">
                    </div>
                <div class ="col s3"></div>
                </div>
                <div class="row">
                <div class ="col s3"></div>
                    <div class="input-field col s4 offset-s1 white border">
                        <input name="password_sign" type="password" placeholder="Password" class="validate">
                    </div>
                <div class ="col s3"></div>
                </div>
                <div class="row">
                <div class ="col s3"></div>
                    <div class="input-field col s4 offset-s1 white border">
                        <input name="confirm_password" type="password" placeholder="Confirm Password" class="validate">
                    </div>
                <div class ="col s3"></div>
                </div>
                <div class="row">
                <div class ="col s3"></div>
                    <div class="input-field col s4 offset-s1 white border">
                        <input name="email_sign" type="email" placeholder="Email" class="input">
                    </div>
                <div class ="col s3"></div>
                </div>
                <div>
                    <div>
                         <button class="waves-effect waves-light btn-large black-text blue_light border red" type="submit" name="formconnexion">S'inscrire</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<?php require_once '../Footer/footer.php'?>


</html>