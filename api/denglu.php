<?php
include 'conn.php';

$name = isset($_POST['username'])?$_POST['username']:'0';     //判断接收的数据是否为空

$password = isset($_POST['password'])?$_POST['password']:'0';

$sql = "SELECT * FROM useryanzheng WHERE name='$name' AND pass='$password'";   //把数据加入到数据库中；
// echo $name,$password;
$res = $conn->query($sql);     //结果集；

if ($res->num_rows){
    //证明有这个数据；
    echo '1';
}else{
    echo '0';
}
?>