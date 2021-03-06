<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>
<?php $currentPage = "genres" ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


<div id="main">

    <div id="main-content">
        <!-- Left column-->
        <div class="leftcolumn">
            <h2 class="header">UpComing Games</h2>
            <div id="upcoming">
                <div class="upcoming-content nivoslider">
					<?php for($i=0;$i<13;$i++): ?>
                    <img width="616" height="254" src="<?php echo $config["assets"] ?>/images/upcoming/<?php echo $i+1?>.jpg"/>
					<?php endfor ?>
                </div>
            </div>
        </div>
        <!-- End Left column-->


        <!--Right column-->
        <div class="rightcolumn">

			<?php include("components/today_offer.php") ?>

        </div>
        <!--End Right Column-->

        <div class="clear"></div>

        <h2 class="games-header"><?php echo $view->data->queryString->g ?> Games List</h2>
        <div class="line"></div>

        <div id="header-title">
            <div class="title">Title</div>
            <div class="game-price">Price</div>
            <div class="discount">Discount</div>
            <div class="format">Format</div>
            <div class="released">Released</div>
            <div class="clear"></div>
        </div>

        <div id="games-list">

			<?php foreach($view->data->games as $index => $game): ?>

            <a class="games-row-grey" href="<?php echo $config['root'] ?>/game?id=<?php echo $game->productid ?>">
                <div id="released-games-<?php echo ($index % 2 == 0) ? '1' : '2' ?>" class="tab-row">
                    <div class="tab-games-image">
                        <a href="<?php echo $config['root'] ?>/game?id=<?php echo $game->productid ?>"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $game->productid ?>/tiny.jpg"></a>
                    </div>
                    <div class="tab-games-desc">
                        <a href="<?php echo $config['root'] ?>/game?id=<?php echo $game->productid ?>"><h4><?php echo $game->name ?></h4></a>
                    </div>
                    <div class="tab-released">
                       <?php
							$rdate = new DateTime($game->releaseDate);
							echo $rdate->format('m-d-Y');
						?>
                    </div>
                    <div class="tab-games-discper">
                        <?php echo $game->discountPercent ?>%
                    </div>

					<div class="tab-games-format">
						<?php echo $game->format ?>
					</div>

                    <div class="tab-price">
						<?php if ($game->discountPercent > 0): ?>
							<?php
						    $dprice = $game->price * (1 - $game->discountPercent/100);
							?>
							<span style="color: #626366"><strike><?php echo $game->price ?>&euro;</strike></span>
							<br>
							<?php echo round($dprice, 2)?>&euro;
						<?php else: ?>
                        	<?php echo $game->price ?>&euro;
						<?php endif ?>
                    </div>
                </div>
            </a>

			<?php endforeach ?>

        </div>

    </div>

</div>

<?php include("common/footer.php") ?>


<script type="text/javascript">
	$(window).load(function () {
		//splash carousel
		$(".upcoming-content").nivoSlider({
			pauseTime: 6000,
			controlNav: false,
			directionNav: false,
			directionNavHide: false,
			pauseOnHover: false,
			effect: "boxRain"
		});
	})
</script>