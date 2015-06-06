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

<H1>Add a item to database</H1>
<?php echo validation_errors(); ?>
<?php echo form_open('item/add') ?>
<?php //echo form_open(base_url().'item/add');?>

<label for="title">Title</label>
<input type="input" name="title" /><br />

<input type="submit" name="submit" value="Add" />

</body>
</html>
