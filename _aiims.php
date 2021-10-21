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
  </style>
  
</head>

<body>
  <?php require 'partials/navbar.php'?>
  <div class="content">
    <!--OTHER LIST STARTS HERE-->
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Vivek Bahl</h1>
        </a>
        <p><b>Physiologist</b></p>
        <p>Mondays</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Rashmi Batra</h1>
        </a>
        <p><b>Cardiologist </b></p>
        <p>Tuesday And Thursday</p>
        <p>8:00AM-1:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Sanjeev Sharma</h1>
        </a>
        <p><b>Dermatologist </b></p>
        <p>Mondays and Wednesday</p>
        <p>10:00AM-2:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Anita Saxena</h1>
        </a>
        <p><b>Homopathic </b></p>
        <p>Monday-Friday</p>
        <p>10:00AM-1:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Kuldeep Gupta</h1>
        </a>
        <p><b>Plastic Surgeon </b></p>
        <p>Wednesday</p>
        <p>8:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Adil Selvam</h1>
        </a>
        <p><b>Cosmetic Surgery </b></p>
        <p>Thursday</p>
        <p>7:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1> Dr. Manisha Nanwani</h1>
        </a>
        <p><b>Cardiothoracic & Vascular Surgery </b></p>
        <p>Mondays And Fridays</p>
        <p>7:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr.Geeta Kumari</h1>
        </a>
        <p><b>Pediatrician </b></p>
        <p>Wednesday-Friday</p>
        <p>10:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Arpit Bansal</h1>
        </a>
        <p><b>Cancer Surgeon</b></p>
        <p>Monday-Wednesday</p>
        <p>8:00AM-11:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Vijay Reddy</h1>
        </a>
        <p><b>Dermatologist</b></p>
        <p>Monday-Wednesday</p>
        <p>8:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Chetan Deka</h1>
        </a>
        <p><b>Orthopaedic Surgeon</b></p>
        <p>Tuesday-Thrusday</p>
        <p>9:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Akhil Mukhopadhyaya</h1>
        </a>
        <p><b>Gastroenterologist</b></p>
        <p>Monday-Wednesday</p>
        <p>8:00AM-12:00PM</p>
      </div>
    </div>
    <div class="card">
      <div class="image"><img
          src="images/dpicon.jpg">
      </div>
      <div class="card-text">
        <a href="#">
          <h1>Dr. Rajat Ray</h1>
        </a>
        <p><b>Plastic Surgeon</b></p>
        <p>Tuesdays And Fridays</p>
        <p>9:00AM-12:00PM</p>
      </div>
    </div>
    <?php require 'partials/footer.html'?>
  </div>
</body>

</html>