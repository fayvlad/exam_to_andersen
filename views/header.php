<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Work_Task</title>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/my.css">
    <script src="<?php echo URL; ?>/public/js/bootstrap.js"></script>
</head>
<body>
<div>

</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo URL; ?>/index">Work_Task</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php Session::init(); ?>
                <?php if (Session::get('loggedIn') == false): ?>
                <li class="active"><a href="<?php echo URL; ?>/index">Home</a></li>
                <?php endif; ?>

                <?php if (Session::get('loggedIn') == true): ?>
                <li class="active"><a href="<?php echo URL; ?>/index">Home</a></li>
                <li><a href="<?php echo URL; ?>/logout">Logout</a></li>

                <?php if (Session::get('role') == 'owner'): ?>
                <li><a href="<?php echo URL; ?>/user">Users</a></li>
                <?php endif; ?>
                <?php else: ?>
                <li><a href="<?php echo URL; ?>/login">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="starter-template">

