<!--Start Games Menu-->
<div id="games-header">
	<div class="content">
		<div class="games-navigation-area">
			<div class="games-navigation">
				<a class="tab <?php if ($currentPage === "home"): ?>tab-active<?php endif ?>" href="<?php echo $config['root'] ?>">FEATURED GAMES</a>
				<div class="genres">
					<a class="tab <?php if ($currentPage === "genres"): ?>tab-active<?php endif ?>" href="#">GENRES</a>
					<ul>
						<?php foreach($view->data->genres as $genre) { ?>
						<li class="boxmodelfix"><a href="<?php echo $config["root"] ?>/genre?g=<?php echo $genre ?>"><?php echo $genre ?></a></li>
						<?php } ?>
					</ul>
				</div>

				<a class="tab <?php if ($currentPage === "mac"): ?>tab-active<?php endif ?>" href="<?php echo $config["root"] ?>/mac">MAC</a>
				<a class="final-tab" href="#">&nbsp;</a>
				<div class="games-search">
					<img border="0" class="image-search" src="<?php echo $config["assets"] ?>/images/search.png" alt="search">
					<form class="searchform" action="#" name="searchform">
						<div class="searchbox">
							<input type="text" value="Search for games">
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- End Games Menu-->