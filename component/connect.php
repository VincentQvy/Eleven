<?php require_once "config.php"; 


if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $admin_last_name = test_input($_POST["last_name"]);
    $admin_first_name = test_input($_POST["first_name"]);
    $admin_mail = test_input($_POST["email"]);
    $admin_password = test_input($_POST["password"]);
    $stmt = $pdo->prepare("SELECT * FROM admins");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['last_name'] == $admin_last_name) &&
            ($user['first_name'] == $admin_first_name) &&
            ($user['email'] == $admin_mail)&&
            ($user['password'] == $admin_password)) {
                header("Location: ../index.php");
                $_SESSION['user'] = $user;
        }
        else {
            echo("L'annannas est dans la baignoire.");
            header("Location: ../index.php");

        }
    }
}
?>  