<?php
session_start();
include_once('connect.php');

if (isset($_SESSION['user'])) {      //jika punya session (jika sudah login) maka
    if ($_SESSION['user'] !== null) {       //jika session username ADA (STATUS LOGIN)
        header("Location: home.php");       //pindah ke home.php lagi
    }
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
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">LOGIN</h2>
        <hr>

        <form method="POST" action="login.php">
            <fieldset>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                </div>
                    <input type="checkbox" name="remember" id="remember">
                    <label>Remember me</label>
                <div class="from-group text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Login">
                    <a type="submit" class="btn btn-warning" href="register.php">Register</a>
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

<?php
include_once('connect.php');
$config = new Crud();

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = $config->login($email, $password);
    $masuk = $login->fetch(PDO::FETCH_OBJ);

    if (empty($email) || empty($password)) {
        echo "Jangan kosong dong email atau passwordnya";
    } else {
        $_SESSION['user'] = $masuk->id;
        if (isset($_POST['remember'])) { 
        setcookie('user', $email, time()+120);
        }
        header('Location: home.php');
    }
}

?>