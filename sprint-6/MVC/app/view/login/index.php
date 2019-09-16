    <link rel="stylesheet" href="<?= BASEURL ?>/css/set.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bg.css">
        </head>

        <body>
            <div class="container">
                <h2 class="text-center">Selamat Datang</h2>
                <?php Message::flash() ?>
                <hr>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                        <form method="POST" action="<?= BASEURL ?>/login/done">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                                </div>
                            </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember">
                            <label>Remember Me</label>
                        </div>
                            <div class="form-group text-center">
                                <input type="submit" name="login" class="btn btn-primary" value="Login">
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                        <form method="POST" action="<?= BASEURL ?>/login/register">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="register" class="btn btn-warning" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>