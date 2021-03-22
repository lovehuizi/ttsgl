<?php
include('./public.php');
$code = $_GET['users_code'];
$sql = "delete from user where code='$code'";
$del = $conn->query($sql);

if($del){
    echo '删除成功';
}else{
    echo '删除失败';
}

?>