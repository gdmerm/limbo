<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


<div id="main">

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
                <a class="button-continue">Continue Shopping</a>
            </div>

            <a href="#"><div class="button-checkout">Checkout</div></a>



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

<?php include("common/footer.php") ?>