<?php
include 'conn.php';
// 查询数据库
$sql = "SELECT * FROM dianzhang";

$res = $conn->query($sql);  //查询结果集


$arr = $res->fetch_all(MYSQLI_ASSOC);       //转换成数组
// var_dump($arr);
// echo $arr;
echo json_encode($arr,JSON_UNESCAPED_UNICODE);  //转换成字符串输出
?>