<?php
include 'conn.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
    $sql="DELETE FROM orders WHERE id = '$id'";
?>