<?php require('dbconnect.php');
$lunchMenus = $db->query('SELECT * FROM menus WHERE "category == food" DESC');
?>

<?php while ($lunchMenu = $lunchMenus->fetch()) : ?>
    <a href="#">
    <div class="lunch">
        <img href="images/<?php print($lunchMenu['link']); ?>"></img>
        <p><?php print($lunchMenu['name']); ?></p>
        <p><?php print($lunchMenu['price']); ?></p>
    </div>
    </a>
<?php endwhile ?>
