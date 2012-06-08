<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>
<?php include("common/naviMenu.php") ?>

<div id="main">

	<div id="main-content">
		<h2 class="cart-title">Please review your order details</h2>
		<!-- Left column-->
		<div class="leftcolumn">

			<div class="cart-area">

				<div class="cart-game-list">
					<?php
					$total = 0;
					?>
					<?php foreach($view->data->cartProducts as $product): ?>
					<div class="cart-game">
						<div class="cart-game-price discount">
							<?php if ($product->discount > 0): ?>
							<?php
							$dprice = $product->price * (1 - $product->discount/100);
							$total += $dprice;
							?>
							<div class="original-price"><?php echo $product->price ?>&euro;</div>
							<div class="final-price"><?php echo round($dprice, 2)?>&euro;</div>
							<?php else: ?>
							<div class="final-price"><?php echo $product->price ?>&euro;</div>
							<?php $total += $product->price ?>
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

					<div class="cart-game" style="background-color:#444444">
						<div class="cart-game-price">
							<div class="final-price totals"><?php echo round($total, 2) ?>&euro;</div>
						</div>
						<div class="tab-games-desc">
							<span>Total:</span>
						</div>
					</div>

				</div>

			</div>

			<div class="checkout">
				<h1 style="font-size:16px;margin-bottom:20px;">We have the following records about you</h1>
				<table width="100%" cellpadding="3" style="font-size:14px">
					<tr>
						<td>Your name:</td>
						<td><?php echo $view->data->member->firstName ?></td>
					</tr>
					<tr>
						<td>Your last name:</td>
						<td><?php echo $view->data->member->lastName ?></td>
					</tr>
					<tr>
						<td>Your email:</td>
						<td><?php echo $view->data->member->email ?></td>
					</tr>
				</table>
			</div>

			<div class="checkout">
				<a class="button-continue" href="<?php echo $config['root'] ?>">Continue Shopping</a>
			</div>

			<a href="#"><div class="button-checkout">Checkout with PayPal</div></a>



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
<?php include("components/dialog_checkout.php") ?>
<?php include("common/footer.php") ?>

<script type="text/javascript">
	$(document).ready(function () {
		$(".button-checkout").on("click", function (e) {
			var timeout;
			e.preventDefault();
			$(".dialog.checkout").modal({
				overlayClose: true,
				zIndex: 9999
			});

			//show step-2
			timeout = setTimeout(function () {
				$(".dialog.checkout .step-1").hide();
				$(".dialog.checkout .step-2").show();
			}, 3000);

			$(".dialog.checkout .amount").html($(".final-price.totals").html());
		});
	});
</script>