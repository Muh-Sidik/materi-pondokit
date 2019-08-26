<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
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

    <title>List Data Santri</title>
</head>

<body>

    <header class="head text-center">
        <h4>Santri yang terdaftar</h4>
    </header>

    <nav class="text text-center">
        <a type="button" class="btn btn-danger" href="logout.php">Logout</a>
    </nav>

    <br>

    <div class="container">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text text-center">

                <?php
                include_once('config.php');

                $config = new Data();

                $list = $config->list();
                $statement = $list->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php
                foreach ($statement as $key => $data) {
                    ?>
                <tr>
                    <td> <?= $data['id'] ?> </td>
                    <td> <?= $data['nama'] ?> </td>
                    <td> <?= $data['email'] ?> </td>
                    <td> <?= $data['nik'] ?> </td>
                    <td> <?= $data['alamat'] ?> </td>
                    <td>
                        <a type="button" class="btn btn-outline-primary" href='update.php?id=<?= $data['id'] ?>'>Edit</a>
                        <a type="button" class="btn btn-outline-danger" href="delete.php?id=<?= $data['id']?>">Hapus</a>
                    </td>

                </tr>
                <?php } ?>

                <!-- <?php
                include_once('config.php');
                // $perintah = new Data();

                // if (isset($_POST['delete'])) {
                //     $id = $_GET['id'];
                //     $delete = $perintah->delete($id);
                //     if ($delete) {
                //         header('Location: list.php');
                //     }
                // }

                ?> -->

    </div>

    </tbody>
    </table>

    <div class="container">
        <h2 class="text-center">Input Data Santri</h2>
        <hr>

        <form method="POST" action="list.php">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required autofocus>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required autofocus>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK Anda" required autofocus>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda" required autofocus>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required autofocus>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="input" class="btn btn-success" value="Input Data">
            </div>
        </form>
    </div>
    <?php
    include_once('config.php');

    $data = new Data();

    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nik = $_POST['nik'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        $input = $data->input($nama, $email, $nik, $alamat, $password);

        if ($input == "berhasil") {
            header('Location: list.php');
        }
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