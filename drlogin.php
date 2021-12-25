<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    header("location: index.php");
  }
?>
<?php
require "partials/connection.php";
$showAlert=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
   
    $sql= "SELECT * FROM `drdetail` WHERE `drusername` LIKE '$username' AND `password` LIKE '$password'" ;
    $result=mysqli_query($conn,$sql);

    $num=mysqli_num_rows($result);
    if($num>=1){
        session_start();
        $_SESSION['drloggedin']=true;
        $_SESSION['username']=$username;
        header("location: drdashboard.php");
    }
    else{
        $showAlert=true;
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
            margin: 50px 0px;
            height: 400px;
            width: 400px;
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
            <p> To connect the people and provide them Health Care
                . Join with us and be the part of iHealth . </p>
        </div>
        <div class="form">
            <h2>Doctor Login</h2>
            <form action="drlogin.php" method="POST">
            <input class="input" name="username" type="text" placeholder="Enter your username">
            <input class="input" name="password" type="password" placeholder="Enter Password">
            <?php
            if($showAlert){
                echo '<h3 style="color:red;">Wrong username or password<h3>';
            }
            ?>
            <button type="submit" class="btn">Login</button>
            <form>
        </div>
    </div>


</body>

</html>