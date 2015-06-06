<?php
/**
 * Created by PhpStorm.
 * User: xeme
 * Date: 2015/6/5
 * Time: 15:52
 */
?>

<html>
<head>
    <title>Add Item</title>
</head>
<body>

<H1>Item List</H1>
<?php foreach ($item_detail as $item): ?>

    <h3><?php echo $item['id'] ?></h3>
    <h3><?php echo $item['title'] ?></h3>


<?php endforeach ?>

<h1><?php echo $rand_number; ?></h1>


</body>
</html>
