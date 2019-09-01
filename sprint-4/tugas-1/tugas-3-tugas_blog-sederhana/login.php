<?php

            include_once('config.php');

            $config = new Blog();

            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $login = $config->login($email, $password);
                $statement = $login->fetch(PDO::FETCH_OBJ);

                if (empty($_POST['email']) || empty($_POST['password'])) {
                    echo "Email dan Password tidak boleh kosong!";
                } else {
                    $_SESSION['id'] = $statement->id;
                    $_SESSION['user'] = $statement->nama;
                    if (isset($_POST['remember'])) {
                        setcookie('user', hash('SHA256', $email), time() + 3600);
                    }
                    header('Location: dasbor.php');
                }
            }
?>