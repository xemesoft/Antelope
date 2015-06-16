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
    <title><?php echo $page_title ?></title>
</head>
<body>
<p>This is a item detail page</p>

<?php foreach ($item_detail as $item): ?>

    <h3><?php echo $item['title'] ?></h3>

<?php endforeach ?>
</body>
</html>