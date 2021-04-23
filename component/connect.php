<?php require_once "config.php"; 


if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $mail = test_input($_POST["email_connect"]);
    $password = test_input($_POST["password_connect"]);
    $hash_password = md5($password);
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['email'] == $mail)&&
            ($user['password'] == $hash_password)) {
                $_SESSION['user'] = $user;
                header("Location: ../index.php");
        }
        else {
            echo("L'annannas est dans la baignoire.");
            header("Location: ../index.php");

        }
    }
}
?>  