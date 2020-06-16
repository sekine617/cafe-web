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

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="script.js"></script>
    <!-- FA -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>GreenCafe　News</title>

</head>


<body>
    <!-- Menu -->
    <div id="menu" class="background">
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
                    <li><a href="news.php">NEWS</a></li>
                    <li><a id="selected" href="menu.php">MENU</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>

        </header>

        <div class="content wrapper">
            <h2 class="page-title">Menu</h2>
        </div>

    </div>


    <div class="food-menu">
        <?php
        require('dbconnect.php');
        $menuCategories = array('salad', 'maindish', 'desert', 'drink');
        foreach ($menuCategories as $menuCategory) : ?>
            <?php
            $sql = 'SELECT * FROM menus WHERE category = ' . "'" . $menuCategory . "'";
            $foodMenus = $db->query($sql);
            ?>

            <h2><?php switch ($menuCategory) {
                    case 'salad':
                        echo '<span>Salad</span><br>サラダ';
                        break;
                    case 'maindish':
                        echo '<span>Main</span><br>メイン';
                        break;
                    case 'desert':
                        echo '<span>Desert</span><br>デザート';
                        break;
                    case 'drink':
                        echo '<span>Drink</span><br>ドリンク';
                        break;
                } ?></h2>
            <div class="menu-contents <?php echo $menuCategory ?>">
                <?php while ($foodMenu = $foodMenus->fetch()) : ?>
                    <a href="#">
                        <div class="<?php echo $foodMenu['category'] ?> menu-content">
                            <img src="images/<?php print($foodMenu['link']); ?>" />
                            <div class="menu-info">
                                <p><?php print($foodMenu['name']); ?></p>
                                <p class="price">￥<?php print($foodMenu['price']); ?>　(税込￥<?php print($foodMenu['price'] * 1.1); ?>)</p>
                                <!-- <div class="More" id="<?php print($foodMenu['id']); ?>-show">詳細</div> -->
                            </div>
                        </div>
                    </a>
                <?php endwhile ?>
            </div>
        <?php endforeach ?>


        <!-- <div class="More-modal">
            <div class="modal">
                <div class="close-modal">
                    <i class="fa fa-2x fa-times"></i>
                </div>
                <div id="signup-form">
                    <img src="images/<?php print($foodMenu['link']); ?>" />
                    <div class="menu-info">
                        <p><?php print($foodMenu['name']); ?></p>
                        <p class="price">￥<?php print($foodMenu['price']); ?>　(税込￥<?php print($foodMenu['price'] * 1.1); ?>)</p>
                        <div class="More" id="<?php print($foodMenu['id']); ?>-show">詳細</div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
    <div class="white-bg">
        <p id="attention">※ 表示価格は店内飲食価格（税込）となります。本体価格に店内飲食には10％、テイクアウト価格には8％を消費税を適用しています。</p>
        <div class="btn-box">
            <a href="#">
                <div class="btn">
                    <p>テイクアウトを注文する</p>
                </div>
            </a>
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
    <script src="script.js"></script>
</body>

</html>