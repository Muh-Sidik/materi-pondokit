<?php

session_start();

session_destroy();

setcookie('user', $email, time()-3600);
setcookie('user', $password, time()-3600);

header('Location: index.php');

?>