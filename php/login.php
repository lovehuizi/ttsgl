<?php
    include('./public.php');
    $user = $_GET['user'];
    $pwd = $_GET['pwd'];
    $time = $_GET['time'];
    $sql = "select * from admins where user='$user' and pwd='$pwd'";
    $res = $conn->query($sql);

    // 判断用户登录时间
    $arr = $res->fetch_array();
    $data = [];
    if($arr['time'] != '' || $arr['time'] != null ){
        
        array_push($data, $arr['time']); 
        $sql="update admins set time='$time' where user='$user' and pwd='$pwd'";		
        $conn->query($sql);
    }else{
        $sql="update admins set time='$time' where user='$user' and pwd='$pwd'";		
        $conn->query($sql);
    }

    if($res->num_rows > 0){
       array_push($data,'ok');
    }else{
        array_push($data,'no'); 
    }

    // 查询剩余有多少本书

    $sql = "select * from book where  state = '在馆'";
    $res = $conn->query($sql);
    $num = $res->num_rows;
    array_push($data,$num);
    
    // 查询当前有多少个用户借书
    $sql = "select * from user where  state = 'ok'";
    $res = $conn->query($sql);
    $userNum = $res->num_rows;
    array_push($data,$userNum);


    echo json_encode(($data));   // 返回给前端的数据

?>