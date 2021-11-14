<?php
$loggedin=false;
$drloggedin=false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin=true;
  }else if(isset($_SESSION['drloggedin']) && $_SESSION['drloggedin']==true){
    $drloggedin=true;
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
            if($loggedin|| $drloggedin){
                echo '<a href="http://localhost/iHealth/hospitallist.php">
                <li>Book Appoinment</li>
            </a>';
            }
            ?>
            <a href="http://localhost/iHealth/contactus.php">
                <li>Contact Us</li>
            </a>
        </ul>
    </div>
    <div class="fixing logsignbtn">
        <?php
        if($loggedin==false && $drloggedin==false){
            echo '<a href="http://localhost/iHealth/drlogin.php">
            <div class="logbtn">Dr. Login</div>
        </a>
        <a href="http://localhost/iHealth/login.php">
            <div class="logbtn">User Login</div>
        </a>';
        }else{
            if($drloggedin){
                echo '<a href="http://localhost/iHealth/drdashboard.php">
                <div class="logbtn">Username: '.$_SESSION['username'].'</div>
                </a>';
            }
            if($loggedin){
                echo '<a href="http://localhost/iHealth/userdashboard.php">
                <div class="logbtn">Username: '.$_SESSION['username'].'</div>
                </a>';
            }
            
        echo '<a href="http://localhost/iHealth/logout.php">
            <div class="logbtn">Logout</div>
        </a>';
        }
        ?>
        
    </div>
</nav>