<?php

$names = ['prashant', 'ashim', 'ujjol', 'sameep'];

// for loop
for($i = 0; $i < count($names); $i++){
    echo $names[$i] . '<br/>';
}

//for each
foreach ($names as $name){
    echo $name . '<br/>';
}

//associative array
$posts = [
    ['title'=>'post1', 'author'=>'prashant', 'likes'=>30],
    ['title'=>'post2', 'author'=>'ashim', 'likes'=>29],
    ['title'=>'post3', 'author'=>'ujjol', 'likes'=>32]
];

foreach ($posts as $post){
    echo $post['author'] .':'. $post['likes'] . '<br/>';
}

// for while 
$i = 0;
while($i < count($posts)){
    echo $posts[$i]['title'] . '<br/>';
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blog</h1>
    <ul>
    <?php foreach($posts as $post) {?>

    <h2><?php echo $post['title']; ?></h2>
    <p><?php echo $post['author'] . ' likes:' . $post['likes']; ?></P>

    <?php }?>
    </ul>
</body>
</html>