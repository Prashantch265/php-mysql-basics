<?php

$str1 = 'My email is';

$str2 = 'prashantchy265@gmail.com';

$name = 'prashant';

//concat
echo $str1 . $str2;
echo '<br/>';
echo 'My name is ' . $name;
echo '<br/>';

echo '"One who knows nothing knows everything"';
echo '<br/>';

//double quote can use var interpolation
echo "My name is $name";
echo '<br/>';

//double quote use escape seq
echo "\"One who knows nothing knows everything\"";
echo '<br/>';

//string can be array
echo $name[0];
echo '<br/>';

//string length
echo strlen($name);
echo '<br/>';

//to Uppercase
echo strtoupper($name);
echo '<br/>';

//to Lowercase
echo strtolower($name);
echo '<br/>';

//replace
echo str_replace('P', 's', $name);
echo "<br/>";

echo UCwords($name);
echo "<br/>";

echo substr($name,0,3);
echo "<br/>";

echo substr($name,-5,4);
echo "<br/>";

echo strcmp("Apple", "apple");
echo "<br/>";

echo strcasecmp("Apple", "apple");
echo "<br/>";
?>