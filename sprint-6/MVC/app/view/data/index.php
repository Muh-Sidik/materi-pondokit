<link rel="stylesheet" href="<?= BASEURL ?>/css/mg.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL ?>/data"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASEURL ?>/data">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>/data/logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <header class="head text-center">
        <h2>Santri yang terdaftar</h2>
    </header>
    <hr>
    <br>
    <div class="row text-center">
        <div class="col-lg-6">
            <?php Message::flash() ?>
        </div>
    </div>
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Asal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text text-center">
                <?php foreach ($data['data'] as $value) :
                    ?>
                    <tr>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['nik'] ?></td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['asal'] ?></td>
                        <td>
                            <a class="btn btn-primary" role="button" href="<?= BASEURL ?>/data/detail/<?= $value['id'] ?>">Detail</a>

                            <a class="btn btn-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $value['id'] ?>" role="button" href="<?= BASEURL ?>/data/ubah/<?= $value['id'] ?>">Ubah</a>

                            <a class="btn btn-danger" role="button" onclick="return confirm('Yakin,ingin hapus data?')" href="<?= BASEURL ?>/data/hapus/<?= $value['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Button trigger modal -->
    <div class="container text-center">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                TAMBAH DATA SANTRI
        </button>
    </div>

    <br>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Santri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <form action="<?=BASEURL?>/data/tambah" method="POST">
                                <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" id="asal" class="form-control" placeholder="Masukkan Asal Kota" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required autofocus>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    