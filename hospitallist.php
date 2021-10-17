<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true){
    header("location: login.php");
  }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="partials/footer.css">
    <link rel="stylesheet" href="partials/navbar.css">
    <style>
        .body {

            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
        }
        .box{
            width: 500px;
            margin: auto;
            padding: 45px 0px;
        }
        .box h2 {

            width: 460px;
            color: white;
            background: blue;
            padding: 10px 10px;
            font-family: Arial;
            /* border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px; */
            border-radius:20px;
        }

        .box #list{

            background: rgb(5, 5, 85);
            width: 500px;
            height: 480px;
            padding: 10px 10px;
            /* border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px; */
            border-radius:30px;
            text-align: center;
            box-shadow: rgb(104 92 92) 0px 10px 10px 0px;

        }

        .box #list .listitem {
            list-style: none;
            width: 480px;
            height: 30px;
            font-size: 20px;
            color: white;
            text-align: left;
            padding-left: 10px;
            transition: 0.5s ease;
            margin: 13px 0px;
        }
        .box #list li a{
            /* text-decoration: none; */
        }
        .box #list .listitem :hover {

            background: blue;
            /* border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px; */
            border-radius:10px;
            padding: 10px 10px;
            /* transform:scale(1.05); */
            /* transition: 0.5s; */
        }
        .logo {
            font-size: 30px;
            font-family: 'Bonheur Royale', cursive;
            font-weight: 700;
        }
    </style>
</head>

<body>
<?php require 'partials/navbar.php'?>
<div class="content">
    <div class="box">
        <ul id="list">
            <h2>Hospital List</h2>
            <li class="listitem">
                <p><a href="#" style="color: white;">AIIMS</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">Apollo Speciality Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">City Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">Malar Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">Jaslok Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">Maxcure Suyosha Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">Mittal Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: white;">Shree Hospital</a></p>
            </li>
        </ul>
    </div>
    <?php require 'partials/footer.html'?>
</div>
</body>

</html>