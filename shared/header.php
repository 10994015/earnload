
<header id="header">
    <a href="../"><img src="../images/logo.png"></a>
    <ul id="nav">
        <a href="javascript:;">官網資訊</a>
        <a href="javascript:;">新手教學</a>
        <a href="javascript:;">最新消息</a>
        <a href="javascript:;">會員申請</a>
        <a href="javascript:;">任務專區</a>
        <a href="javascript:;">排行榜</a>
        <a href="javascript:;">客服服務</a>
        <?php if(isset($_SESSION['name'])){ ?>
            <a href="../web/logout.php">登出</a>
        <?php }else{ ?>
            <a href="../web/login.php">登入</a>
        <?php } ?>
    </ul>
    <i class="fas fa-bars" id="menu"></i>
</header>