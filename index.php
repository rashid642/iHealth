<?php
session_start();
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
    <title>iHealth</title>
   
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Bonheur+Royale&family=Ephesis&display=swap');

        .box {
            height: 500px;
            width:100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            /* background-image: linear-gradient(#00ffe7, #26b1d1); */
            /* background-image: url('images/bg1.jpeg'); */
            /* opacity: 0.5; */
            box-shadow: rgb(104 92 92 / 69%) 0px 10px 10px 0px;

        }

        .box img{
            position: absolute;
            /* z-index: -1; */
            width: 100%;
            overflow: hidden;
            opacity: 0.8;
            height: 30%;
        }
        .box h1 {
            font-family: 'Bonheur Royale', cursive;
            font-size: 70px;
            z-index: 2;
        }

        .box p {
            font-size: 25px;
            /* font-family: 'Ephesis', cursive; */
            z-index: 2;
        }
    </style>
    <style>
        .servicebox {
            height: 300px;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            background-image: linear-gradient(#00ffe7, #26b1d1);
            width: 80%;
            margin: 30px auto;
            border-radius: 50px;
            box-shadow: rgb(104 92 92) 0px 10px 10px 0px;
            transition: 0.2s ease;
        }
        .servicebox:hover{
            transform: scale(1.05);
        }
        .servicebox h2 {
            margin: 10px 10px;
        }

        #services h1 {
            text-align: center;
            margin: 18px 10px;
            font-size: 34px;
        }
    </style>
    
</head>

<body>

<?php require 'partials/navbar.php'?>
    <div class="content">
        <section>
            <div class="box">
                <!-- <img src="images/bg2.jpg"> -->
                <img src="images/bg1.jpeg">
                <!-- <img src="images/bg3.jpg"> -->
                <h1>iHealth</h1>
                <p>To connect the people and provide them Health Care
                    Join with us and be the part of iHealth</p>

            </div>
        </section>
        <section id="services">
            <h1>Our Services</h1>
            <div class="servicebox">
                <h2>Book Appoinments</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et cum dignissimos praesentium. Vitae
                    perspiciatis, rerum, quos ducimus nulla magnam minima inventore saepe enim deserunt error soluta.
                    Veniam voluptates necessitatibus asperiores.</p>
            </div>
            <div class="servicebox">
                <h2>Select according to reviews</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et cum dignissimos praesentium. Vitae
                    perspiciatis, rerum, quos ducimus nulla magnam minima inventore saepe enim deserunt error soluta.
                    Veniam voluptates necessitatibus asperiores.</p>
            </div>
            <div class="servicebox">
                <h2>All Categories of Doctors</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et cum dignissimos praesentium. Vitae
                    perspiciatis, rerum, quos ducimus nulla magnam minima inventore saepe enim deserunt error soluta.
                    Veniam voluptates necessitatibus asperiores.</p>
            </div>
        </section>
        <?php require 'partials/footer.html'?>
    </div>

</body>

</html>