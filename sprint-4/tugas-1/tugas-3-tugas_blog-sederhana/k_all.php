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
    <link rel="stylesheet" href="category.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>All Category</title>
</head>

<body>

    <div class="col-sm-9">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="dasbor.php"><i class="fas fa-home"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="k_all.php"><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="k/k_puisi.php">Puisi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="k/k_prosa.php">Prosa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="k/k_artikel.php">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="k/k_cerpen.php">Cerpen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="k/k_fabel.php">Fabel</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <?php
            include('config.php');

            $config = new Blog();
            $data = $config->allcategory();
            $statement = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($statement as $key => $values) {

                ?>
                <h3><a class="text-dark" href=""><?= $values['judul'] ?></a></h3>
                <small class="text-inline"><?= $values['nama'] ?></small>
                <small><?= $values['tanggal'] ?></small>
                <br><br>
                <p><?= $values['isi'] ?></p>
                <hr>
                <br><br>
            <?php } ?>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>