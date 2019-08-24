<?php
session_start();        //jalankan session

include "connection.php";       //konek ke database

if(isset($_SESSION['username'])) {      //jika punya session (jika sudah login) maka
    if ($_SESSION['username'] !== null) {       //jika session username ADA (STATUS LOGIN)
        header("Location: home.php");       //pindah ke home.php lagi
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php if(isset($pesan)){
        echo $pesan;
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Masukkan Nama" required autofocus><br>
        <input type="password" name="password" placeholder="Masukkan Password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php

if(isset($_POST['submit'])) {

    if(empty($_POST['username'])) {

        $pesan = "Username jangan kosong dong!!!!";

    } elseif (empty($_POST['password'])) {
        
        $pesan = "Password jangan kosong dong!!!";

    } elseif (empty($_POST['username']) && empty($_POST['password'])) {

        $pesan = "Username dan Password jangan kosong dong!!!!";

    } else {

        $query = "SELECT * FROM login WHERE nama = :user AND pass = :pass";
        $statement = $connect->prepare($query);

        $statement->execute(
            array (
                'user' => $_POST['username'],
                'pass' => $_POST['password']
            )
        );

        $count = $statement->rowCount();
        if ($count > 0) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('Location: home.php');
        } else {
            $pesan = "Username dan password salah!!";
        }

    }
}

?>