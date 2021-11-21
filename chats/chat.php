<?php
session_start();
if((!isset($_SESSION['loggedin'])) && (!isset($_SESSION['drloggedin']))){
    header("location: login.php");
  }
?> 
<?php
if($_SERVER['REQUEST_METHOD']!="GET"){
    header("location: http://localhost/iHealth/messages.php");
}
?>
<?php include "../partials/connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../partials/navbar.css">
    <link rel="stylesheet" href="../partials/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Messages</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .container{
            width: 500px;
    margin: 10px auto;
    background-image: linear-gradient(#00ffe7, #26b1d1);
    border-radius: 10px;
        }
        .messages{
                /* border: 2px solid black; */
                margin: 5px 0px;
    /* background: black; */
    border-radius: 10px;
    color: white;
    padding: 7px 9px;
    height: 450px;
    overflow-y: scroll;
        }
        .chat{
            //border: 2px solid black;
            margin: 5px 5px;
            background: black;
            border-radius: 10px;
            padding: 7px 9px;
            /* width: max-content;
            max-width: 200px;
            padding: 12px;
            margin: 5px;
            border-radius: 20px;
            overflow-wrap: break-word; */
}
        
        .name{
            font-size: 12px;
        }
        .msg{
            font-size: 20px;
        }
        .time{
            font-size: 12px;
            text-align: end;
        }
        .inner-container{
            padding: 8px 10px;
    margin: 5px 15px;
        }
        .inner-container input{
            padding: 8px 5px;
    width: 370px;
    border-radius:10px
        }
        .inner-container button{
            padding: 7px 12px;
    color: white;
    background: black;
    border-radius: 10px;
        }
    #image {
    position: fixed;
    z-index: -1;
    width: 30%;
    top: 100px;
}
/* ::-webkit-scrollbar {
            width: 0;
            background: transparent;
        } */
        @media screen and (max-width:800px) {
            .container{
                width: 100%;
            }  
        }
    </style>
</head>
<body>
    <?php require "../partials/navbar.php";?>
    <img id="image" src="../images/chat.svg">
    <div class="content">
        <?php
        $roomname=$_GET['roomname'];
        $receiver=$_GET['receiver'];
        // echo $roomname;
        ?>
        <div style="text-align: center;"><h1>Chat Room<h1></div>
        <div class="container">
            
            <div class="messages" id="msgarea">
                <!-- <div class="chat">
                    <div class="name">rashid</div>
                    <div class="msg">Hello</div>
                    <div class="time">22-10-21</div>
                </div> -->
                
            </div>
            <div class="inner-container">
            <input type="text" id="typemsg" class="typemsg" name="typemsg">
            <button id="send">send</button>
            </div>
        </div>
        <?php require '../partials/footer.html'?>
        
        <script>
        
        // function scrollSmoothToBottom ("messages") {
        //     var div = document.getElementById("messages");
        //     $('#' + messages).animate({
        //     scrollTop: div.scrollHeight - div.clientHeight
        //     }, 1100);
        // }
        // $("#messages").animate({ scrollTop: 20000000 }, "slow");

        // msgarea=document.getElementById('msgrea')
        // msgarea.scrollTop = msgarea.scrollHeight;

        // window.scrollTo(0,document.querySelector(".messages").scrollHeight);

        setInterval(runFunction,100);
        function runFunction(){
            $.post("htcont.php",{roomname:"<?php echo $roomname; ?>",username:"<?php echo $_SESSION["username"]; ?>"},
            function(data,status){
                document.getElementsByClassName('messages')[0].innerHTML=data;
                }
            )
        }

            //submit when clicked enter
            var input = document.getElementById("typemsg");

            // Execute a function when the user releases a key on the keyboard
            input.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
             // Cancel the default action, if needed
                    event.preventDefault();
                    // Trigger the button element with a click
                    document.getElementById("send").click();
                }
            });

            $("#send").click(function(){
                var clientmsg=$("#typemsg").val();
                 $.post("postingmsg.php",{
                        msg:clientmsg,
                        roomname:'<?php echo $roomname; ?>',
                        sender:'<?php echo $_SESSION['username']; ?>', 
                        receiver:'<?php echo $receiver ?>',
                    }, 
                    function(data,status){
                        document.getElementsByClassName('messages')[0].innerHTML=data;
                        $("#typemsg").val("");
                        return false;

                    });
            });
        </script>
    </div>
</body>
</html>