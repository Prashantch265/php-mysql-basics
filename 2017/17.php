<?php

$array = array("A" => "SUNDAY", "B" => "Monday", "C" => "Tuesday", "D" => "Wednesday", "E" => "Thursday", "F" => "Friday", "G" => "Saturday");

asort($array);

foreach ($array as $key => $value){
    echo $key . "=" .$value;
    echo "<br/>";
}

?>