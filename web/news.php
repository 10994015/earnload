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
    <title>最新消息</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="news">
        <img src="../images/newsTitle.png" class="newsTitle">
        <div class="newsBox">
            <div class="newsFirst">
                <div class="newsItem">公告類別</div>
                <div class="newsItem">公告事項</div>
                <div class="newsItem">閱讀</div>
                <div class="newsItem">公告日期</div>
            </div>
            <?php for($n=1;$n<=10;$n++){ ?>
            <a href="./post.php" class="newsList">
                <div class="newsItem">【站內公告】</div>
                <div class="newsItem">本網站於07/23更新</div>
                <div class="newsItem"><?php echo $n+23; ?></div>
                <div class="newsItem">2022/07/23</div>
            </a>
            <?php } ?>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>