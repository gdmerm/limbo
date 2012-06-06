<!--Start Games Menu-->
<div id="games-header">
	<div class="content">
		<div class="games-navigation-area">
			<div class="games-navigation">
				<a class="tab-active" href="#">FEATURED GAMES</a>
				<div class="genres">
					<a class="tab" href="#">GENRES</a>
					<ul>
						<?php foreach($view->data->genres as $genre) { ?>
						<li class="boxmodelfix"><a href="<?php echo $config["root"] ?>/genre?g=<?php echo $genre ?>"><?php echo $genre ?></a></li>
						<?php } ?>
					</ul>
				</div>

				<a class="tab" href="#">MAC</a>
				<a class="final-tab" href="#">&nbsp;</a>
				<div class="games-search">
					<a href="#"><img border="0" class="image-search" src="<?php echo $config["assets"] ?>/images/search.png" alt="search"></a>
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