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
                $incorrect = 0;
                header("Location: ../PHP/Body/index.php");
        }
        else {
            $incorrect = 1;
            header('Location: ../PHP/Body/index.php?incorrect='.$incorrect);
        }
    }
}
?>  