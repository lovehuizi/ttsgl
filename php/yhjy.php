<?php
include('./public.php');
$user = $_GET['name'];
$sql = "select * from user_books where user='$user'";
$res = $conn->query($sql);

$dataarr = array();  
while($row = mysqli_fetch_assoc($res)) {
    $dataarr[]=$row;  
}  

echo json_encode($dataarr);  



?>