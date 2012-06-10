<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


<div id="main">

	<div id="main-content">

		<!-- Left column-->
		<div class="leftcolumn">

			<div class="game-name"><?php echo $view->data->product->name ?></div>

			<div id="upcoming">
				<div class="upcoming-content nivoslider">
					<img
						border="0"
						class="slideshow-capsule-image"
						src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $view->data->product->productid?>/1.jpeg"
					/>
				</div>
			</div>

			<div class="game-purchase-wrapper">
				<div class="game-purchase">
					<h1>BUY <?php echo $view->data->product->name ?></h1>
					<div class="game-purchase-button">
						<div class="game-purchase-price"><span>49,99&euro;</span>
							<div class="btn-addtocart">
								<a href="<?php echo $config["root"] ?>/cart/add?id=<?php echo $view->data->product->productid ?>">ADD TO CART</a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="game-description">
				<h2>Game Description</h2>
				<div class="line"></div>
				<p><?php echo $view->data->product->description ?></p>
			</div>

		</div>
		<!-- End Left column-->

		<!--Right column-->
		<div class="rightcolumn">
			<div class="game-information-tab">
				<div class="game-information">Game Information</div>
			</div>
			<div class="details-block">
				<ul>
					<li>Title: <span><?php echo $view->data->product->name ?></span></li>
					<li>Genre: <span><?php echo $view->data->product->genre ?></span> </li>
					<li>Publisher: <span><?php echo $view->data->product->publisher ?></span> </li>
					<li>Studio: <span><?php echo $view->data->product->studio ?></span> </li>
					<li>Release Date: <span>
                                       <?php
						$rdate = new DateTime($view->data->product->releaseDate);
						echo $rdate->format('m-d-Y');
						?>
                                      </span>
					</li>
					<li class="last">Languages : <span><?php echo $view->data->product->languages ?></span></li>
				</ul>
			</div>
		</div>
		<!--End Right Column-->

		<div class="clear"></div>
	</div>

</div>

<?php include("common/footer.php") ?>