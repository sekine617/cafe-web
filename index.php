<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="オーガニック料理を提供するGREEN Cafe, initial-scale=1.0" />
<link rel="icon" href="images/logo.png">
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- css -->
    <!-- FA -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>GreenCafeホーム</title>
</head>


<body>
    <!-- HOME -->
    <div id="home" class="background">
        <header class="page-header wrapper">

            <a href="index.php"><img src="images/logo.png" alt="GreenCafeホーム" class="logo" /></a>
            <div class="head-title">
            <h1>
                GreenCafe
            </h1>
            </div>

            <nav>
                <ul class="main-nav">
                    <li><a id="selected" href="index.php">TOP</a></li>
                    <li><a href="news.php">NEWS</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>

        </header>

        <div class="content wrapper">
            <h2 class="page-title">Healthy Life</h2>
            <p>
                オーガニックフードで心も体も健康に。
            </p>

        </div>
    </div>

    <div class="main">
        <div class="explain">
            <h2>GREEN　Cafe</h2>
            <p>厳選されたオーガニック食材を使い、心と体が健康になる料理やスイーツを提供しています。<br>
                季節の素材を使い季節を味わえるメニューを作っています。<br>
                日々の疲れをGREEN Cafeで癒し、最高の時をお過ごしください。<br>
            </p>


        </div>

        <div id="recommend-menu">
            <div class="menu-header">
                <h2>おすすめメニュー</h2>
            </div>
            <div class="menu-items">

                <div class="menu-item">
                    <a href="#">
                        <img class="menu-img" src="images/menu01.jpg" alt="">
                        <p>GREEN サラダ</p>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="#">
                        <img class="menu-img" src="images/menu08.jpg" alt="">
                        <p>ホタテとブロッコリーのアヒージョ</p>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="#">
                        <img class="menu-img" src="images/menu09.jpg" alt="">
                        <p>シャインマスカットタルト</p>
                    </a>
                </div>
            </div>
            <div class="btn-box">
                <a href="menu.php">
                    <div class="btn">
                        <p>メニューへ</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="late-news">
            <h2>
                新着情報
            </h2>

            <?php
            require('dbconnect.php');
            $titles = $db->query('SELECT * FROM info ORDER BY id DESC LIMIT 0, 5');
            ?>

            <?php while ($title = $titles->fetch()) : ?>
                <a href="#">
                    <div class="info">
                        <time><?php print($title['created_at']); ?></time>
                        <p><?php print($title['title']); ?></p>
                    </div>
                </a>
            <?php endwhile ?>

        </div>
    </div>

    <footer>
        <div class="footer">
            <div class="line">
                <div class="sns">
                    <div class="icon">
                        <p>SNS</p>
                        <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
                <nav>
                    <ul class="footer-nav">
                        <li><a href="index.php">TOP</a></li>
                        <li><a href="news.php">NEWS</a></li>
                        <li><a href="menu.php">MENU</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <p class="copy"><small>&copy; 2020 GREEN Cafe</small></p>
        </div>
    </footer>
</body>

</html>