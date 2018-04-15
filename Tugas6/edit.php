<?php
    $file = "data.txt";
    $result = file_get_contents($file);
        $rowedit = $_GET['row'];
        $baris = explode("[R]", $result);
        $cols = explode("|F|", $baris[$rowedit]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style type="text/css">
    .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .form {
        position: relative;
        z-index: 1;
        background: #804200;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form input[type='submit'] {
        background: #4CAF50;
        color: #FFFFFF;
    }
    .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #331a00;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
    body {
        background-color: #76b852;
        background-image: url("http://www.wallpapers4u.org/wp-content/uploads/vintage_notebook_pen_photography_retro_sepia_bar_74943_1920x1080.jpg");
        font-family: "Roboto", sans-serif;    
    }
    </style>
    </head>
    <body>
    <div class="login-page">
        <div class="form">
            <form action="update.php" method="POST">
                <label for="name">Nama</label>
                <input type="text" id="Nama" name="Nama" value="<?php echo $cols[0] ?>">
                <br><br>
                <label for="name">Email</label> 
                <input type="text" id="Email" name="Email" value="<?php echo $cols[1] ?>">
                <br><br>
                <label for="name">Nomor HP</label>
                <input type="tel" id="Nomor" name="Nomor" value="<?php echo $cols[2] ?>">
                <br><br>
                <label for="name">Alamat</label> 
                <input type="text" id="Alamat" name="Alamat" value="<?php echo $cols[3] ?>">
                <input type="hidden" name="row" value="<?php echo $rowedit ?>">
                <br><br>
				<button>Update Form</button>
                </form>
            </div>
        </div>
    </body>
</html>