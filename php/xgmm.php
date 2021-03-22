<?php
include('./public.php');
$pwd = $_GET['users_pwd'];
$code = $_GET['users_code'];

$sql = "select * from user where code='$code'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    $sql = "update user set pwd='$pwd' where code='$code'";
    $res = $conn->query($sql);
    if($res){
        echo $pwd;
    }
}else{
    echo 'no';
}
  