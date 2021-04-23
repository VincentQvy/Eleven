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

<body class='blue_bg'>
    <?php require_once 'component/navbar.php';
    $jeux = CommandSQL($pdo, "SELECT * FROM games");
    foreach ($jeux as $jeu) {
    ?>
        <?php $videos = CommandSQL($pdo, "SELECT * FROM videos where game_id = " . $jeu['id']);
        if ($videos != null) { ?>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s3 m6 white-text police_title">
                    <p><?php echo $jeu['name'] ?></p>
                </div>
                <div class="col s8"></div>
            </div>
            <div id="liveCompetition" class="carousel ">
                <?php foreach ($videos as $video) { ?>
                    <div class="carousel-item day_competition">
                        <iframe src="<?php echo $video['url'] ?>" width="390" height="200" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
            <?php }
            }  ?>
            </div>
        <?php
    } ?>

        <script>
            $(document).ready(function() {
                $('.carousel').carousel({
                    padding: 150,
                    fullWidth: true,
                    indicators: true
                });
            });
        </script>
</body>
<?php require_once 'component/footer.php' ?>


</html>