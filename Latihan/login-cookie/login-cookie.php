<?php
$cookie_username = "sidik";
$cookie_password = "ayam";
setcookie("username", $cookie_username, time() + (86400 * 30), "/");
setcookie("password", $cookie_password, time() + (86400 * 30), "/");
?>

<form method="POST" action="login-cookie.php">
First Name<br>
<input type="text" name="username">
<br>
Password<br>
<input type="password" name="password">
<br>
<input type="submit" value="Login">

<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_COOKIE['username'] == $_POST['username'] && $_COOKIE['password'] == $_POST['password']) {
            echo "Anda Berhasil Login";
        } else {
            echo "Anda bukan pemilik akun!";
        }
    }
?>