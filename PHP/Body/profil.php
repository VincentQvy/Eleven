<!DOCTYPE html>
<html lang="fr">
<?php require_once '../Header/Header.php'?>


<body class='blue_bg'>
  <?php require_once '../../component/config.php';
        require_once '../Navbar/navbar.php';
    ?>
  <div class="row white-text">
    <div class="col s10 offset-s1">
    <h3><?php $_SESSION['user'];
       echo $_SESSION["user"]['pseudo'] ?></h3>
      <h1 class="white-text"></h1>
    </div>
  </div>
  <div class="row">
    <div class="col s10 offset-s1">
      <hr>
    </div>
  </div>
  <div class="row white-text">
    <div class="col s10 offset-s1">
    <h3>Compte</h3>
    <a class="btn-flat grey-text mdpforget">Modifier les informations personnelles</a>
    </div>
  </div>
  <div class="row white-text">
    <div class="col s10 offset-s1"><hr></div>
  </div>
  <div class="row white-text">
    <div class="col s10 offset-s1">
    <h3>Abonnement et facturation</h3>
    <a href="getstarted.php" class="btn-flat grey-text mdpforget">Modifier ou annuler l'abonnement</a>
    </div>
  </div>
  <div class="row">
    <div class="col s10 offset-s1">
      <hr>
    </div>
  </div>
  <div class="row white-text">
    <div class="col s10 offset-s1">
    <h3>Paramètres</h3>
    <a class="btn-flat grey-text mdpforget">Modifier les paramètres du profil</a>
    </div>
  </div>
</body>
<?php require_once '../Footer/footer.php'?>

</html>