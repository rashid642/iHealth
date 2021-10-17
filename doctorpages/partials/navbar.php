<?php
$loggedin=false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin=true;
  }
?>
<nav id="navbar">
    <div class="fixing logo">iHealth</div>
    <div class="fixing navigation">
        <ul>
            <a href="../index.php">
                <li>Home</li>
            </a>
            <?php
            if($loggedin){
                echo '<a href="../hospitallist.php">
                <li>Book Appoinment</li>
            </a>
            <a href="#">
                <li>Contact Us</li>
            </a>
            <a href="doctorpages/rashid.php">
                <li>About Us</li>
            </a>';
            }
            ?>
            
        </ul>
    </div>
    <div class="fixing logsignbtn">
        <?php
        if(!$loggedin){
            echo '<a href="#">
            <div class="logbtn">Dr. Login</div>
        </a>
        <a href="login.php">
            <div class="logbtn">User Login</div>
        </a>';
        }else{
            echo '<a href="../userdashboard.php">
            <div class="logbtn">Username: '.$_SESSION['username'].'</div>
        </a>
        <a href="../logout.php">
            <div class="logbtn">Logout</div>
        </a>';
        }
        ?>
        
    </div>
</nav>