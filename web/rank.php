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
    <title>排行榜</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>

    <div id="rank">
        <img src="../images/rankTitle.png" class="rankTitle">
        <div class="rankBox">
            <div class="rankFirst">
                <div class="rankItem">RANK</div>
                <div class="rankItem">NAME</div>
                <div class="rankItem">ID</div>
                <div class="rankItem">MONEY</div>
            </div>
            <div class="rankList">
                <div class="rankItem"><img src="../images/no1.png" alt=""></div>
                <div class="rankItem">王O智</div>
                <div class="rankItem">aasd13255</div>
                <div class="rankItem">15000000</div>
            </div>
            <div class="rankList">
                <div class="rankItem"><img src="../images/no2.png" alt=""></div>
                <div class="rankItem">王O智</div>
                <div class="rankItem">aasd13255</div>
                <div class="rankItem">15000000</div>
            </div>
            <div class="rankList">
                <div class="rankItem"><img src="../images/no3.png" alt=""></div>
                <div class="rankItem">王O智</div>
                <div class="rankItem">aasd13255</div>
                <div class="rankItem">15000000</div>
            </div>
            <?php for($n=4;$n<=15;$n++){ ?>
            <div class="rankList">
                <div class="rankItem"><?php echo $n; ?></div>
                <div class="rankItem">王O智</div>
                <div class="rankItem">aasd13255</div>
                <div class="rankItem">15000000</div>
            </div>
            <?php } ?>
            
        </div>
    </div>

    <?php include_once('../shared/footer.php'); ?>
</body>
</html>