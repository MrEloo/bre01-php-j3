<?php
error_reporting(E_ERROR | E_PARSE);
require('posts.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

$route = null;

if (isset($_GET["route"]) && !empty($_GET["route"])) {
    $route = $_GET["route"];
}

?>

<body>
    <?php require('layout.phtml'); ?>
</body>

</html>