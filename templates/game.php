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
                    <?php for($i=0;$i<13;$i++): ?>
                    <img width="616" height="254" src="<?php echo $config["assets"] ?>/images/upcoming/<?php echo $i+1?>.jpg"/>
                    <?php endfor ?>
                </div>
            </div>

            <div class="game-purchase-wrapper">
                <div class="game-purchase">
                    <h1>BUY <?php echo $view->data->product->name ?></h1>
                    <div class="game-purchase-button">
                        <div class="game-purchase-price"><span>49,99&euro;</span>
                            <div class="btn-addtocart">
                                <a href="#">ADD TO CART</a>
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
           <div class="details-block">More Text Here</div>
		</div>
		<!--End Right Column-->

		<div class="clear"></div>
	</div>

</div>

<?php include("common/footer.php") ?>