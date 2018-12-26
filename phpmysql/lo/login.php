<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入</title>
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
                <a href="kai".html"><img src="logo.png" alt=""></a>
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
    <?php if(!isset($_SESSION["user"])){ ?>
        <div class="full-width" id="no1">
        <div class="fixed-width clearfix">
            <form action="auth.php" method="post">
                <div class="col-12">
                    <a href="kai.html"><img src="logo.png" alt=""></a>
                    <div class="z1"><input type="text" name="user" id="zz" placeholder="輸入帳號" size="35" style="height: 35px; background-color: rgba(241, 241, 241, 0.473);"></div>
                    <div class="z2"><input type="password" name="pw" id="zz" placeholder="輸入密碼" size="35" style="height: 35px; background-color: rgba(241, 241, 241, 0.473)"></div>
                    <input type="submit" class="btn" value="登入">
                    <div class="errcode">
                        <?php
                        if(isset($_GET["errcode"])) {
                            switch($_GET["errcode"]){
                                case 0:
                                    echo "請輸入帳號密碼"; 
                                    break;
                                case 1:
                                    echo "帳號或密碼錯誤"; 
                                    break;
                                case 2:
                                    echo "請登入會員"; 
                                    break;
                                case 3:
                                    echo "拒絕存取"; 
                                    break;
                            }
                        }
                        ?>
                    </div>
                    <p>————————或————————</p><br>
                    <a href="https://myaccount.google.com/" class="RR" target="_blank">
                        <i class="fab fa-google-plus-square"></i>使用Google登入
                    </a>
                    <div class="ro"></div><br>
                    <a href="greate.php" class="rr" target="_blank">忘記密碼?</a>
                </div>
        </div>
    </div>
    <div class="full-width" id="no2">
        <div class="fixed-width clearfix">
            <div class="col-12">
                <h4>沒有帳戶? <a href="greate.php" target="_blank">註冊</a></h4>
            </div>
        </div>
    </div>
    <div class="full-width" id="no3">
        <div class="fixed-width clearfix">
            <div class="col-12">
                <p>下載應用</p>
            </div>
            <div>
                <div class="col-4 soft">
                    <a href="#"><i class="fab fa-apple-pay fa-3x"></i></a>
                </div>
                <div class="col-4 soft">
                    <a href="#"><i class="fab fa-google-plus-square fa-3x"></i></a>
                </div>
                <div class="col-4 soft">
                    <a href="#"><i class="fab fa-microsoft fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php }else{ ?>
        <div><?php echo $_SESSION["user"];?>您好</div>
        <a href="members.php">會員專區</a>
        <a href="logout.php?logout=ture">登出</a>
    <?php } ?>

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