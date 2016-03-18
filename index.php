<?php  include('php/function.php'); ?>

<!DOCTYPE html>
<html lang="en" <?php suiAttr(); ?>  >
<head>
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sui.css" rel="stylesheet">

    <meta charset="UTF-8">
    <title>Sui</title>
</head>
<body>
<!-- HEADER -->
<header>
    <nav class="navbar ">
        <ul class="nav">
            <li class="nav-item">
                <?php suiBtn('sidebar'); ?>
                <?php suiBtn('footer'); ?>
                <?php suiBtn('quickbar'); ?>
            </li>
        </ul>
    </nav>
</header>
<!-- HEADER -->
<div class="sui-default">
    <h2>Container</h2>
    <?php lorem() ?>
    <?php lorem() ?>
    <?php lorem() ?>
    <?php lorem() ?>
    <?php lorem() ?>
    <?php lorem() ?>
</div>
<div class="sui-sidebar">
    <div class="sui-sidebar-body">
        <h2>Sidebar</h2>
        <?php lorem() ?>
    </div>
</div>
<div class="sui-quickbar">
    <div class="sui-quickbar-body">
        <h2>Quickbar</h2>
        <?php lorem() ?>
        <?php lorem() ?>
        <?php lorem() ?>
    </div>
</div>
<div class="sui-footer">
    <div class="sui-footer-body">
        <h2>Footer</h2>
        <?php lorem() ?>
        <?php lorem() ?>
        <?php lorem() ?>
        <?php lorem() ?>
    </div>
</div>

    <script type="text/javascript" src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./dist/js/sui.js"></script>


</body>
</html>