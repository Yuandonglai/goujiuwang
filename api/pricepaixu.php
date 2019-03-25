<?php
include 'conn.php';
//查询表里面的数据并且进行价格排序；
$sql = "SELECT * FROM liebiaoxuanran ORDER BY pri LIMIT 0,8";

$res = $conn -> query($sql);

$arr = $res->fetch_all(MYSQLI_ASSOC);

echo json_encode($arr,JSON_UNESCAPED_UNICODE);
?>