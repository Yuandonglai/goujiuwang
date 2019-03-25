<?php


//配置参数
$servername = 'localhost';
$username = 'root';
$passname = '';
$dbname = 'goujiuwang';

//建立链接：$conn对象  js中调用对象的属性  arr.lenght 
	//php调用属性和方法  ->   $conn -> lenght
	$conn = new mysqli($servername,$username,$passname,$dbname);
	mysqli_set_charset($conn,'utf8');
	//判断是否连接成功
	if($conn->connect_error) {
		die('出错原因是:'.$conn->connect_error);
	}

			// echo '连接成功';
    
?>