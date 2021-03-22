<?php
include('./public.php');
$name = $_GET['name'];
$pwd = $_GET['pwd'];
$tel = $_GET['tel'];
$price = $_GET['price'];
$home = $_GET['home'];
$code = $_GET['code'];

$sql = "select * from user where name='$name'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "update user set name='$name',pwd='$pwd',tel='$tel',price='$price',code='$code',home='$home' where name='$name'";
    $res = $conn->query($sql);
    if($res){
        echo '修改成功';
    }
}else{
    $sql = "insert into user(name,pwd,tel,price,home,code) values('$name','$pwd','$tel','$price','$home',$code)";
    $ins = $conn->query($sql);
    if($ins){
        echo '添加成功';
    }
}