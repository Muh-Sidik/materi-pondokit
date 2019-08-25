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
    <link rel="stylesheet" href="css/update.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Halaman Edit Data</title>
</head>

<body>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $id = $_GET['id'];
                    include_once('connect.php');
                    $list = new Crud();

                    $statement = $list->tampil($id);
                    $hasil = $statement->fetchAll(PDO::FETCH_ASSOC);
                    foreach ( $hasil as $key => $value ) {
                ?>
                <tr>
                    <td><?= $value['id']?></td>
                    <td><?= $value['nama']?></td>
                    <td><?= $value['email']?></td>
                </tr>
                <?php
                        }
                ?>
            </tbody>
        </table>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        include_once('connect.php');
        $config = new Crud();
        $statement = $config->update($nama, $email, $id);
        header('Location: list.php');
    }
    ?>
    <div class="container">
        <h2 class="text-center">Halaman Edit Data</h2>
        <hr>

        <form method="POST" action="update.php">
            <fieldset>
                <div class="form-group">
                    <input type="hidden" class="from-control" name="id" id="id" value=<?= $_GET['id'] ?>>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control" name="nama" placeholder="Edit Nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</i></div>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Edit Email" required>
                    </div>
                </div>
                <div class="from-group text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Edit">
                    <!-- <input type="submit" class="btn btn-warning" href="register.php" value="Register"> -->
                </div>
            </fieldset>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>