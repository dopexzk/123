<?php
    require_once("connDB.php");
    session_start();
 
    if($_POST["user"] == "" || $_POST["pw"] == ""){
        // echo "請輸入帳號密碼";
        header("location:login.php?errcode=0");
    }else{
        // if(isset($_POST["user"]) && isset($_POST["pw"])){
            $user = $_POST["user"];
            $pw = $_POST["pw"];

            $sql = "SELECT * FROM `nmd` WHERE user='$user'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            if($pw == $row["pw"]){
                //密碼正確
                echo "success";
                $_SESSION["user"] = $row["user"];
                $_SESSION["level"] = $row["level"];

                if($_SESSION["level"] == 0){
                    header("location:admin.php");
                }else{
                    header("location:members.php");
                }
            }else{
                header("location:login.php?errcode=1");
            }
    }
?>