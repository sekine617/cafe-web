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
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- css -->
    <!-- FA -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>GreenCafe　News</title>
</head>


<body>
    <!-- HOME -->
    <div id="news" class="thin-background">
        <header class="page-header wrapper">
            <a href="index.php"><img src="images/logo.png" alt="GreenCafeホーム" class="logo" /></a>
            <div class="head-title">
                <h1>
                    GreenCafe
                </h1>
            </div>

            <nav>
                <ul class="main-nav">
                    <li><a href="index.php">TOP</a></li>
                    <li><a id="selected" href="news.php">NEWS</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>

        </header>

        <div class="content wrapper">
            <h2 class="page-title">News</h2>
        </div>
    </div>

    <div class="news-info">
        <?php
        require('dbconnect.php');
        if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
            $page = $_REQUEST['page'];
        } else {
            $page = 1;
        }
        // if ($_REQUEST['page'] >= 0) {
        //     $page = $_REQUEST['page'];
        // } else {
        //     $page = 1;
        // }
        $start = 9 * ($page - 1);


        $articles = $db->prepare('SELECT * FROM info ORDER BY id DESC LIMIT ?, 9');
        $articles->bindParam(1, $start, PDO::PARAM_INT);
        $articles->execute();

        ?>

        <div class="article-contents">
            <?php while ($article = $articles->fetch()) : ?>
                <a href="#">
                    <div class="article-content">
                        <img src="images/<?php print($article['img']); ?>" />
                        <div class="article-text">
                            <p><?php print($article['title']); ?></p>
                            <time><?php print($article['created_at']); ?></time>
                        </div>
                    </div>
                </a>
            <?php endwhile ?>
        </div>

        <div class="pg-btns">
            <?php if ($page - 1 > 0) : ?>
                <div class="pg-btn">
                    <a href="news.php?page=<?php print($page - 1); ?>">
                        <div class="pgNum"><?php print($page - 1); ?></div>
                    </a>
                </div>
            <?php endif ?>

            <?php
            $counts = $db->query('SELECT COUNT(*) as cnt FROM info');
            $count = $counts->fetch();
            $max_page = ceil($count['cnt'] / 9);
            // print($max_page);
            ?>
            <div class="pg-btn">
                <a href="news.php?page=<?php print($page); ?>">
                    <div class="pgNum" id="selected"><?php print($page); ?></div>
                </a>
            </div>

            <?php
            if ($page < $max_page) :
            ?>
                <div class="pg-btn">
                    <a href="news.php?page=<?php print($page + 1); ?>">
                        <div class="pgNum"><?php print($page + 1); ?></div>
                    </a>
                </div>
                <?php
                if ($page - 1 == 0) :
                ?>
                    <div class="pg-btn">
                        <a href="news.php?page=<?php print($page + 2); ?>">
                            <div class="pgNum"><?php print($page + 2); ?></div>
                        </a>
                    </div>
                <?php endif ?>
                <div class="pg-btn">
                    <a href="news.php?page=<?php print($page + 1); ?>">
                        <div class="pgNum">></div>
                    </a>
                </div>
            <?php endif ?>
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