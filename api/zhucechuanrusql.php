<?php
include 'conn.php';             //相当于复制conn.php里面的代码；连接数据库；
// 第六步接收用户的相关信息，插入数据库，插入成功返回状态给前端
// 接收数据
$name = isset($_POST['username'])?$_POST['username']:'0';     //判断接收的数据是否为空

$password = isset($_POST['password'])?$_POST['password']:'0';
// echo $name,$password;
$sql = "INSERT INTO useryanzheng(name,pass) VALUES ('$name','$password')";   //把数据加入到数据库中；

$res = $conn->query($sql);     //结果集；
// echo $res;
if ($res){
    //注册成功
    echo '1';
}else{
    echo '0';
}

?>