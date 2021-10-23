<?php
session_start();
if((!isset($_SESSION['loggedin'])) && (!isset($_SESSION['drloggedin']))){
    header("location: login.php");
  }
?> 
<?php include "partials/connection.php";
$sql="CREATE TABLE `ihealth`.`messages` ( `srno` INT NOT NULL AUTO_INCREMENT , `roomname` VARCHAR(20) NOT NULL , `sender` VARCHAR(20) NOT NULL , `receiver` VARCHAR(20) NOT NULL , `msg` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`srno`)) ENGINE = InnoDB;
";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="partials/navbar.css">
    <link rel="stylesheet" href="partials/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Messages</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .container{
            height: 500px;
    border: 2px solid red;
    width: 400px;
    margin: auto;
    padding: 20px;
    background: black;
    color: white;
        }
        .box{

            margin: 10px;
    border: 2px solid black;
    padding: 5px 10px;
    background: beige;
    border-radius: 10px;
    color:black;

        }
    </style>
</head>
<body>
    <?php require "partials/navbar.php";?>
    <div class="content">
        <div class="container">
            <h1>Your Messages</h1>
            <div class="box">
                <div><a href="http://localhost/iHealth/chats/chat.php?roomname=sammeer-rashid&receiver=rashid">username:Rashid<a></div>
            </div>
            <div class="box">
                <div>username:Rashid</div>
            </div>
            <div class="box">
                <div>username:Rashid</div>
            </div>
        </div>
        <?php require 'partials/footer.html'?>
        
        
    </div>
</body>
</html>