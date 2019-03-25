<?php
include 'conn.php';
// 接收前端的page 和 num
$num = isset($_POST['num'])?$_POST['num']:'';
$page = isset($_POST['page'])?$_POST['page']:'';
// echo $num,$page;
// 2.查询数据
$sql = "SELECT * FROM xiangqingpingjia";

$res = $conn->query($sql);


$arr = $res->fetch_all(MYSQLI_ASSOC);
// var_dump($arr);

	//3.切割数据，做成字符串传给前端（重点）
	//经过array_slice()方法，得到的还是数组
$newarr = array_slice($arr,($page - 1) * $num,$num);

//把要传给前端的数据，做成关联数组，就可以传多点内容
$list = array(
	'total' => count($arr),//总条数
	'data' => $newarr,//子数组：根据前端需求切割得到的子数组
	'page' => $page,
	'num' => $num
);
	// 把数据做成字符串传给前端
echo json_encode($list,JSON_UNESCAPED_UNICODE);
?>