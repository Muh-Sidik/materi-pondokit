<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/set2.css">
    <title>Artikel</title>
</head>

<body>

    <header class="head text-center">
        <h4>Halaman Membuat Artikel</h4>
    </header>

    <nav class="text text-center">
        <a type="button" class="btn btn-primary" href="dasbor.php">Account</a>
        <a type="button" class="btn btn-danger" href="logout.php">Logout</a>
    </nav>


    <br>
    <div class="container">
        <form method="POST" action="input.php">
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
            </div>
            <div class="form-group">
                <label>Artikel</label>
                <textarea type="text" name="isi" class="form-control" placeholder="Masukkan Artikel" row="1" required></textarea>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Category</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="1" checked>
                            <label class="form-check-label">
                                Puisi
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="category" value="2" checked>
                            <label class="form-check-label">
                                Prosa
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="category" value="3" checked>
                            <label class="form-check-label">
                                Artikel
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="category" value="4" checked>
                            <label class="form-check-label">
                                Cerpen
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="category" value="5" checked>
                            <label class="form-check-label">
                                Fabel
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
    </div>
    <div class=" form-group text-center">
        <input type="submit" name="upload" class="btn btn-success" value="Upload">
    </div>
    </form>
    </div>
    <?php
    // include_once('input_con.php');
include('config.php');
$config = new Blog();

if (isset($_POST['upload'])) {
$nama = $_SESSION['user'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$user_id = $_SESSION['id'];
$id_category = $_POST['category'];
$input = $config->input($nama, $judul, $isi, $user_id, $id_category);


header('Location: dasbor.php');

}

?>


    <!-- <p>Total: ?//php echo ($query) ?></p> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>