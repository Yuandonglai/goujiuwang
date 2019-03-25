<?php

    //连接数据库
    include 'conn.php';

      /**
       * str=dele&id=xxx;
       */

    $str = isset($_POST['str']) ? $_POST['str'] : '';

    $id = isset($_POST['id']) ? $_POST['id'] : '';

    $num = isset($_POST['num']) ? $_POST['num'] : '';

    $check = isset($_POST['checked']) ? $_POST['checked'] : '';
    $xiaoji = isset($_POST['xiaoji']) ? $_POST['xiaoji'] : '';
    //+
    if($str=='add'){       
        $sql="UPDATE orders SET num=$num,xiaoji=$xiaoji WHERE id='$id'";
    }

     //-    
    if($str=='minus'){
          $sql="UPDATE orders SET num=num-1,xiaoji=$xiaoji WHERE id='$id'";
    }

     //减
    if($str=='checked'){       
          $sql="UPDATE orders SET checked='$check' WHERE id='$id'";
    }

    //减
    if($str=='update'){    
          $sql="UPDATE orders SET num=$num WHERE id='$id'";
    }

  //删除一行
    if($str=='dele'){
          $sql="DELETE FROM orders WHERE id='$id'";
    }

     //清空购物车
    if($str=='deldeall'){     
          $sql="DELETE FROM orders";
    }
    
   
    //执行语句
    if($str){
        $res = $conn->query($sql);
    }


    //重新查询id对应的商品信息
    $sql3 = "SELECT * FROM orders";

    //执行sql语句，得到一个结果集
    $res3 = $conn->query($sql3);

    //得到结果集里面的内容部分
    $row3 = $res3->fetch_all(MYSQLI_ASSOC);//对象[{},{},{}]

    //返回商品信息
    echo json_encode($row3,JSON_UNESCAPED_UNICODE);

?>