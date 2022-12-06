<?php
    include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <p>This is a paragraph</p>
    <?php if (1 == 1){ ?>
       <p>Hello World!</p>
    <?php }?>
    <p>This is a paragraph</p>

    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="oper">
            <label for="">Choose Operation</label>
            <option value="add">Add</option>
            <option value="">Subtract</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <button type="submit">Calculate!</button>
    </form>
</body>
</html>