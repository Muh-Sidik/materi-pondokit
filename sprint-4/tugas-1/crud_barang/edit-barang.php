<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>
    <?php
    if (isset($_POST['edit'])) {
    $get = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $dataConnect = new PDO('mysql:host=localhost;dbname=barang', 'root', 'masukaja');
    $update = "UPDATE list SET nama_barang=?, harga=? WHERE id=?";
    $perintah = $dataConnect->prepare($update);
    $perintah->execute(([$nama_barang, $harga, $get]));
    header('Location: list-barang.php');
    }
    ?>
    <h1 class="head text-center">Edit Data</h1>
    <div class="container">
        <form method="POST" action="edit-barang.php">
            <div class="form-group">
                <input type="hidden" class="from-control" name="id" id="id" value=<?=$_GET['id']?>>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga">
            </div>
            <input type="submit" name="edit" value="Edit">
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>