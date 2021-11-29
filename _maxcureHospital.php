<?php
session_start();
if((!isset($_SESSION['loggedin'])) && (!isset($_SESSION['drloggedin']))){
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
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu:wght@300&display=swap');

    * {
      margin: 0px;
      padding: 0px;
    }

    .image {
      width: 150px;
      height: 150px;
      margin: 10px 20px;
    }

    .card {
      width: 700px;
      margin: 20px auto;
      margin-top: 0px;
      height: 200px;
      display: flex;
      align-items: center;
      background: floralwhite;
      border-radius: 10px;
      box-shadow: rgb(104 92 92 / 47%) 0px 10px 10px 0px;
    }

    .card-text {
      margin: 0px 25px;
    }

    .card-text p {
      font-size: 20px;
      font-family: 'Ubuntu', sans-serif;
    }

    .card-text h1 {
      font-family: 'Ubuntu', sans-serif;
    }

    .image img {
      width: 150px;
      height: 150px;
      border-radius: 10px;
    }
    #image {
    position: fixed;
    z-index: -1;
    width: 50%;
    top: 100px;
    left:60%
}
  </style>
  
</head>

<body>
  <?php require 'partials/navbar.php'?>
  <img id="image" src="images/analyze.svg">
  <div class="content">
    <!--OTHER LIST STARTS HERE-->
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=adananmizwan">
          <h1>Dr. Adanan Mizwan</h1>
        </a>
        <p><b>Dermatologist</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=adarshgokhale">
          <h1>Dr. Adarsh  Gokhale</h1>
        </a>
        <p><b>Cardiothoracic & Vascular Surgery</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=vijayreddy3">
          <h1>Dr. Vijay Reddy</h1>
        </a>
        <p><b>Radiation Oncology, Medical Oncology</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=roomasinha">
          <h1>Dr. Rooma Sinha</h1>
        </a>
        <p><b>Obstetrics & Gynecology</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="http://localhost/iHealth/doctorpages/drprofile.php?drusername=ananthsanghvi">
          <h1>Dr. Ananth Sanghavi</h1>
        </a>
        <p><b>General Medicine</b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <?php require 'partials/footer.html'?>
  </div>
</body>
</html>