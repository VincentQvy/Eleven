<nav class='jaune'>
    <div class="nav-wrapper z-depth-1">
      <a href="index.php" class="brand-logo"><img src='images/eleven.png' height="63"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href='index.php' class="waves-effect waves-light btn-flat grey-text">Accueil</a></li>
        <li><a href='suivi.php' class="waves-effect waves-light btn-flat grey-text">Suivis</a></li>
        <li><a class="waves-effect waves-light btn-flat grey-text">Parcourir</a></li>
        <?php if(isset($_SESSION['user'])) {?>
            <li><a href="profil.php" class="waves-effect waves-light btn-flat grey-text">Profil</a></li>
            <li><a href="profil_creator.php" class="waves-effect waves-light btn-flat grey-text">Profil Créateur</a></li>
            <li><a href="component/disconnect.php" class="waves-effect waves-light btn-flat grey-text">Déconnexion</a></li>
        <?php }else{?>
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
                            <img src="images/eleven.png" alt="">
                        </div>
                        <div class='col s6 center black-text'>
                            <form action="component/connect.php" method="post">
                                <div class="row">
                                    <div class="input-field col s12 white border">
                                        <input name="email_connect" type="email" placeholder='email ou pseudo' class="input">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 white border">
                                        <input name="password_connect" type="password" placeholder="password" class="validate">
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" name="formconnexion" value="Connect"/>
                                </div>
                            </form>
                            <div >
                                <a onclick="M.toast({html: 'Cheh'})" class="btn-flat grey-text mdpforget">Mot de passe oublié ?</a>
                            </div>
                            <hr>
                            <div>
                                <a href='inscription.php' class="waves-effect waves-light btn-large black-text blue_light border">Creer un compte</a>
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
  <script>
    $(document).ready(function(){
        $('.modal').modal();
  });
  </script>



