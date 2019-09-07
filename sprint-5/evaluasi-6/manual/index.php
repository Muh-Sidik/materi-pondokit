<?php

// function __autoload($class)
// {
//     require_once($class . ".php");
// }

function autoloadLingkaran($class) {
    $file = "lingkaran/{$class}.php";
    if(is_readable($file)) {
        require $file;
    }
}

function autoloadSegitiga($class) {
    $file = "segitiga/{$class}.php";
    if(is_readable($file)) {
        require $file;
    }
}

function autoloadPersegi($class) {
    $file = "persegi/{$class}.php";
    if(is_readable($file)) {
        require $file;
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

    <title>Menghitung Bangun Datar</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label>Jari-Jari</label>
                        <input type="text" name="jari" class="form-control" placeholder="Masukkan Jari-jari">
                    </div>
                    <div class="form-group">
                        <label>Phi</label>
                        <input type="text" name="phi" class="form-control" placeholder="Masukkan Phi">
                    </div>
                    <button type="submit" name="hitung1" class="btn btn-success">Hitung</button>
                </form>
            </div>
            <div class="col-sm">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label>Alas</label>
                        <input type="text" name="alas" class="form-control" placeholder="Masukkan Alas">
                    </div>
                    <div class="form-group">
                        <label>Tinggi</label>
                        <input type="text" name="tinggi" class="form-control" placeholder="Masukkan Tinggi">
                    </div>
                    <button type="submit" name="hitung2" class="btn btn-success">Hitung</button>
                </form>
            </div>
            <div class="col-sm">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label>Sisi 1</label>
                        <input type="text" name="sisi1" class="form-control" placeholder="Masukkan Sisi 1">
                    </div>
                    <div class="form-group">
                        <label>Sisi 2</label>
                        <input type="text" name="sisi2" class="form-control" placeholder="Masukkan Sisi 2">
                    </div>
                    <button type="submit" name="hitung3" class="btn btn-success">Hitung</button>
                </form>
            </div>
        </div>
    </div>


    <?php
    spl_autoload_register('autoloadLingkaran');
    spl_autoload_register('autoloadSegitiga');
    spl_autoload_register('autoloadPersegi');

    if (isset($_POST['hitung1'])) {

        $lingkaran = new Lingkaran();
        $hasil = $lingkaran->rumus1($_POST);

    } elseif (isset($_POST['hitung2'])) {

        $segitiga = new Segitiga();
        $hasil = $segitiga->rumus2($_POST);

    } elseif (isset($_POST['hitung3'])) {

        $persegi = new Persegi();
        $hasil = $persegi->rumus3($_POST);

    }

    ?>
    <?php
    if(isset($hasil)== true) {
    ?>
    <br>
    <br>
    <h2 class="text-center">Luas Bangun Datar <?php print_r($hasil); ?> cm</h2>

    <?php } ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>