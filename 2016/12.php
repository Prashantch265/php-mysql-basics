<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "test") or die("Unable to connect");

    $sql = "SELECT * FROM products";

    $result = mysqli_query($conn, $sql);
    
    ?>
    <table style="border: 1px solid; border-collapse: collapse">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Size</th>
        </tr>
        <?php 
        $rows = mysqli_num_rows($result);
        if($rows > 0){
            while($rows == mysqli_fetch_asso($result)){
                ?>
                <tr>
                    <td>
            }
        }
</body>
</html>