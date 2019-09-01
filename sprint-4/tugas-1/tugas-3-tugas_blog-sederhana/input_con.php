<?php
include('config.php');
$config = new Blog();

if (isset($_POST['upload'])) {
$nama = $_SESSION['user'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$user_id = $_SESSION['id'];
$id_category = $_POST['category'];
$input = $config->input($nama, $judul, $isi, $user_id, $id_category);

if ($input == "berhasil") {
header('Location: dasbor.php');
}
}
