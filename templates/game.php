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

                    <div class="cart-game">
                        <div class="cart-game-price discount">
                            <div class="original-price">49,99&euro;</div>
                            <div class="final-price">10&euro;</div>
                        </div>
                        <div class="cart-game-image">
                            <a href="#"><img src="<?php echo $config["assets"] ?>/images/thumbs/30/tiny.jpg"></a>
                        </div>
                        <div class="tab-games-desc">
                            <a href="#"><h4><?php echo $view->data->product->name ?></h4></a>
                            <div class="genre-release">
                                <?php echo $view->data->product->genre ?> - Available : <span>
                                <?php
                                $rdate = new DateTime($view->data->product->releaseDate);
                                echo $rdate->format('m-d-Y');
                                ?>
                                </span>
                            </div>
                        </div>
                    </div>

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