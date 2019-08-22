<?php
$id = $_GET['id'];
$dataConnect = new PDO('mysql:host=localhost;dbname=barang', 'root', 'masukaja');
$delete = "DELETE FROM list WHERE id = ?";
$perintah = $dataConnect->prepare($delete);
$perintah->execute(([$id]));
header('Location: list-barang.php');

?>