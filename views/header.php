<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/default.css">
    <script src="<?php echo URL; ?>/public/js/jquery.js"></script>
    <script src="<?php echo URL; ?>/public/js/custom.js"></script>
    <?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script src="' . URL . '/views/' . $js . '"></script>';
        }
    }
    ?>

</head>
<body>

<div id="header">
    <?php Session::init(); ?>
    <br>
    <?php if (Session::get('loggedIn') == false): ?>
        <a href="<?php echo URL; ?>/index">Index</a>
        <a href="<?php echo URL; ?>/help">Help</a>
    <?php endif; ?>
    <?php if (Session::get('loggedIn') == true): ?>
        <a href="<?php echo URL; ?>/dashboard">Dashboard</a>
        <a href="<?php echo URL; ?>/workers">Workers</a>
        <?php if (Session::get('role') == 'owner'): ?>
            <a href="<?php echo URL; ?>/user">Users</a>
        <?php endif; ?>
        <a href="<?php echo URL; ?>/dashboard/logout">Logout</a>
    <?php else: ?>
        <a href="<?php echo URL; ?>/login">Login</a>
    <?php endif; ?>


</div>

<div id="content"></div>
