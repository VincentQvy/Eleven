<html lang="fr" dir="ltr">

<?php require_once '../Header/Header.php'?>


<body class='blue_bg '>
    <?php require_once '../Navbar/navbar.php'?>
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
                <img class="place_chat" src="../../images/chat.png" alt="">
            </div>
        </div>
    </div>
</body>
<?php require_once '../Footer/footer.php'?>


</html>