<?php
include('./public.php');
$name = $_GET['name'];
$user = $_GET['user'];
$price = $_GET['outprice'];


$num = $price+1;
$sql = "update user_books set outprice='$num' where name='$name' and user='$user'";
$res = $conn->query($sql);
if($res){
    echo '修改成功';
}

