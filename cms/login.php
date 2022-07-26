<?php 
require_once('../config/conn.php');
session_start();

?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>後台登入</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
    body{
        height: 100vh;
        overflow: hidden;
    }
    </style>
</head>
<body>
    <div id="login">
        <form action="./member_check.php" method="POST">
            
            <p>登入您的賺載後台帳號</p>
            <input type="text" name="username" class="mem_mail" placeholder="請輸入帳號...." required/>
            <input type="password" name="pwd" class="mem_pwd" placeholder="請輸入密碼...." required/>
            
            
            <input type="submit" class="submit-btn" value="登入" />
            <?php if(isset($_GET['msg']) && $_GET['msg']=="1"){ ?>
                <div class="error">帳號或密碼錯誤!</div>
            <?php } ?>
        </form>
    </div>'
    
</body>
</html>