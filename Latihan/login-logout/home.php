<?php
session_start();

if($_SESSION['username'] === null) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>halaman Home</title>
</head>
<body>
    <h1>Selamat datang <?=$_SESSION['username']?></h1>
    <a href="logout.php">logout</a>
</body>
</html>