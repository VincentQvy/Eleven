<html lang="fr" dir="ltr">

<?php require_once '../Header/Header.php'?>


<body class='blue_bg'>
    <?php require_once '../Navbar/navbar.php';
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
                        <a href='stream.php?id=<?php echo $video['id'] ?>' ><?php echo $video['name'] ?><img src="../../<?php echo $video['image'] ?>" alt=""></a>
                        
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
<?php require_once '../Footer/footer.php'?>


</html>