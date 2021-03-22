<?php
include('./public.php');
$name = $_GET['name'];
$price = $_GET['price'];
$sql="update user_books set outprice='$price' where name='$name'";	
$res = $conn->query($sql);

 if($res){
     echo 'ok';
 }



?>