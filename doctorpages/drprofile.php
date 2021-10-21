<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true){
    header("location: login.php");
  }
?> 
<?php include "partials/connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="partials/navbar.css">
    <link rel="stylesheet" href="partials/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Dr. Rashid</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
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
        #bookappoinmentform{
            display:flex;
        }
        #bookappointment {
            margin: auto;
            padding: 10px 25px;
            border-radius: 20px;

        }
        #bookappointment:hover{
            cursor: pointer;
        }
    </style>
    <style>
        .commentContainer{
            flex-wrap: wrap;
            width: 62%;
            display: flex;
            margin: 10px auto;
            align-items: center;
            margin: auto;

        }
        .commentContainer textarea{
            padding: 10px 4px;
            margin: 10px 10px;
        }
        .commentContainer button{
            padding: 8px 15px;
            border-radius: 10px;
        }
        
    </style>
    <style>
        .reviewsection{
            width: 75%;
            margin: 20px auto;
            background: black;
            padding: 10px;
            border-radius: 10px;
            width: 75%;
            height: 400px;
            overflow-y: scroll;
    
        }
        .reviewsection h1{
            color:white;
            text-align: center;
        }
        .review{
            width: 70%;
            margin: 5px auto;
            background: #10f9ee;
            border-radius: 10px;
            padding: 5px 15px;
        }
        .username{
            font-size: 12px;
        }
        .date{
            font-size: 12px;
            margin: 15px;
        }
        .reviewtext{

        }
    </style>
</head>
<body>
    <?php require "../partials/navbar.php";?>
    <div class="content">
        <?php
            $drusername=$_GET["drusername"];
            // echo $drusername;
        ?>
        <?php
            $sql="SELECT * FROM `drdetail` WHERE `drusername` LIKE '$drusername'";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num==0){
                header("location: ../hospitallist.php");
            }
            $row=mysqli_fetch_assoc($result);
        ?>
        <div class="container">
        <img src="../images/dpicon.jpg">
        <div class="userdetail">
            <h3>Name: <?php echo $row['fullname']?></h3>
            <h3>Speciality:<?php echo $row['speciality']?></h3>
            <h3>Qualification:<?php echo $row['qualification']?></h3>
            <h3>Experience:<?php echo $row['experience']?></h3>
        </div>
        </div>
        <form id="bookappoinmentform" action="appointmentSetter.php" method="post">
            <input type="hidden" name="drusername" value="<?php echo $drusername?>">
            <button id="bookappointment" name="bookappointment">Book <?php echo $row['fullname']?> Appointments</button>
        </form>
        
        
        <div class="reviewsection">
            <h1>Reviews</h1>
            <form action="comment.php" method="POST">
                <input type="hidden" name="drusername" value="<?php echo $drusername?>"> 
                <input type="hidden" name="username" value="<?php echo $_SESSION["username"] ?>"> 
            <div class="commentContainer">
                <textarea maxlength="100" minlength="1" name="review" id="commentText" placeholder="type your review...."
                cols="70" rows="2"></textarea>
                    <br>
                <button id="submitComment">Post</button>
            </div>
            </form>
        
        <?php
                $sql="SELECT * FROM `reviews` WHERE `drusername` LIKE '$drusername'";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                while($row=mySqli_fetch_assoc($result)){
                        echo '<div class="review">
                        <span class="username">Username-'.$row["username"].'</span>
                        <span class="date">'.$row["date"].'</span>
                        <div class="reviewtext">'.$row["review"].'</div>
                    </div>';
                }
                
            ?>
        </div>
        
        <?php require 'partials/footer.html'?>
        
        
    </div>
</body>
</html>