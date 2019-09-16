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
                        <a class="nav-link" href="<?= BASEURL ?>/data">Data<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASEURL?>/data/logout">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <header class="head text-center">
        <h2>Data Santri <?= $data['oneData']['nama']?></h2>
    </header>
    <br>
    <div class="container text-center">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark text-center">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>Asal</th>
                </tr>
            </thead>
            <tbody class="text text-center">
                <tr>
                    <td><?= $data['oneData']['nama']?></td>
                    <td><?= $data['oneData']['email']?></td>
                    <td><?= $data['oneData']['nik']?></td>
                    <td><?= $data['oneData']['alamat']?></td>
                    <td><?= $data['oneData']['asal']?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a class="btn btn-primary" role="button" href="<?= BASEURL ?>/data">Kembali</a>
    </div>