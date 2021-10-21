<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!=true){
    header("location: login.php");
  }
?> 
<?php
include "partials/connection.php";
$drusername=$_POST['drusername'];
$username=$_POST['username'];
$review=$_POST['review'];

$sql="CREATE TABLE `ihealth`.`reviews` ( `srno` INT NOT NULL AUTO_INCREMENT , `drusername` VARCHAR(20) NOT NULL , `username` VARCHAR(20) NOT NULL , `review` VARCHAR(50) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`srno`)) ENGINE = InnoDB";
$result=mysqli_query($conn,$sql);

$sql="INSERT INTO `reviews` (`srno`, `drusername`, `username`, `review`, `date`) VALUES (NULL, '".$drusername."', '".$username."', '".$review."', current_timestamp());";
$result=mysqli_query($conn,$sql);

header("location:http://localhost/iHealth/doctorpages/drprofile.php?drusername=$drusername");
?>