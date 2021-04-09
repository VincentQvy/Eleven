<nav class='jaune'>
    <div class="nav-wrapper z-depth-1">
      <!-- <a class="brand-logo"><img src='images/eleven.png' height="60"></a> -->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href='index.php' class="waves-effect waves-light btn-flat grey-text">Accueil</a></li>
        <li><a class="waves-effect waves-light btn-flat grey-text">Suivis</a></li>
        <li><a class="waves-effect waves-light btn-flat grey-text">Parcourir</a></li>
        <li><a class="waves-effect waves-light btn-flat grey-text">Rediffusion</a></li>
        <li><a href="profil.php" class="waves-effect waves-light btn-flat grey-text">Profil</a></li>
        <li><a href="#modal1" class="waves-effect waves-light btn border red darken-4 modal-trigger">Connexion</a></li>
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class='row valign-wrapper '>
                    <div class=" input-field white border">
                        <input id="email" type="email" placeholder='email ou pseudo' class="input">
                    </div>
                    <div class="input-field white border">
                        <input id="password" type="password" placeholder="password" class="validate">
                    </div>
                    <div>
                        <a class="waves-effect waves-light btn-large black-text jaune border">Connexion</a>
                    </div>
                    <div>
                    <a href='index.php' class="grey-text blue_bg">Mot de passe oublié ?</a>
                    </div>
                    
                    <div>
                        <a href='inscription.php' class="waves-effect waves-light btn-large black-text blue_light border">Creer un compte</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
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





