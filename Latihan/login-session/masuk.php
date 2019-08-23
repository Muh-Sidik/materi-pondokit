<h2>Anda Berhasil Login</h2>

<?php

session_start();

$dbconnect = new PDO('mysql:host=localhost;dbname=app_ku', 'root', 'masukaja');
$sql = "SELECT * FROM login WHERE nama = ? AND pass = ?";

$statement = $dbconnect->prepare($sql);
$statement->execute([$_SESSION['nama'], $_SESSION['pass']]);

$data = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $key=>$value) {
    echo "data :" . $value['id'] . "<br>";
    echo "Nama :" . $value['nama'] . "<br>";
    echo "Password :" . $value['pass'];
}