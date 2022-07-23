<?php 
require_once('./config/conn.php');
session_start();

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>賺載</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <?php if(isset($_SESSION['name'])){ ?>
        <input type="hidden" id="userTure" value="1">
    <?php }else{?>
        <input type="hidden" id="userTure" value="0">
    <?php } ?>
    <header id="header">
        <a href="./"><img src="./images/logo.png"></a>
        <ul id="nav">
            <a href="./web/news.php">最新消息</a>
            <a href="./web/newbie.php">新手指南</a>
            <a href="./web/register.php">會員申辦</a>
            <a href="./#task">任務專區</a>
            <a href="./web/rank.php">排行榜</a>
            <a href="./web/customer.php">聯繫客服</a>
            <?php if(isset($_SESSION['name'])){ ?>
            <a href="./web/logout.php" id="logout">登出</a>
            <?php }else{ ?>
            <a href="./web/login.php">登入</a>
            <?php } ?>
        </ul>
        <i class="fas fa-bars" id="menu"></i>
    </header>
    <div id="index">
        <div id="banner">
            <img src="./images/banner.png" class="bannerImg">
            <img src="./images/clickme.png" class="clickme">
        </div>
        <div id="information">
            <h2>賺載介紹</h2>
            <p>
                網路賺錢方式非常多種,但是你知道有一種方式是不用花費任何成本,可能一天只需要抽出十分鐘左
                右就能賺錢的方式嗎?這正是我這篇要介紹的網路賺錢方式:「PTC」。
                <br>
                <br>
                從21世紀初起PTC網站開始一家一家的成立。這些網站最主要的目的是讓廣告主付錢來網站上刊
                登廣告,並讓會員或瀏覽者在網站上觀看廣告,藉此達成廣告主、會員、PTC 網站三赢的局面
                <br>
                <br>
                PTC是一種網路廣告的收費計算形式，
                廣泛用在搜尋引擎、廣告網路、以及網站或部落格等網路廣告平台。
                規則是只有當使用者實際上點擊廣告以拜訪廣告主的網站時，廣告主才需要支付廣告費用。
                廣告主可以競標他們認定的目標市場對象在尋找某一種類的產品或者服務時，可能會在搜尋時輸入的關鍵字。
                當使用者鍵入關鍵字查詢與廣告主的列表匹配、或者檢視某相關內容的網頁，
                該廣告主投放的廣告就會顯示。該連結被稱為「贊助連結」或者「贊助廣告」。
                它通常出現於搜尋結果頁面的側欄（有時位於其上），或者網頁開發人員選擇的任何位置。
                <br>
                <br>
                轉載成立於2020年,從原本單純的PTC 網站(只有點擊廣告功能),
                由於大家生活習慣不斷改變，遊玩手遊成為大家打發時間或是通勤時的最佳紓壓管道
                一直到2022才取消點擊廣告的功能
                並更改為遊玩手遊的方式供用戶提供賺錢管道
            </p>
            <div class="gameList">
                <img src="./images/infor1.jpg">
                <img src="./images/infor2.jpg">
                <img src="./images/infor3.jpg">
                <img src="./images/infor4.jpg">
            </div>
        </div>
        <div id="gameType">
            <h2>遊戲類型<br>TYPE</h2>
            <div class="gameList">
                <?php for($n=1;$n<=8;$n++){?>
                <div class="gameItem">
                    <img src="./images/top<?php echo $n;?>.png" >
                    <img src="./images/bottom<?php echo $n;?>.png" class="bottom">
                </div>
                <?php } ?>
            </div>
        </div>
        <div id="task">
             <!-- 任務modeul     -->
            <input type="checkbox" id="taskchkbox">
            <input type="hidden" value="<?php echo $_SESSION['money']; ?>" id="moneyNum">
            <div id="taskModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知<i class="fas fa-times orderClose"></i></div>
                    <div class="taskbox">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                    </div>
                    <a href="javascript:;" id="taskBtn" class="disable">抽取</a>
                </div>
            </div>
            <div class="giftbox" id="gifbox">
                <img src="./images/open.png" id="opengift" class="opengift">
            </div>
            <div id="cardMoudel" class="cardModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知<i class="fas fa-times orderClose"></i></div>
                    <h4>恭喜您抽到此接單任務</h4>
                    <img src="./images/2323.png" alt="" id="card">
                    <img src="./images/card/008.png" alt="" id="cardContent">
                    <div class="boxbottom"><a href="javascript:;" id="cardBtn">確認</a></div>
                </div>
            </div>
            <div id="orderModule" class="orderModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知 <i class="fas fa-times orderClose"></i></div>
                    <h4>是否轉入點數賺取並前往任務網站<br/>點數將轉入指定網址<br/>(操作時間:5~10分鐘)</h4>
        
                    <form action="./function/send.php" method="post" class="boxbottom">
                        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                        <input type="hidden" name="mail" value="<?php echo $_SESSION['mail']; ?>">
                        <input type="submit" value="是" id="orderBtn" name="submit"><a href="javascript:;" class="orderClose">否</a>
                    </form>
                </div>
            </div>
            <div class="urlModule" id="urlModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知 <i class="fas fa-times orderClose"></i> </div>
                    任務網站:<a href="https://bit.ly/35PsoRB ">https://bit.ly/35PsoRB </a>
                </div>
            </div>
            <div class="storeModule" id="storeModule" >
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知 <i class="fas fa-times orderClose"></i> </div>
                    <h4>您的餘額為0，請先儲值!</h4>
                    <div class="boxbottom"><a href="javascript:;" class="orderClose" id="storeBtn">確認</a></div>
                </div>
            </div>
            <div id="otherModule" class="otherModule">
                <div class="back"></div>
                <div class="box">
                <div class="boxheader">通知 <i class="fas fa-times orderClose"></i> </div>
                <h4>請先至 "主線任務" 抽取任務</h4>
                <div class="boxbottom orderClose"><a href="javascript:;" id="otherBtn"">確認</a></div>
                </div>
            </div>
            <!-- 任務END-->
            <img src="./images/任務種類.png" class="taskTitle">
            <div class="taskContent" id="taskContent1">
                <img src="./images/btn2.png" class="maintaskImg2" id="mainBtn">
                <img src="./images/btn2.png" class="orderTaskBtn">
                <img src="./images/btn3.png" class="orderTaskBtn">
                <img src="./images/btn4.png" class="orderTaskBtn">
                <img src="./images/btn5.png" class="orderTaskBtn">
                <img src="./images/btn6.png" class="orderTaskBtn">
            </div>
        </div>
    </div>
    

    <?php include_once('./shared/footer.php'); ?>
    <script src="./js/header.js"></script>
    <script src="./js/earn.js"></script>
    <script>
    const video = document.getElementById('video');
    window.onload = ()=>{
        video.play();
    }
    setTimeout(()=>{
        video.play();
    },10);
    </script>
</body>
</html>