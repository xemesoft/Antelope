<?php
/**
 * Created by PhpStorm.
 * User: xeme
 * Date: 2015/6/4
 * Time: 13:35
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<body>
<p>This is a item detail page</p>

<?php foreach ($item as $item_item): ?>

    <h3><?php echo $item_item['title'] ?></h3>

<?php endforeach ?>
</body>
</html>