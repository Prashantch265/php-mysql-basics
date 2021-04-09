<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tr td,th{
        border: 1px solid;
    }
    </style>
</head>
<body>
<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Unable to connect");

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);

?>

<table style="border: 1px solid; border-collapse: collapse;">
    <tr>
        <th>Id</th>
        <th>Product name</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Size</th>
    </tr>
    <?php if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['id']; ?> </td>
        <td><?php echo $row['product_name']; ?> </td>
        <td><?php echo $row['category']; ?> </td>
        <td><?php echo $row['brand']; ?> </td>
        <td><?php echo $row['size']; ?> </td>
    </tr>
    <?php } 
} else{?>
    <tr><td colspan="5"> Nothing to show <td></tr>
<?php } ?>
</table>
<?php mysqli_close($conn);?>
</body>
</html>
