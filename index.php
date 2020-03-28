<?php
require_once ('init/db-connection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">

    <title> Arc Kanban </title>
</head>
<body>
    <div class="content">

    <?php include('inc/msg.php') ?>

    <?php include('inc/main-menu.php') ?>

    <h1 class="title"> Welcome to </h1>
    <div id="line"> <span id="arc"> ARC </span> </div>
    <h1 class="title"> Kanban-Style <br> Management <br> Website. </h1>

    <a class="button" href="login.php"> Login </a>
    <a class="button" href="register.php"> Register </a>

    </div>

    <?php require_once('init/db-close-connection.php') ?>

    <footer> Page owned and created by: Arc Enterprise. </footer>
</body>
</html>
