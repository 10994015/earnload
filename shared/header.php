
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<header id="header">
    <a href="../"><img src="../images/logo.png"></a>
    <ul id="nav">
        <a href="../web/news.php">最新消息</a>
        <a href="../web/newbie.php">新手指南</a>
        <a href="../web/register.php">會員申辦</a>
        <a href="../#task">任務專區</a>
        <a href="../web/rank.php">排行榜</a>
        <a href="../web/customer.php">聯繫客服</a>
        <?php if(isset($_SESSION['name'])){ ?>
            <a href="../web/logout.php">登出</a>
        <?php }else{ ?>
            <a href="../web/login.php">登入</a>
        <?php } ?>
    </ul>
    <i class="fas fa-bars" id="menu"></i>
</header>

<script src="../js/header.js"></script>