<?php
session_start();
if(!isset($_SESSION['drloggedin']) && $_SESSION['drloggedin']!=true){
    header("location: login.php");
  }
?> 
<?php
    require "partials/connection.php";
    $sql= "SELECT * FROM `drdetail` WHERE `drusername` LIKE '".$_SESSION['username']."'" ;
    $result=mysqli_query($conn,$sql);
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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title><?php echo $_SESSION['username']?></title>
    <style>
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
            height: 300px;
            margin: 26px 70px;
            text-align:center;
            overflow-y:scroll;
        }
        .appointmentList{
            margin: 10px;
        }
        #image {
            position: fixed;
            z-index: -1;
            width: 30%;
            top: 350px;
        }
        #viewmsg{
            color: blue;
            margin: 10px;
        }
        footer{
            width: 100%;
        }
    </style>
</head>
<body>
<?php require 'partials/navbar.php'?>
<!-- <img id="image" src="images/collaborate.svg"> -->
    <div class="content">
        <div class="container">
        <img src="images/dpicon.jpg">
        <div class="userdetail">
            <?php
            $detail=mysqli_fetch_assoc($result);
            echo "<h3>Name: ".$detail['fullname']."</h3>
            <h3>Speciality: ".$detail['speciality']."</h3>
            <h3>Username: ".$detail['drusername']."</h3>";
            ?>
            <a id="viewmsg" href="http://localhost/iHealth/messages.php">View Messages</a>
        </div>
        </div>
        <div class="appointment">
            <h1>Your Appoinments</h1>
            <hr>
            <?php
                // $sql="SELECT * FROM `appointments` WHERE `drusername` LIKE '".$detail['drusername']."'";
                // $result=mysqli_query($conn,$sql);
                // $num=mysqli_num_rows($result);
                // while($row=mySqli_fetch_assoc($result)){
                //         echo '<div class="appointmentList">You have appointment with '.$row["username"].' on '.$row["day"].'-'.$row["month"].'-'.$row["year"].' at '.$row["hour"].':'.$row["min"].'AM</div>';
                // }
                // if($num==0){
                //     echo '<div class="appointmentList">You have no Appointments</div>';
                // }
            ?>
            <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * FROM `appointments` WHERE `drusername` LIKE '".$detail['drusername']."'";
                    $sno = 0;
                    $resultRow = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($resultRow)){
                    $sno = $sno + 1;
                    echo ' <tr>
                    <th scope="row">'.$sno.'</th>
                    <td>'.$row["username"].'</td>
                    <td>'.$row["day"].'-'.$row["month"].'-'.$row["year"].'</td>
                    <td>'.$row["hour"].':'.$row["min"].'AM</td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
        <script>
            let edits=document.getElementsByClassName('edit');
            Array.from(edits).forEach(element=>{
                element.addEventListener("click",(e)=>{
                    console.log("edit",e.target);
                })
            })
    </script>
        <?php require 'partials/footer.html'?>
    </div>
</body>
</html>