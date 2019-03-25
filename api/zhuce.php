<?php
    include 'conn.php';

    $tel = isset($_POST['username']) ? $_POST['username'] : '0';

    $sql = "SELECT * FROM useryanzheng WHERE name = '$tel'";

    $res = $conn->query($sql);      //结果集

    if($res->num_rows){
        echo 'no';      //证明表里面是有，所以以不能注册
    }else{
        echo 'yes';         //代表可以注册；
    }


?>