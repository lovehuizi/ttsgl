<?php
include('./public.php');
$name = $_GET['name'];
$user = $_GET['user'];
$state = $_GET['state'];
$price = $_GET['price'];
$textarea = $_GET['textarea'];

$sql = "select * from book where name='$name'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "update book set name='$name',user='$user',state='$state',price='$price',say='$textarea' where name='$name'";
    $res = $conn->query($sql);
    if($res){
        echo '修改成功';
    }
}else{
    $sql = "insert into book(name,user,state,price,say) values('$name','$user','$state','$price','$textarea')";
    $ins = $conn->query($sql);
    if($ins){
        echo '添加成功';
    }
}