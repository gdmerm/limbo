<!DOCTYPE html>
<html>

<head>
    <title>Limbo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $config["assets"] ?>/css/limbo.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $config["assets"] ?>/css/register.css"/>
</head>

<body>

<!--Start Global Header-->
<div id="global-header">
    <div class="content">
        <div class="logo">
            <a href="<?php echo $config["root"] ?>"><img border="0" src="<?php echo $config["assets"] ?>/images/logo.jpg" alt="LIMBO"></a>
        </div>
        <a href="<?php echo $config["root"] ?>" class="header-item-active">STORE</a>
        <a href="<?php echo $config["root"] ?>/news/" class="header-item">NEWS</a>
        <a href="<?php echo $config["root"] ?>/about" class="header-item">ABOUT</a>
        <a href="<?php echo $config["root"] ?>/support" class="header-item">SUPPORT</a>
        <div class="global-actions">
            <a class="register" href="<?php echo $config["root"] ?>/register/">SIGN UP FOR FREE</a> | <a class="register" href="#">Sign in</a>
        </div>
    </div>
	<!--End global Header-->
</div>