<?php

//indexed arrays
$student = ['prashant', 'ashim', 'ujjol'];

echo $student[2];

echo '<br/>';

$subject = array('DSA', 'PHP', 'DBMS');

echo $subject[0];

echo '<br/>';

$age = [19, 21, 19]; 
//echo needs char or string conversion
//prints array in readable format
print_r($age);

echo '<br/>';

//overriding
$age[1] = 22;
echo $age[1];

echo '<br/>';

//no index than add into last index
$age[] = 18;
print_r($age);

echo '<br/>';

//add into last
array_push($age, 20);
print_r($age);

echo '<br/>';

//merge array
$merge_array = array_merge($student, $subject);
print_r($merge_array);

echo '<br/>';

//associative arrays
$days = ['sun'=>'sunday', 'mon'=>'monday', 'tue'=>'tuesday'];
echo $days['sun'];
print_r($days);

echo '<br/>';

$district = array('ktm'=>'kathmandu','bkt'=>'bhaktaour', 'lt'=>'lalitpur');

//add into associative array
$days['wed'] = 'wednesday';
print_r($days);

echo '<br/>';

//count elements
echo count($days);
?>