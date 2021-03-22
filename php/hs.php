<?php
include('./public.php');
$user = $_GET['user'];
$book = $_GET['book'];

$sql = "select * from book where name='$book'";
$res = $conn->query($sql);

if($res->num_rows > 0){
  $flag = $res->fetch_array(MYSQLI_ASSOC)['state'];
    
  if($flag == '在馆'){
    echo '此书未被借出';
  }else if($flag == '借出'){
    $sql = "delete from user_books where name='$book' and user='$user'";
    $ins = $conn->query($sql);
    if($ins){
        $sql = "update book set state='在馆' where name='$book'";
        $res = $conn->query($sql);
 
        $sql = "update user set state='no' where name='$user'";
        $res = $conn->query($sql);
   
    }
  }
}else{
    echo '没有这本书，或用户名输入错误！';
}






