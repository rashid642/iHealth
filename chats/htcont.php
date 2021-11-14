<?php
// session_start();
include "../partials/connection.php";
$roomname=$_POST['roomname'];
$username=$_POST['username'];

$sql="SELECT * FROM `messages` WHERE `roomname` LIKE '$roomname'";
$res="";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        if($row["sender"]==$username){
            $res=$res.'<div class="chat" style="background-color: white; 
            color:black;
            ">
            <div class="name">'.$row["sender"].'</div>
            <div class="msg">'.$row["msg"].'</div>
            <div class="time">'.$row["date"].'</div>
            </div>';
        }else{
            $res=$res.'<div class="chat">
            <div class="name">'.$row["sender"].'</div>
            <div class="msg">'.$row["msg"].'</div>
            <div class="time">'.$row["date"].'</div>
            </div>';
        } 
        
    }
}
echo $res;
?>