<!-- 管理者 -->

<?php
//admin
    require_once("connDB.php");
    session_start();

    if($_SESSION["level"]!=0 || !isset($_SESSION["level"])){
        header("Location:login.php?errcode=3");
    }else{

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="xu06vu04-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
        <style>
        *{
            box-sizing: border-box;
        }
        html,body,h1,h2,h3,h4,h5,h6,img,ul,li,a,div,span{
            margin: 0;
            padding: 0;
            border: 0;
        }
        body{
            background-color: rgba(241, 241, 241, 0.473);
        }
        a{
        text-decoration: none;
        color: black;
        }
        a:hover{
            color: blue;
        }
        li{
            list-style: none;
        }
        img{
            width: 100%;
            vertical-align: top;
        }
        .btn{
            display: inline-block;
            padding: 8px 115px;
            background-color: rgb(138, 175, 255);
            color: #fff;
            border-radius: 7px;
            border: 2px solid rgb(138, 175, 255);
        }
        .btn:hover{
            background-color: #fff;
            color: rgb(138, 175, 255);
        }
        .clearfix::after{
            content: "";
            display: block;
            clear: both;
            width: 1500px;
            height: auto;
        }
    
    </style>
</head>
<body>
    <nav class="full-width ">
        <div class="fixed-width clearfix">
            <div class="logo">
                <a href="hamburger.html"><img src="logo.png" alt=""></a>
            </div>
            <div class="search">
                <ul>
                    <li><a href="logout.php?logout=ture">登出</a></li>
                    <li><a href="update.php">修改</a></li>
                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="kai.html" target="_blank">首頁</a></li>
                    <li><a href="Blog.html" target="_blank">網誌</a></li>
                    <li><a href="album.html" target="_blank">相簿</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <h1>管理者</h1>
    <div><?php echo $_SESSION["user"];?>您好</div>




    <footer class="full-width" id="no4">
        <div class="fixed-width clearfix">
            <div class="us col-12">
                <ul>
                    <a href="#">關於我們</a>
                    <a href="#">支援</a>
                    <a href="#">工作機會</a>
                    <a href="#">隱私</a>
                    <a href="#">語言</a>
                    <a href="#">主題標籤</a>
                    <a href="#">服務條款</a>
                    <a href="#">資料政策</a>
                    <a href="#">使用條款</a>
                    <a href="#">Cookie政策</a>
                    <p>BY &copy; 2018 ZK</p>
                </ul>
            </div>
            <!-- <div class="copy col-5"> -->

        </div>
        </div>
    </footer>
</body>
</html>