<?php
// comparisons & booleans (true or false)
    echo true; // echo's "1"
    echo '<br/>';
	echo false; // echo's ""
    echo '<br/>';
    
	// numbers
    echo 5 < 10;
    echo '<br/>';
    echo 5 > 10;
    echo '<br/>';
    echo 5 == 10;
    echo '<br/>';
    echo 10 == 10;
    echo '<br/>';
    echo 5 != 10;
    echo '<br/>';
    echo 5 <= 5;
    echo '<br/>';
    echo 5 >= 5;
    echo '<br/>';

	// strings
    echo 'shaun' < 'yoshi';
    echo '<br/>';
    echo 'shaun' > 'yoshi';
    echo '<br/>';
    echo 'shaun' > 'Shaun';
    echo '<br/>';
    echo 'mario' == 'mario';
    echo '<br/>';
    echo 'mario' == 'Mario';
    echo '<br/>';

	// loose vs strict equal comparison

    echo 5 == '5'; //loose doesnt consider data type so true
    echo '<br/>';
    echo 5 === '5'; //strict consider data type so false
    echo '<br/>';
    echo 5 === 5;
    echo '<br/>';

    echo true == 1;
    echo '<br/>';
	echo true === 1;
?>