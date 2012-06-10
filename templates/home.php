<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>

<!--Start Main-->
<div id="main">
    <div id="main-content">

        <!--Left column Div-->
        <div class="leftcolumn">

            <!-- Main picture slideshow-->
            <div id="mainslideshow">
                <div class="mainslideshow-content">
                    <div id="mainslideshow-scroll" class="mainslideshow-scroll-area">

                        <!--New Image 0-->
                        <a id="mainslideshow-0" class="slideshow-capsule" href="<?php echo $config['root'] ?>/game?id=<?php echo $view->data->promoted->promo_1->productid ?>">
                            <img border="0" class="slideshow-capsule-image" alt="Crusader" src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $view->data->promoted->promo_1->productid?>/1.jpeg">
                            <div class="price">
                                <div class="final-price"> <strong>Buy Now</strong> : <?php echo $view->data->promoted->promo_1->price ?>&euro;</div>
                            </div>
                            <div class="main-overlay">
                                <div class="ext-overlay"></div>
                                <div class="main-overlay-content">
                                    <div class="main-overlay-platform">
                                        <img border="0" class="platform-image" src="<?php echo $config["assets"] ?>/images/platformwin.png" alt="Windows" />
                                    </div>
                                    <h1>Now Available</h1>
                                    <p><?php echo $view->data->promoted->promo_1->description ?></p>
                                </div>
                            </div>
                        </a>
                        <!--End Image 0-->

                        <!--New Image 1-->
                        <a id="mainslideshow-1" class="slideshow-capsule" href="<?php echo $config['root'] ?>/game?id=<?php echo $view->data->promoted->promo_2->productid ?>">
                            <img border="0" class="slideshow-capsule-image" alt="Crusader" src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $view->data->promoted->promo_2->productid?>/1.jpeg">
                            <div class="price">
                                <div class="final-price"> <strong>Buy Now</strong> : <?php echo $view->data->promoted->promo_2->price ?>&euro;</div>
                            </div>
                            <div class="main-overlay">
                                <div class="ext-overlay"></div>
                                <div class="main-overlay-content">
                                    <div class="main-overlay-platform">
                                        <img border="0" class="platform-image" src="<?php echo $config["assets"] ?>/images/platformwin.png" alt="Windows" />
                                    </div>
                                    <h1>Now Available</h1>
                                    <p><?php echo $view->data->promoted->promo_2->description ?></p>
                                </div>
                            </div>
                        </a>
                        <!--End Image 1-->

                        <!--New Image 2-->
                        <a id="mainslideshow-2" class="slideshow-capsule" href="<?php echo $config['root'] ?>/game?id=<?php echo $view->data->promoted->promo_3->productid ?>">
                            <img border="0" class="slideshow-capsule-image" alt="Crusader" src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $view->data->promoted->promo_3->productid?>/1.jpeg">
                            <div class="price">
                                <div class="final-price"> <strong>Buy Now</strong> : <?php echo $view->data->promoted->promo_3->price ?>&euro;</div>
                            </div>
                            <div class="main-overlay">
                                <div class="ext-overlay"></div>
                                <div class="main-overlay-content">
                                    <div class="main-overlay-platform">
                                        <img border="0" class="platform-image" src="<?php echo $config["assets"] ?>/images/platformwin.png" alt="Windows" />
                                    </div>
                                    <h1>Now Available</h1>
                                    <p><?php echo $view->data->promoted->promo_3->description ?></p>
                                </div>
                            </div>
                        </a>
                        <!--End Image 2-->

                        <!--New Image 3-->
                        <a id="mainslideshow-3" class="slideshow-capsule" href="<?php echo $config['root'] ?>/game?id=<?php echo $view->data->promoted->promo_4->productid ?>">
                            <img border="0" class="slideshow-capsule-image" alt="Crusader" src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $view->data->promoted->promo_4->productid?>/1.jpeg">
                            <div class="price">
                                <div class="final-price"> <strong>Buy Now</strong> : <?php echo $view->data->promoted->promo_4->price ?>&euro;</div>
                            </div>
                            <div class="main-overlay">
                                <div class="ext-overlay"></div>
                                <div class="main-overlay-content">
                                    <div class="main-overlay-platform">
                                        <img border="0" class="platform-image" src="<?php echo $config["assets"] ?>/images/platformwin.png" alt="Windows" />
                                    </div>
                                    <h1>Now Available</h1>
                                    <p><?php echo $view->data->promoted->promo_4->description ?></p>
                                </div>
                            </div>
                        </a>
                        <!--End Image 3-->
                    </div>


                    <div class="control-left">
                        <h5><img border="0" src="<?php echo $config["assets"] ?>/images/arrowleft.gif" alt="Left">&nbsp;&nbsp;PREV</h5>
                    </div>
                    <div class="control-right" style="text-align:right">
                        <h5>
                            <span>NEXT</span>&nbsp;
                            <img border="0" src="<?php echo $config["assets"] ?>/images/arrowright.gif" alt="Right">
                        </h5>
                    </div>
                </div>

            </div>
            <!-- End Main Picture slideshow-->

            <!--Featured Games bar-->
            <div id="featured-games">
                <div class="tab-active">Featured PC Games</div>
                <div class="tab">Featured MAC Games</div>
            </div>
            <!--End Featured Games Bar-->

            <!--start Featured games main-->
            <div class="featured-container">
                <div class="scroll-container">
                    <div class="scroll-window">
                        <div class="scroll-page">
                            <?php foreach ($view->data->featured->PC as $product){ ?>
                            <a href="<?php echo $config['root'] ?>/game?id=<?php echo $product->productid ?>"><img src="<?php echo $config["assets"]?>/images/thumbs/<?php echo $product->productid?>/feat.jpg" width="184" height="69"/>
                                <h4><?php echo $product->name?></h4>
                                <h5><?php echo $product->price?>&euro;</h5>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="scroll-page">
                            <?php foreach ($view->data->featured->MAC as $product){ ?>
                            <a href="<?php echo $config['root'] ?>/game?id=<?php echo $product->productid ?>"><img src="<?php echo $config["assets"]?>/images/thumbs/<?php echo $product->productid?>/feat.jpg" width="184" height="69"/>
                                <h4><?php echo $product->name?></h4>
                                <h5><?php echo $product->price?>&euro;</h5>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--end Featured games main-->

            <!--Start New releases - offers-->
            <div id="releases-offers">
                <div class="tab-active">New Releases</div>
                <div class="tab">Special Offers</div>
            </div>

            <div class="releases-container">
                <div class="tab-page">
                    <div id="released-games">

                        <div id="released-games-1" class="tab-row">
                            <div class="tab-games-image">
                                <a href="<?php echo $config['root'] ?>/game?id=1"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/1/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="#"><h4>Max Payne 3</h4></a>
                                <div class="genre-release">
                                    Action - Available : 1 June 2012
                                </div>
                            </div>
                            <div class="tab-price">
                                <span style="color: #B0AEAC;">49,99&euro;</span>
                            </div>
                        </div>

                        <div id="released-games-2" class="tab-row">
                            <div class="tab-games-image">
                                <a href="<?php echo $config['root'] ?>/game?id=2"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/2/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="<?php echo $config['root'] ?>/game?id=2"><h4>Call of Duty: Modern Warfare 3</h4></a>
                                <div class="genre-release">
                                    Action - Available : 8 September 2011
                                </div>
                            </div>

                            <div class="tab-price">
                                <!--<span style="color: #626366"><strike>49,99&euro;</strike></span>-->
                                39,99&euro;
                            </div>
                        </div>

                        <div id="released-games-3" class="tab-row">
                            <div class="tab-games-image">
                                <a href="<?php echo $config['root'] ?>/game?id=23"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/23/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="<?php echo $config['root'] ?>/game?id=23"><h4>Deus Ex: Human Revolution</h4></a>
                                <div class="genre-release">
                                    Action - Available : 26 August 2011
                                </div>
                            </div>
                            <div class="tab-price">
                                <span style="color: #B0AEAC;">49,99&euro;</span>
                            </div>
                        </div>

                        <div id="released-games-4" class="tab-row">
                            <div class="tab-games-image">
                                <a href="<?php echo $config['root'] ?>/game?id=30"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/30/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="<?php echo $config['root'] ?>/game?id=30"><h4>The Elder Scrolls V: Skyrim</h4></a>
                                <div class="genre-release">
                                    Action - Available : 11 November 2011
                                </div>
                            </div>
                            <div class="tab-price">
                                <span style="color: #B0AEAC;">49,99&euro;</span>
                            </div>
                        </div>

                    </div>
                </div>
				<div class="tab-page" style="display:none">
					<div id="special-offers">

						<?php foreach($view->data->specialOffers as $index => $offer): ?>
						<div class="tab-row <?php echo ($index % 2 === 0) ? "alt" : "" ?>">
							<div class="tab-games-image">
								<a href="<?php echo $config['root'] ?>/game?id=<?php echo $offer->productid ?>"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/<?php echo $offer->productid ?>/tiny.jpg"</a>
							</div>
							<div class="tab-games-desc">
								<a href="<?php echo $config['root'] ?>/game?id=<?php echo $offer->productid ?>"><h4><?php echo $offer->name ?></h4></a>
								<div class="genre-release">
									<?php echo $offer->genre ?> - Available :
									<?php
									$rdate = new DateTime($offer->releaseDate);
									echo $rdate->format('m-d-Y');
									?>
								</div>
							</div>
							<div class="tab-games-discper right">
								-<?php echo $offer->discountPercent ?>%
							</div>
							<div class="tab-price">
								<?php
								$dprice = $offer->price * (1 - $offer->discountPercent/100);
								?>
								<span style="color: #626366"><strike><?php echo $offer->price ?>&euro;</strike></span>
								<?php echo round($dprice, 2)?>&euro;
							</div>
						</div>
						<?php endforeach ?>


					</div>
				</div>
            </div>

            <!--End New releases - offers-->


        </div>
        <!--End Left Column DIv-->

        <!--Right Column Div-->
        <div class="rightcolumn">

            <div class="topblock">
                <div class="gamenews">
                    Game Industry Headlines - News On The Spot
                </div>
            </div>
            <div class="gamenewsblock">
                <div class="gamenews-img">
                    <img src="<?php echo $config["assets"] ?>/images/gamenews.png"/>
                </div>
                <div class="gamenews-content">
                    <ul>
                        <li><a target="_blank" href="http://uk.pc.ign.com/articles/122/1224248p1.html">The Elder Scrolls Online Confirmed!</a></li>
                        <li><a target="_blank" href="http://uk.xbox360.ign.com/articles/122/1224254p1.html">Could Next-Gen Consoles Cost $99?</a></li>
                        <li><a target="_blank" href="http://www.gamespot.com/news/company-of-heroes-2-incorporating-next-year-6374943">Company of Heroes 2 incorporating next year</a></li>
                        <li><a target="_blank" href="http://uk.xbox360.ign.com/articles/122/1224113p1.html">Skyrim Dawnguard DLC Revealed</a></li>
                    </ul>
                </div>
            </div>

			<?php include("components/today_offer.php") ?>

        </div>
        <!--End Right Column Div-->
    </div>
</div>
<!--End Main-->

<?php include("common/footer.php") ?>

<script type="text/javascript">
	var slider = new GameSlider("#mainslideshow-scroll", 4, true);
	var featuredTabs = new Tabber("#featured-games", ".featured-container");
	var releasesTabs = new Tabber("#releases-offers", ".releases-container");
</script>