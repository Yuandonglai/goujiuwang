<?php
include 'conn.php';
// 查询数据库

// $ID = isset($_POST['ID'])?$_POST['ID']:'';
$sql = "SELECT * FROM orders";

$res = $conn->query($sql);  //查询结果集


$arr = $res->fetch_all(MYSQLI_ASSOC);       //转换成数组
// var_dump($arr);
// echo $arr;
echo json_encode($arr,JSON_UNESCAPED_UNICODE);  //转换成字符串输出
?>