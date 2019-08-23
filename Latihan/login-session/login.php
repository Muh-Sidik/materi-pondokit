<?php

session_start();

$dbconnect = new PDO('mysql:host=localhost;dbname=app_ku', 'root', 'masukaja');
$sql = "SELECT * FROM login WHERE nama = ? AND pass = ?";

if(isset($_POST['login'])) {
    if (empty($_POST['nama']) || empty($_POST['pass'])) {
        echo "Password dan Username harus diisi!!";
    } else {
        $nama = $_POST['nama'];
        $password = $_POST['pass'];
        $state = $dbconnect->prepare($sql);
        $masuk = $state->execute([$nama, $password]);
        if ($masuk) {
            $_SESSION['nama']= $nama;
            $_SESSION['pass']= $password;
            header('Location: masuk.php');
        } else {
            echo "anda gagal login!";
        }
    }
}