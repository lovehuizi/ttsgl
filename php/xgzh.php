<?php
include('./public.php');
$name = $_GET['users_name'];
$tel = $_GET['users_tel'];
$textarea = $_GET['textarea'];
$code = $_GET['users_code'];

$sql = "select * from user where code='$code'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "update user set name='$name',tel='$tel',home='$textarea' where code='$code'";
    $res = $conn->query($sql);
    if($res){
        echo 'ok';
    }
}else{
    echo 'no';
}
  