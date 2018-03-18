<?php
    session_start();
?>
<html>
    <form name="form1" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="text1"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sign In" name="submit1"></td>
            </tr>
        </table>
    </form>
</html>
<?php
    if ($_POST['submit1']) {
        $v1 = "rastamania";
        $v2 = "ssw";
        $v3 = $_POST['text1'];
        $v4 = $_POST['pwd'];
        if ($v1 == $v3 && $v2 == $v4) {
            $_SESSION['luser'] = $v1;
            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (0.1 * 60);
            header('Location: homepage.php');
        } else {
            echo "Please enter the username or password again!";
        }
    }
?>
