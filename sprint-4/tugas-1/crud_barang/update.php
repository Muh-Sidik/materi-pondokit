<?php
$id = $_POST['id'];
$dataConnect = new PDO('mysql:host=localhost;dbname=barang', 'root', 'masukaja');
$update = "UPDATE list SET nama_barang=? , harga=$? WHERE id=?";
$perintah = $dataConnect->prepare($update);
$perintah->execute(([$nama_barang, $harga, $id]));
// if ($perintah) {
// header('Location: list-barang.php');
// } else {

// }
?>