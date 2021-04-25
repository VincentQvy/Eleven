<?php require_once "config.php"; 


$pseudo = test_input($_POST["pseudo"]);
$last_name = test_input($_POST["last_name"]);
$first_name = test_input($_POST["first_name"]);
$mail = test_input($_POST["email_sign"]);
$password = test_input($_POST["password_sign"]);
$hash_password = md5($password);
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll();

foreach($users as $user) {

    if(($user['email'] == $mail)||($user['pseudo'] == $pseudo)) {
        echo "L'email ou le pseudo est déjè utilisé";
    }
}
$new_user = CommandSQL($pdo,"INSERT INTO users (pseudo,firstname,lastname,email,password,profil_pic,is_creator) VALUES ('$pseudo','$first_name','$last_name','$mail','$hash_password','0','0' )");
header("Location: ../inscription_finalize.php");