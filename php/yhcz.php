<?php
include('./public.php');
$code = $_GET['users_code'];
$price = $_GET['users_price'];

$sql = "select * from user where code='$code'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    
    $a = mysqli_fetch_array($res);
    $num = $a['price']+$price;

    $sql = "update user set price='$num' where code='$code'";
    $res = $conn->query($sql);
    if($res){
        echo $num;
    }
}else{
    echo 'no';
}
  