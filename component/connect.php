<?php require_once "config.php"; 


if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $mail = test_input($_POST["email_connect"]);
    $password = test_input($_POST["password_connect"]);
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['email'] == $mail)&&
            ($user['password'] == $password)) {
                $_SESSION['user'] = $user;
                header("Location: ../index.php");
        }
        else {
            echo("Mot de passe ou utilisateur incorrect");

        }
    }
}
?>  