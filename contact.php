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
    <title>GreenCafe Contact</title>
</head>


<body>
    <!-- HOME -->
    <div id="contact" class="thin-background">
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
                    <li><a href="menu.php">MENU</a></li>
                    <li><a id="selected" href="contact.php">CONTACT</a></li>
                </ul>
            </nav>

        </header>
        <div class="content wrapper">
            <h2 class="page-title">Contact</h2>
        </div>

    </div>

    <div class="form">
        <div class="wrapper">
            <div class="page-titles">
            
            <p id="exp">以下のフォームからお問い合わせください。</p>
            </div>
            <form action="#">
                <div class="input">
                    <div class="your-info">
                        <div class="form-group nameInput">
                            <label for="name">お名前</label>
                            <input type="text" id="name" name="your-name" placeholder="山田太郎">
                        </div>

                        <div class="form-group emailInput">
                            <label for="email">メールアドレス</label>
                            <input type="email" id="email" name="your-email" placeholder="greencafe@sample.jp">
                        </div>
                        <div class="form-group emailInput">
                            <label for="reemail">メールアドレス(確認用)</label>
                            <input type="email" id="reemail" name="your-email" placeholder="greencafe@sample.jp">
                        </div>

                        <div class="form-group phonNumInput">
                            <label >お電話番号</label>
                            <input type="phonNum" id="phonNum" name="your-phonNum" placeholder="000-0000-0000">　
                        </div>
                    </div>

                    <div class="form-group messageInput">
                        <label for="name">お問い合わせ内容</label>
                        <textarea name="message" name="your-message"></textarea>
                    </div>

                </div>
                <div class="btn">
                <div class="submitBtn">
                <input type="submit" class="button" value="送信">
                </div>
            </form>
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