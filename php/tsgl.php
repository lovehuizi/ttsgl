<?php
include('./public.php');
$sql = "select * from book";
$res = $conn->query($sql);

$dataarr = array();  
while($row = mysqli_fetch_assoc($res)) {
    $dataarr[]=$row;  
}  

echo json_encode($dataarr);  



?>