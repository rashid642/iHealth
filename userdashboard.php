<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true){
    header("location: login.php");
  }
?> 
<?php
    require "partials/connection.php";
    $sql= "SELECT * FROM `userdetail` WHERE `username` LIKE '".$_SESSION['username']."'" ;
    $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="partials/footer.css">
    <link rel="stylesheet" href="partials/navbar.css">
    <title><?php echo $_SESSION['username']?></title>
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .container img{
            height: 300px;
        }
        .userdetail{
            padding: 26px 70px;
        }
        .userdetail h3{
            margin: 10px 10px;
            font-size:22px;
        }
        .appointment{
            height: 200px;
            margin: 26px 70px;
            text-align:center;
        }
        .appointmentList{
            margin: 10px;
        }
    </style>
</head>
<body>
<?php require 'partials/navbar.php'?>
    <div class="content">
        <div class="container">
        <img src="images/dpicon.jpg">
        <div class="userdetail">
            <?php
            $detail=mysqli_fetch_assoc($result);
            echo "<h3>Name: ".$detail['fullname']."</h3>
            <h3>E-mail: ".$detail['email']."</h3>
            <h3>Username: ".$detail['username']."</h3>";
            ?>
            <a href="http://localhost/iHealth/messages.php">View Messages</a>
        </div>
        </div>
        <div class="appointment">
            <h1>Your Appoinments</h1>
            <hr>
            <?php
                $sql="SELECT * FROM `appointments` WHERE `username` LIKE '".$detail['username']."'";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                while($row=mySqli_fetch_assoc($result)){
                        echo '<div class="appointmentList">You have '.$row["drusername"].' Appointment on '.$row["day"].'-'.$row["month"].'-'.$row["year"].' at '.$row["hour"].':'.$row["min"].'AM</div>';
                }
                if($num==0){
                    echo '<div class="appointmentList">You have no Appointments</div>';
                }
            ?>
        </div>

        <?php require 'partials/footer.html'?>
    </div>
</body>
</html>