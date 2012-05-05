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
			<?php if (!isset($view->data->member) || is_null($view->data->member)) { ?>
            <a class="register" href="<?php echo $config["root"] ?>/register/">SIGN UP FOR FREE</a> | <a class="register" href="#">Sign in</a>
			<?php } else { ?>
			<a class="register" href="<?php echo $config["root"] ?>/#"><?php echo $view->data->member->email ?></a> | <a class="register" href="<?php echo $config["root"] ?>/members/logout">Logout</a>
			<!-- welcome <a class="register" href="<?php echo $config["root"] ?>/#"><?php echo $view->data->member->firstName ?></a> | <a class="register" href="#">Logout</a> -->
		    <?php } ?>
        </div>
    </div>
	<!--End global Header-->
</div>