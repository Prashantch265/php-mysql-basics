<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once "../dbConnect.php"?>

    <table style="border: 1px solid; border-collapse: collapse">
        <tr>
            <td>S.N</td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>Last Name </td>
            <td>Age</td>
            <td>Actions</td>
        </tr>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $i = 0;
            while($row = mysqli_fetch_array($result)){
                $i++;
                ?>
                <tr>
                    <td> <?php echo $i; ?> </td>
                    <td> <?php echo $row['fname']; ?> </td>
                    <td> <?php echo $row['mname']; ?> </td>
                    <td> <?php echo $row['lname']; ?> </td>
                    <td> <?php echo $row['age']; ?> </td>
                    <td> <a href="delete.php?id=<?php $row['id']; ?>"> Delete </td>
                </tr>
            <?php }
        }?>
        </table>
        <?php mysqli_close($conn); ?>
</body>
</html>