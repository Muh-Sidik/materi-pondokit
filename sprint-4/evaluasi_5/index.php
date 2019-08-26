<?php
session_start();

// if(!isset($_COOKIE['user']) && !isset($_COOKIE['password'])) {
//     if ($_COOKIE['password'] === hash('sha256', $statement->password)) {
//         $_SESSION['user'] = $statement->id;
//     }


if(isset($_POST['user'])) {
    header('Location: list.php');
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
    <link rel="stylesheet" href="css/setting.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Selamat Datang</title>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Pilih Menu</h2>
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
                <form method="POST" action="index.php">
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
            <?php
                include_once('config.php');
                $config = new Data();

                if(isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $password = $_POST ['password'];

                    $login = $config->login($email,$password);
                    $statement = $login->fetch(PDO::FETCH_OBJ);

                        if(empty($email) || empty($password)) {
                        echo "Mohon diisi Email dan Password";
                        } else {
                            $_SESSION['user'] = $statement->id;
                            if(isset($_POST['remember'])) {
                            setcookie('user', $email, time()+3600);
                            setcookie('password', hash('sha256', $password), time()+3600);
                            }
                        header('Location: list.php');    
                    }
                }
            
            ?>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required autofocus>
                        </div>
                    </div>
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required autofocus>
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
    <?php
        include_once('config.php');
        $config = new Data();

        if(isset($_POST['register'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $register = $config->register($nama, $email, $password);
            
            if($register == "berhasil") {
                header('Location: index.php');
            }
        }
        
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>