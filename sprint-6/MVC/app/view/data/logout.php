<?php

session_start();

session_destroy();
session_unset();
setcookie('key', $user, time()-3600);

header('Location: '. BASEURL .'/home');

?>