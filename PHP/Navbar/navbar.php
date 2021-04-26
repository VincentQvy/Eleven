<?php require_once '../../component/config.php' ?>
<div class="navbar-fixed">
    <nav class='jaune navbar'>
        <div class="nav-wrapper z-depth-1">
            <a href="index.php" class="brand-logo"><img src='../../images/eleven.png' height="63"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php
                if (isset($_GET['incorrect'])) {
                    if ($_GET['incorrect'] == 1) {
                        $incorrect = 1;
                    } else {
                        $incorrect = 0;
                    }
                }

                if (isset($_SESSION['user'])) { ?>
                    <li><a href="../Body/parcourir.php" class="waves-effect waves-light btn-flat grey-text">Parcourir</a></li>
                    <li><a href='../Body/redif.php' class="waves-effect waves-light btn-flat grey-text">Rediffusion</a></li>
                    <li><a href='../Body/suivi.php' class="waves-effect waves-light btn-flat grey-text">Suivis</a></li>
                    <li><a href="../Body/profil.php" class="waves-effect waves-light btn-flat grey-text">Profil</a></li>
                    <li><a href="../../component/disconnect.php" class="waves-effect waves-light btn-flat grey-text">Déconnexion</a></li>
                <?php } else { ?>
                    <li><a href="#modal1" class="waves-effect waves-light btn border red darken-4 modal-trigger">Connexion</a></li>
                <?php } ?>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="center black-text">
                            <h1>Connexion</h1>
                            <div class='row valign-wrapper'>
                                <div class='col s6 center black-text'>
                                    <h3>One on One</h3>
                                    <p class="line8">Avec One on One, profitez de l'ensemble des compétitions d'esport du monde entier!</p>
                                    <img src="../../images/eleven.png" alt="">
                                </div>
                                <div class='col s6 center black-text'>
                                    <form action="../../component/connect.php" method="post">
                                        <div class="row">
                                            <div class="input-field col s12 white border">
                                                <input name="email_connect" type="email" placeholder='email' class="input">
                                                <?php
                                                if (isset($_GET['incorrect'])) {
                                                    if ($incorrect == 1) { ?>
                                                        <p>Email ou mot de passe incorrect</p>
                                                    <?php }
                                                    ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 white border">
                                                <input name="password_connect" type="password" placeholder="password" class="validate">
                                            </div>
                                        </div>
                                        <div>
                                            <button class="waves-effect waves-light btn-large black-text blue_light border red" type="submit" name="formconnexion">Se connecter</button>
                                        </div>
                                    </form>
                                    <div>
                                        <a class="btn-flat grey-text mdpforget">Mot de passe oublié ?</a>
                                    </div>
                                    <hr>
                                    <div>
                                        <a href='../Body/inscription.php' class="waves-effect waves-light btn-large black-text blue_light border">Creer un compte</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <?php if (isset($_SESSION['user'])) { ?>
        <li><a href="../Body/parcourir.php" class="waves-effect waves-light btn-flat grey-text">Parcourir</a></li>
        <li><a href='../Body/redif.php' class="waves-effect waves-light btn-flat grey-text">Rediffusion</a></li>
        <li><a href='../Body/suivi.php' class="waves-effect waves-light btn-flat grey-text">Suivis</a></li>
        <li><a href="../Body/profil.php" class="waves-effect waves-light btn-flat grey-text">Profil</a></li>
        <li><a href="../../component/disconnect.php" class="waves-effect waves-light btn-flat grey-text">Déconnexion</a></li>
    <?php } else { ?>
        <li><a href="connect_mobile.php" class="waves-effect waves-light btn border red darken-4 modal-trigger">Connexion</a></li>
    <?php } ?>
</ul>
<script type="application/javascript">
    $(document).ready(function() {
        $('.modal').modal();
        $('.sidenav').sidenav();
    });
</script>