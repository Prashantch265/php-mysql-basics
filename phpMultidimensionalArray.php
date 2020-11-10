<?php

//indexed array
$post = [
    ['post1', 'prashant', 30],
    ['post2', 'ashim', 29],
    ['post3', 'ujjol', 32]
];

print_r($post);
echo '<br/>';
print_r($post[1]);
echo '<br/>';
print_r($post[0][2]);

//associative array
$post = [
    ['title'=>'post1', 'author'=>'prashant', 'likes'=>30],
    ['title'=>'post2', 'author'=>'ashim', 'likes'=>29],
    ['title'=>'post3', 'author'=>'ujjol', 'likes'=>32]
];

echo $post[2]['likes'];
echo '<br/>';

$post[] = ['title'=>'post4', 'author'=>'sameep', 'likes'=>36];
print_r($post);
echo '<br/>';

// pop last element from array
$removed = array_pop($post);
print_r($removed);
?>