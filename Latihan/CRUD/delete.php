<?php
$id = $_GET['id'];
include('connect.php');
$delete = new Crud();
$statement= $delete->delete($id);
header('Location: list.php');
?>