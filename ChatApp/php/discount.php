<?php
include '../../includes/connection.php';
$member_id=$_POST['member_id'];
$discount=$_POST['discount'];
$trainer_id=$_SESSION['unique_id'];
$sql="INSERT INTO `discount`(`member_id`, `trainer_id`, `discount`) VALUES ('$member_id','$trainer_id','$discount')";
if ($conn->query($sql) === TRUE) {

echo "1";
}

?>