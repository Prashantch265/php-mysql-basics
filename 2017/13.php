<?php

$data = array('name' => "Prashant", 'address' => "Bhaktapur", 'age' => "19", 'gender' => "Male");

$file = fopen("d:/Assignment/profile.csv", "w") or die("Cannot create file");

fputcsv($file, $data);

fclose($file);

?>