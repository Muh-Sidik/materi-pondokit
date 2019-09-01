<?php

    include_once('config.php');
    $config = new Blog();

    if (isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nomor = $_POST['nomor'];
        $password = $_POST['password'];

        $register = $config->register($nama, $email, $nomor, $password);

        if (empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['nomor']) || empty($_POST['password'])) {
            echo "Jangan ada Data yang kosong!";
        } else {
            header('Location: sign.php');
        }
    }
