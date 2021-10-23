<?php
include "../partials/connection.php";

$roomname=$_POST['roomname'];
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$msg=$_POST['msg'];

$sql="INSERT INTO `messages` (`srno`, `roomname`, `sender`, `receiver`, `msg`, `date`) VALUES (NULL, '$roomname', '$sender', '$receiver', '$msg', current_timestamp());";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
?>