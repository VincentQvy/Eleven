<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="materialize/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>One on One</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script type="text/javascript" src="materialize/js/jquery.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</head>

<body class='blue_bg '>
    <?php require_once 'component/navbar.php' ?>
    <div class="place_stream">
        <?php $video = CommandSQL($pdo, "SELECT * FROM videos where id = " . $_GET['id']);
        $channel = CommandSQL($pdo, "SELECT * FROM channels where id = " . $video[0]['channel_id']);
        ?>
        <h1 class="white-text"><?php echo $channel[0]['name'] ?></h1><i class=""></i>
        <a onclick="M.toast({html: 'Abonné'})"  href="#!"><i class="far fa-heart  like_button" ></i></a>
        <div class='row'>
            <div class="col l6 s12">
            <iframe class='mobile_stream' src="<?php echo $video[0]['url'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col l6 s12 ">
                <img class="place_chat" src="images/chat.png" alt="">
            </div>
        </div>
    </div>
</body>
<?php require_once 'component/footer.php' ?>


</html>