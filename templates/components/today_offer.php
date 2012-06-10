<?php
//setup configuration
$dayOffers = parse_ini_file("configuration/genres.ini", 1);
?>
<div class="day-offers">
	<div class="topblock-genre">
		<div class="offers">Today's Offer</div>
	</div>
	<div class="mainblock">
		<div class="imageblock">
			<?php foreach ($dayOffers['dayOffer'] as $index => $product): ?>
			<div class="tinyimg<?php echo ($index > 0) ? "2" : "" ?>">
				<a href="<?php echo $config['root'] ?>/game?id=<?php echo $product ?>"><img src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $product ?>/tiny.jpg"/></a>
			</div>
			<?php endforeach ?>
		</div>

		<div class="offerinfo">
			<p><?php echo $dayOffers['dayOffer_promoText']['text'] ?></p>
		</div>
		<div class="btn-addtocart">
			<a href="<?php echo $config['root']?>/cart/addbulk?id=1,18&offer=offeroftheday">ADD TO CART</a>
		</div>
		<div class="clear"></div>
	</div>
</div>