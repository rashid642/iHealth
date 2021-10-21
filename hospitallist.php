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
            color: black;
            background: linear-gradient(#00ffe7, #26b1d1);
            padding: 10px 10px;
            font-family: Arial;
            border-radius:20px;
        }

        .box #list{

            background: linear-gradient(#00ffe7, #2ac2e4);
            width: 500px;
            height: 480px;
            padding: 10px 10px;
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
        .box #list .listitem :hover {

            background: linear-gradient(#339b90, #54b6cc);
            border-radius:10px;
            padding: 10px 10px;
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
                <p><a href="_cityhospital.php" style="color: black;">City Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="_aiims.php" style="color: black;">AIIMS</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: black;">Apollo Speciality Hospital</a></p>
            </li>
            
            <li class="listitem">
                <p><a href="#" style="color: black;">Malar Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: black;">Jaslok Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: black;">Maxcure Suyosha Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: black;">Mittal Hospital</a></p>
            </li>
            <li class="listitem">
                <p><a href="#" style="color: black;">Shree Hospital</a></p>
            </li>
        </ul>
    </div>
    <?php require 'partials/footer.html'?>
</div>
</body>

</html>