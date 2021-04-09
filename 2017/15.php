<?php

function get(){
    echo <<<_HTML_
    <form method="POST" action ="$_SERVER[PHP_SELF]" name="form1">
        Enter 1st Date : <input type="text" name="year1" value="yyyy"/> /
        <input type="text" name="month1" value="mm"/> /
        <input type="text" name="day1" value="dd"/> 
        <br/><br/>
        Enter 2nd date : <input type="text" name="year2" value="yyyy"/> /
        <input type="text" name="month2" value="mm"/> /
        <input type="text" name="day2" value="dd"/> 
        <br/><br/>
        <input type="submit" value="Submit"/>
    </form>
    _HTML_;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $y1 = $_POST["year1"];
    $y2 = $_POST["year2"];
    $m1 = $_POST["month1"];
    $m2 = $_POST["month2"];
    $d1 = $_POST["day1"];
    $d2 = $_POST["day2"];

    $date1 = date_create($y1-$m1-$d1);
    $date2 = date_create($y2-$m2-$d2);
    echo $date1;
    echo "<br/>";
    echo $date2;
    echo date_diff($date1, $date2);
}else{
    get();
}

?>