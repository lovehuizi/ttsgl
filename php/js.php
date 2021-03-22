<?php
include('./public.php');
$user = $_GET['user'];
$book = $_GET['book'];
$oldtime = $_GET['oldtime'];
$newtime = $_GET['newtime'];
$price = $_GET['price'];

$sql = "select * from book where name='$book'";
$res = $conn->query($sql);

if($res->num_rows > 0){
  $flag = $res->fetch_array(MYSQLI_ASSOC)['state'];
    
  if($flag == '借出'){
    echo '此书已被借出';
  }else if($flag == '在馆'){
    $sql = "select * from user where name='$user'";
    $res = $conn->query($sql);
        
    $a = mysqli_fetch_array($res);
    $num = $a['price'];
    if($num>=0){
      $sql = "insert into user_books(name,start,end,outprice,user) values('$book','$oldtime','$newtime','$price','$user')";
      $ins = $conn->query($sql);
      if($ins){
          $sql = "update book set state='借出' where name='$book'";
          $res = $conn->query($sql);
   
          $sql = "update user set state='ok' where name='$user'";
          $res = $conn->query($sql);
     
      }
    }else{
      echo '您已欠费请及时充值！';
    }
  }
}else{
    echo '没有这本书，或用户名输入错误！';
}






