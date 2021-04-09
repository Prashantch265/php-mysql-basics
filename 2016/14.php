<?php

$file = fopen("d:/Assignment/2016_14.txt", "w") or die("Can't create file");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form1">
        Enter the string: <textarea name="cmnt" rows="4" cols="50">
  At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
  </textarea>
        <br/><br/>
        <input type="submit" value="Submit"/>
    </form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        fwrite($file, $_POST["cmnt"]);
    }
    fclose($file);
?>
</body>
</html>