<?php include("configuration/config.php"); ?>
<?php $currentPage = "cart" ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<div class="wrapper">
<div id="main">

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
				<a href="<?php echo $config["root"] ?>/cart"><div class="cart-icon"><img src="<?php echo $config["assets"] ?>/images/cart.png"></div></a>
				<?php if (!isset($view->data->member) || is_null($view->data->member)) { ?>
				<a class="register" href="<?php echo $config["root"] ?>/register/">SIGN UP FOR FREE</a> | <a class="register login" href="#">Sign in</a>
				<?php } else { ?>
				<a class="register" href="<?php echo $config["root"] ?>/#"><?php echo $view->data->member->email ?></a> | <a class="register" href="<?php echo $config["root"] ?>/members/logout">Logout</a>
				<!-- welcome <a class="register" href="<?php echo $config["root"] ?>/#"><?php echo $view->data->member->firstName ?></a> | <a class="register" href="#">Logout</a> -->
				<?php } ?>
			</div>
		</div>
		<!--End global Header-->
	</div>

	<?php include("common/naviMenu.php") ?>

	<div id="main-content">
        <h2 class="cart-title">My Cart</h2>
		<!-- Left column-->
		<div class="leftcolumn">

            <div class="cart-area">

                <div class="cart-game-list">

					<?php foreach($view->data->cartProducts as $product): ?>
                    <div class="cart-game">
                        <div class="cart-game-price discount">
							<?php if ($product->discount > 0): ?>
							<?php
							$dprice = $product->price * (1 - $product->discount/100);
							?>
								<div class="original-price"><?php echo $product->price ?>&euro;</div>
								<div class="final-price"><?php echo round($dprice, 2)?>&euro;</div>
							<?php else: ?>
								<div class="final-price"><?php echo $product->price ?>&euro;</div>
							<?php endif ?>
							<a class="button-checkout delete" href="<?php echo $config['root'] ?>/cart/removeItem/?id=<?php echo $product->productid ?>">Remove</a>
                        </div>
                        <div class="cart-game-image">
                            <a href="<?php echo $config['root'] ?>/game?id=<?php echo $product->productid ?>"><img src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $product->productid ?>/tiny.jpg"></a>
                        </div>
                        <div class="tab-games-desc">
                            <a href="<?php echo $config['root'] ?>/game?id=<?php echo $product->productid ?>"><h4><?php echo $product->name ?></h4></a>
                            <div class="genre-release">
                                <?php echo $product->genre ?> - Available : <span>
                                <?php
                                $rdate = new DateTime($product->releaseDate);
                                echo $rdate->format('m-d-Y');
                                ?>
                                </span>
                            </div>
                        </div>
                    </div>
					<?php endforeach ?>

                </div>
            </div>

            <div class="checkout">
                <a class="button-continue" href="<?php echo $config['root'] ?>">Continue Shopping</a>
            </div>

            <a href="<?php echo $config['root'] ?>/checkout"><div class="button-checkout" data-hook="button-checkout">Checkout</div></a>



        </div>
		<!-- End Left column-->

		<!--Right column-->
		<div class="rightcolumn">
            <?php include("components/today_offer.php") ?>

		</div>
		<!--End Right Column-->

		<div class="clear"></div>
	</div>

</div>
</div>

<?php include("common/footer.php") ?>

<script type="text/javascript">
	var LIMBO = (function (my) {
		my.USER = {"isLogged" : <?php echo (is_null($view->data->member)) ? "false" : "true" ?>}
		return my;
	})(LIMBO || {});

	$(document).ready(function () {
		if (!LIMBO.USER.isLogged) {
			$("div[data-hook=button-checkout]").on("click", function (e) {
				e.preventDefault();
				$(".dialog.login-prompt").modal({
					overlayClose: true,
					zIndex: 9999
				});
			});
		}
	});
</script>
