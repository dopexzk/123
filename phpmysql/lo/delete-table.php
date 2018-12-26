<?php
    require_once("connDB.php");

    $sql = "SELECT * FROM `nmd`";
    $result = mysqli_query($conn,$sql);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td{
            border:1px solid #000;
            border-collapse:collapse;
            padding:15px; 
        } 
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <a href="greate .php">新增一筆</a>
     <table>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>   
            <tr>
                <td><?php echo $row["user"];?></td>
                <td><?php echo $row["pw"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><a href="delete.php?id=<?php echo $row["user"];?>" onclick="return confirm('你的良心不會痛嗎?')">刪除</a></td>
                <td><a href="update.php?id=<?php echo $row["user"];?>">修改</a></td>
            </tr>
        <?php  
            }   
        ?>
     </table>
</body>
</html>