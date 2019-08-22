<?php
    include('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Input Barang</title>
</head>

<body>
    <div class="container text-center">
        <div class="main">
            <form method="POST" action="input-barang.php" id="form">
                <h2>Silahkan Input Barang</h2>
                <div class="from-group">
                    <label>Nama Barang: </label>
                    <input class="form-control" type="text" name="nama_barang" id="nama_barang" />
                </div>
                <div class="form-group">
                    <label>Harga: </label>
                    <input class="form-control" type="text" name="harga" id="harga" />
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Input Barang</button>
            </form>
            <?php
                if (isset ($_POST['submit'])) {
                    $nama_barang = $_POST['nama_barang'];
                    $harga = $_POST ['harga'];
                    $objectInput = new Barang();
                    $inputData = $objectInput->input($nama_barang, $harga);
                    if ($inputData) {
                        header ('Location: index.php?status=sukses');
                    } else {
                        header ('Location: index.php?status=gagal');
                    }
                } else {
                    die();
                }      
            ?>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>