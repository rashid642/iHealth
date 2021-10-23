<?php
session_start();
if((!isset($_SESSION['loggedin'])) && (!isset($_SESSION['drloggedin']))){
    header("location: login.php");
  }
?> 
<?php
    
    if(isset($_POST['bookappointment'])){
        $drusername=$_POST['drusername'];
        class appoinment{
            public $day;public $month;public $year;
            public $hour;public $min;
            function __construct($day,$month,$year,$hour,$min){
                $this->day=$day;
                $this->month=$month;
                $this->year=$year;
                $this->hour=$hour;
                $this->min=$min;
            }
            function setnextday(){
                if($this->day==31 || $this->day==30){
                    if($this->month==12){
                        $this->month=1;
                        $this->year++;
                        $this->day=1;
                    }
                    else if(($this->month==1 || $this->month==3 ||$this->month==5 ||$this->month==7 ||$this->month==8 ||$this->month==10) && $this->day==31){
                        $this->month++;
                        $this->day=1;
                    }else if(($this->month==2 || $this->month==4 ||$this->month==6 ||$this->month==9 ||$this->month==11) && $this->day==30){
                        $this->month++;
                        $this->day=1;
                    }
                }else{
                    $this->day++;
                }
            }
            function setnexttime(){
                $this->min+=15;
            }
        }
        include "partials/connection.php";
    
        $todayday=date("d");
        $todaymonth=date("m");
        $todayyear=date("y");
        $app = new appoinment($todayday,$todaymonth,$todayyear,00,00);
        $app->setnextday();
    
        $sql="SELECT * FROM `appointments` WHERE `drusername` LIKE '".$drusername."' AND `day` >= ".$app->day." AND `month` = ".$app->month." AND `year` = ".$app->year."";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
    
        $list=array();
    
        while($detail=mysqli_fetch_assoc($result)){
            $app = new appoinment($detail['day'],$detail['month'],$detail['year'],$detail['hour'],$detail['min']);
            array_push($list,$app);
        }
        for($i=0;$i<$num;$i++){
            echo $list[$i]->day."-".$list[$i]->month."-".$list[$i]->year." ".$list[$i]->hour.":".$list[$i]->min."<br>";
        }
        if($num==4){
            $list[$num-1]->setnextday();
            $sql="INSERT INTO `appointments` (`srno`, `username`, `drusername`, `currenttime`, `day`, `month`, `year`, `hour`, `min`) VALUES (NULL, '".$_SESSION["username"]."', '".$drusername."', current_timestamp(), '".$list[$num-1]->day."', '".$list[$num-1]->month."', '".$list[$num-1]->year."', '10', '00')";
            $result=mysqli_query($conn,$sql);
            echo "appoinment set to next day";
        }
        else if($num==0){
            $sql="INSERT INTO `appointments` (`srno`, `username`, `drusername`, `currenttime`, `day`, `month`, `year`, `hour`, `min`) VALUES (NULL, '".$_SESSION["username"]."', '".$drusername."', current_timestamp(), '".$app->day."', '".$app->month."', '".$app->year."', '10', '00')";
            $result=mysqli_query($conn,$sql);
        }
        else{
            $list[$num-1]->setnexttime();
            if($list[$num-1]->min==60){
                $list[$num-1]->min=00;
                $list[$num-1]->setnextday();
            }
            $sql="INSERT INTO `appointments` (`srno`, `username`, `drusername`, `currenttime`, `day`, `month`, `year`, `hour`, `min`) VALUES (NULL, '".$_SESSION["username"]."', '".$drusername."', current_timestamp(), '".$list[$num-1]->day."', '".$list[$num-1]->month."', '".$list[$num-1]->year."', '10', '".$list[$num-1]->min."')";
            $result=mysqli_query($conn,$sql);
            echo "appoinment set to next 15min";
        }
    }
    header("location:http://localhost/iHealth/doctorpages/drprofile.php?drusername=$drusername");

?>