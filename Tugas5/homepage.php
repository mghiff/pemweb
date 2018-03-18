<?php
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Please Login again ";
        echo "<a href='login.php'>Click Here to Login</a>";
    }
    else {
        $now = time();
        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='login.php'>Login here</a>";
        }
        else if ($now < $_SESSION['expire']){ 
?>      
            <html>
            <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.6.6, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
        <meta name="description" content="">
        <title>Home</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        </head>
        <body>
                Welcome
                <?php
                    echo $_SESSION['luser'];
                    echo "<a href='logout.php'> Log out</a>";
                ?>
                <section class="header6 cid-qMyXCHWsG3 mbr-fullscreen" data-bg-video="<?php         
        date_default_timezone_set("Asia/Jakarta");
        echo date('l , j-F-Y H:i:s a');
        $a=date('H');
        $c = "";
        $link = "";
        if ($a >= 7 && $a <= 10 ){
            $c = "Selamat Pagi";
            $link = "https://www.youtube.com/watch?v=2VGcbE3bYvA";
            echo "<br> Selamat Pagi";
        }
        elseif ($a >= 11 && $a <= 15) {
            $c = "Selamat Siang";
            $link = "https://www.youtube.com/watch?v=Nbblnb3SUiM";
            echo "<br> Selamat Siang";
        }
        elseif ($a >= 16 && $a <= 18) {
            $c = "Selamat Sore";
            $link = "https://www.youtube.com/watch?v=uNCr7NdOJgw";
            echo "<br> Selamat Sore";
        }
        else {
            $link = "https://www.youtube.com/watch?v=F6MEefJVSRo";
            $c = "Selamat Malam";   
        }
        echo "$link"; ?>" id="header6-h">
        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
        <?php
        date_default_timezone_set("Asia/Jakarta"); echo "<br>";
        echo date('l , j-F-Y H:i:s a');
        $a=date('H');
        $c = null;
        if ($a >= 7 && $a <= 10 ){
            $c = "Selamat Pagi";
            echo "<br> Selamat Pagi";
        }
        elseif ($a >= 11 && $a <= 15) {
            $c = "Selamat Siang";
            echo "<br> Selamat Siang";
        }
        elseif ($a >= 16 && $a <= 18) {
            $c = "Selamat Sore";
            echo "<br> Selamat Sore";
        }
        else $c = "Selamat Malam"; ?>
        </h1>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
                  <?php
                  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
                    $browser = 'Netscape';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
                    $browser = 'Firefox';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
                    $browser = 'Google Chrome';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
                    $browser = 'Opera';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
                    $browser = 'Internet Explorer';
                } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'SAFARI')) {
                    $browser = 'Safari';
                } else $browser = 'Other';
                    echo 'Anda menggunakan browser  '. $browser. '<br>';
                  ?>  </p>              
            </div>
        </div>
    </div>
</section>
  <section class="engine"><a href="https://mobirise.ws/o">best mobile website builder</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/theme/js/script.js"></script>
                </body>
            </html>
<?php
        }
    }
?>
  
