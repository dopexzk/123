<?php
    require_once("connDB.php");
    $name = $_POST["user"];
    $pw = $_POST["pw"];
    $phone = $_POST["phone"];
    $mail = $_POST["email"];
    $id = $_POST["id"];
    $sql = "UPDATE `nmd` SET 
        name = '$user',
        password = '$pw',
        phone = '$phone',
        email = '$mail'
        WHERE id = ".$id;
    mysqli_query($conn,$sql);
    header("location:login.php");
?> 