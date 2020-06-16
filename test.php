<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="food">
        <h2>フードメニュー</h2>

        <?php
        require('dbconnect.php');
        $menuCategories = array('salad', 'main', 'desert', 'drink');
        foreach ($menuCategories as $menuCategory) : ?>
            <?php
            $sql = 'SELECT * FROM menus WHERE category = ' . "'" . $menuCategory . "'";
            $foodMenus = $db->query($sql);
            ?>

            <?php while ($foodMenu = $foodMenus->fetch()) : ?>
                <a href="#">
                    <div class="food-salad">
                        <img src="images/<?php print($foodMenu['link']); ?>"></img>
                        <p><?php print($foodMenu['name']); ?></p>
                        <p>￥<?php print($foodMenu['price']); ?></p>
                    </div>
                </a>
            <?php endwhile ?>
            <hr>
        <?php endforeach ?>
    </div>




</body>

</html>