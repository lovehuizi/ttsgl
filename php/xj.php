<?php
include('./public.php');
$name = $_GET['name'];
$book = $_GET['book'];
$time = $_GET['time'];
$price = $_GET['price'];

$sql="update user_books set end='$time' where name='$book'";	
$res = $conn->query($sql);

$sql="update user set price='$price' where name='$name'";	
$res = $conn->query($sql);



?>