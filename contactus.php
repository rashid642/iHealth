<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Contact Us form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- <link rel="stylesheet" href="partials/footer.css"> -->
    <link rel="stylesheet" href="partials/navbar.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Ubuntu', sans-serif;
    }

    body {
        background: turquoise;
    }

    .contact-us {
        width: 350px;
        background: #fff;
        padding: 50px;
        margin: 100px auto;
        border-radius: 30px;
        position: relative;
    }

    .title h1 {
        color: #535274;
        letter-spacing: 5px;
        margin-bottom: 25px;
        text-align: center;
    }

    .form,
    .form-items {
        width: 100%;
    }

    .form-items .input {
        width: 100%;
        margin-bottom: 12px;
        padding: 15px 40px;
        box-sizing: border-box;
        background: #ebeef1;
        border: 0px;
        outline: none;
        border-radius: 30px;
    }

    .form-items .input.message {
        height: 125px;
        border-radius: 15px;
        margin-bottom: 30px;
        padding: 15px 15px;
        resize: none;
    }

    .btn {
        background: #40e0d0;
        text-align: center;
        color: #fff;
        padding: 12px;
        border-radius: 25px;
        cursor: pointer;
    }

    .btn .fas {
        margin-left: 10px;
        font-size: 12px;
    }

    .form-items {
        position: relative;
    }

    .form-items .fas {
        position: absolute;
        top: 15px;
        left: 15px;
        color: #9a99aa
    }
    .content {
    position: relative;
    top: 0px;
    }
</style>

<body>
<?php require 'partials/navbar.php'?>
<div class="content">
    <br>
    <div class="contact-us">
        <div class="title">
            <h1>Contact Us</h1>
        </div>
        <div class="form">
            <div class="form-items">
                <input type="text" class="input" placeholder="Username">
                <i class="fas fa-user"></i>
            </div>
            <div class="form-items">
                <input type="text" class="input" placeholder="Email">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="form-items">
                <textarea class="input message" cols="30" rows="10" placeholder="Message    "></textarea>
            </div>
        </div>

        <div class="btn">
            Submit
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
    </div>
</div>
</body>

</html>