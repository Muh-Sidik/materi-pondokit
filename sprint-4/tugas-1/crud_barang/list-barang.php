<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>List Barang</title>
</head>

<body>

    <header class="head text-center">
        <h4>Barang yang Sudah Masuk</h4>
    </header>

    <nav class="text text-center">
        <a type="button" class="btn btn-outline-primary" href="input-barang.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <div class="container">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody class="text text-center">

                <?php
                // $id = $_GET['id'];
                include_once('config.php');
                $list_barang = new Barang();
                $objectlist = $list_barang->list();
                $tampil = $objectlist->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php
                foreach ($tampil as $key => $data) {
                    ?>
                <tr>
                    <td> <?= $data['id'] ?> </td>
                    <td> <?= $data['nama_barang'] ?> </td>
                    <td> <?= $data['harga'] ?> </td>
                    <td>
                        <a type="button" class="btn btn-outline-primary" href='edit-barang.php?id=<?= $data['id'] ?>'>Edit</a>
                        <a type="button" class="btn btn-outline-danger" href='delete.php?id=<?= $data['id'] ?>'>Hapus</a>
                    </td>

                </tr>
                <?php } ?>
                
    </div>

    </tbody>
    </table>

    <!-- <p>Total: ?//php echo ($query) ?></p> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>