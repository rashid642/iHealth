<?php
include "../partials/connection.php";
$roomname=$_POST['roomname'];

$sql="SELECT * FROM `messages` WHERE `roomname` LIKE '$roomname'";
$res="";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $res=$res.'<div class="chat">
        <div class="name">'.$row["sender"].' to '.$row["receiver"].'</div>
        <div class="msg">'.$row["msg"].'</div>
        <div class="time">'.$row["date"].'</div>
        </div>';
    }
}
echo $res;
?>