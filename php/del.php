<?php
include('./public.php');
$name = $_GET['name'];
$sql = "delete from book where name='$name'";
$del = $conn->query($sql);

if($del){
    echo '删除成功';
}else{
    echo '删除失败';
}

?>