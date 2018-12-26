<?php
    require_once("connDB.php");
    $user = $_POST["user"];
    $pw = $_POST["pw"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO `nmd`(user,pw,phone,email)VALUES('$user','$pw','$phone','$email')";
    mysqli_query($conn,$sql);
    header("location:login.php");
?>