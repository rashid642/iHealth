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
            <a href="http://localhost/iHealth/index.php">
                <li>Home</li>
            </a>
            <?php
            if($loggedin){
                echo '<a href="http://localhost/iHealth/hospitallist.php">
                <li>Book Appoinment</li>
            </a>
            <a href="#">
                <li>Contact Us</li>
            </a>
            <a href="#">
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
        <a href="http://localhost/iHealth/login.php">
            <div class="logbtn">User Login</div>
        </a>';
        }else{
            echo '<a href="http://localhost/iHealth/userdashboard.php">
            <div class="logbtn">Username: '.$_SESSION['username'].'</div>
        </a>
        <a href="http://localhost/iHealth/logout.php">
            <div class="logbtn">Logout</div>
        </a>';
        }
        ?>
        
    </div>
</nav>