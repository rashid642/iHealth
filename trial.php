<?php
echo "Today is " . date("Y.m.d") . "<br>";
// $date=date("d")+1;
// // echo "Today is " . $date . "<br>";
// $date = array("10-10-21", "10-10-21", "11-10-21");
// array_push($date,"11-10-21");
// $lastele=$date[count($date)-1];
// $count=0;
// for($i=count($date)-1;$i>=0;$i--){
//     if($lastele==$date[$i]){
//         echo "Today is " . $date[$i] . "<br>";
//     }
// }
// echo "Today is " . $date[0][0] . "<br>"; 

// function a($a){
//     return $a+1;
// }
// $b=1;

// echo "a=".a($b);

class appointment{
    public $date;
    public $month;
    public function setter($d,$m){
        $this->date=$d;
        $this->month=$m;
    }
    function showdate(){
        return $this->date;
    }
    function showmonth(){
        return $this->month;
    }
}
$a= new appointment();
$a->setter(1,2);
$tareekh= array();
array_push($tareekh,$a);
echo $tareekh[0]->showdate();
echo $tareekh[0]->showmonth();
