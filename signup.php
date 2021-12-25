<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    header("location: index.php");
  }
?>
<?php
$showAlert=false;
$showError=false;
$exist=false;
require "partials/connection.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    if($email!="" && $username!="" && $fullname!="" && $password!=""){
        $sql="CREATE TABLE `ihealth`.`userdetail` ( `srno` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `fullname` VARCHAR(50) NOT NULL , `username` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , `confirmpassword` VARCHAR(20) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`srno`)) ENGINE = InnoDB";
        $result=mysqli_query($conn,$sql);
    
        $existsql="SELECT * FROM `userdetail` WHERE `username` LIKE '".$username."'";
        $result=mysqli_query($conn,$existsql);
        $numrows=mysqli_num_rows($result);
        if($numrows>0){
            $exist=true;
        }
        if($exist==false && $password!=$confirmpassword){
            $showError=true;
        }
        if($exist==false && $email!="" && $password==$confirmpassword){
            $sql="INSERT INTO `userdetail` (`srno`, `email`, `fullname`, `username`, `password`, `confirmpassword`, `date`) VALUES (NULL, '".$email."', '".$fullname."', '".$username."', '".$password."', '".$confirmpassword."', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            $showAlert=true;
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Bonheur+Royale&family=Ephesis&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Ephesis&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .form {
            margin: 35px 0px;
            height: 550px;
            width: 500px;
            /* position: absolute;
            top: 50px;
            left: 46vw; */
            font-style: Arial;
            color: aliceblue;
            background: linear-gradient(to top, rgba(70, 68, 68, 0.5)50%, rgba(70, 68, 68, 0.5)50%);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            box-shadow: rgb(104 92 92) 0px 10px 10px 0px;
        }



        .btn:hover {
            background: rgb(5, 5, 85);
            transform: scale(1.05);
        }

        .form .input {
            width: 260px;
            margin: 16px;
            padding: 11px 20px;
            border-radius: 10px;
            border:0px;
        }

        #background {
            z-index: -1;
            position: absolute;
            height: 657px;
            width: 100%;
            opacity: 0.7;
        }

        .btn {
            width: 167px;
            height: 40px;
            background: black;
            border-radius: 20px;
            font-size: 20px;
            color: white;
            border: none;
            transition: 0.4s ease;
            margin: 14px 0px;
        }

        .btn:hover {
            background: rgb(5, 5, 85);
            transform: scale(1.05);
        }

        .content {

            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .left {
            /* border: 2px solid red; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .left button {
            font-size: 34px;
            padding: 0px 35px;
            border-radius: 20px;
            color: black;
            font-family: 'Bonheur Royale', cursive;
            background-image: linear-gradient(#00ffe7, #26b1d1);
            transition: 0.5s ease;
        }

        .left button:hover {
            background-image: linear-gradient(#10f1dc);
            /* transform: scale(1.05); */
            cursor: pointer;

        }




        .left p {
            font-size: 20px;
            color: black;
            /* font-family: 'Bonheur Royale', cursive; */
            width: 500px;
        }
        body::-webkit-scrollbar {
            width: 12px;               /* width of the entire scrollbar */
          }
          
          body::-webkit-scrollbar-track {
            background: #0a0a0a;        /* color of the tracking area */
          }
          
          body::-webkit-scrollbar-thumb {
            background-color: black;    /* color of the scroll thumb */
            border-radius: 20px;       /* roundness of the scroll thumb */
            border: 3px solid #07fbe5;  /* creates padding around scroll thumb */
          }
        @media screen and (max-width:650px) {
            .left p {
                width: 100%;
            }
        }
    </style>
</head>

<body>


    <img id="background" src="images/bg1.jpeg">
    <div class="content">
        <div class="left">
            <button onclick="window.location.href='index.php'">iHealth</button>
            <p> Is and always will be the greatest investment is your health
                . Join with us and be the part of iHealth . </p>
        </div>
        <div class="form">
            <h2>Create an Account</h2>
            <form action="signup.php" method="POST">
                <input class="input" name="email" type="email" placeholder="Enter Email">
                <input class="input" name="fullname" type="text" placeholder="Enter your full name">
                <input class="input" name="username" type="text" placeholder="Make a unique username">
                <input class="input" name="password" type="password" placeholder="Enter Password">
                <input class="input" name="confirmpassword" type="password" placeholder="Re-enter Password">
                <?php
                if($showAlert){
                    echo '<h3 style="color:green;">Account Created<h3>';
                }
                if($exist){
                    echo '<h3 style="color:red;">Username already exist<h3>';
                }
                if($showError){
                    echo '<h3 style="color:red;">Password did not matched<h3>';
                }
                ?>
                <button type="submit" class="btn">Signup</button>
            </form>
            <a href="login.php" style="text-align: center; color: rgb(218, 218, 231);">
                <h3>Already have an account</h3>
            </a>
        </div>
    </div>


</body>

</html>