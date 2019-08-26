<?php
$id = $_GET['id'];
include('config.php');
$delete = new Data();
$statement= $delete->delete($id);
header('Location: list.php');
