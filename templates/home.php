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
                        <a id="mainslideshow-0" class="slideshow-capsule" href="#">
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
                        <a id="mainslideshow-1" class="slideshow-capsule" href="#">
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
                        <a id="mainslideshow-2" class="slideshow-capsule" href="#">
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
                        <a id="mainslideshow-3" class="slideshow-capsule" href="#">
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

                <div id="mainslideshow-control-bar">
                    <div id="mainslideshow-control" class="slider">
                        <div class="slider-bg"></div>
                        <div class="handle"></div>
                    </div>
                </div>
                <div></div>

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
                            <a href="#"><img src="<?php echo $config["assets"]?>/images/thumbs/<?php echo $product->productid?>/feat.jpg" width="184" height="69"/>
                                <h4><?php echo $product->name?></h4>
                                <h5><?php echo $product->price?>&euro;</h5>
                            </a>
                            <?php } ?>
                        </div>
                        <div class="scroll-page">
                            <?php foreach ($view->data->featured->MAC as $product){ ?>
                            <a href="#"><img src="<?php echo $config["assets"]?>/images/thumbs/<?php echo $product->productid?>/feat.jpg" width="184" height="69"/>
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
                                <a href="#"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/1/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="#"><h4>Max Payne 3</h4></a>
                                <div class="genre-release">
                                    Action - Available : 4 May 2012
                                </div>
                            </div>
                            <div class="tab-games-discper">
                                -10%
                            </div>
                            <div class="tab-price">
                                <span style="color: #626366"><strike>49,99&euro;</strike></span>
                                <br>
                                45&euro;
                            </div>
                        </div>

                        <div id="released-games-2" class="tab-row">
                            <div class="tab-games-image">
                                <a href="#"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/2/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="#"><h4>Call of Duty: Modern Warfare 3</h4></a>
                                <div class="genre-release">
                                    Action - Available : 4 May 2012
                                </div>
                            </div>

                            <div class="tab-price">
                                <!--<span style="color: #626366"><strike>49,99&euro;</strike></span>-->
                                49,99&euro;
                            </div>
                        </div>

                        <div id="released-games-3" class="tab-row">
                            <div class="tab-games-image">
                                <a href="#"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/23/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="#"><h4>Deus Ex: Human Revolution</h4></a>
                                <div class="genre-release">
                                    Action - Available : 4 May 2012
                                </div>
                            </div>
                            <div class="tab-games-discper">
                                -10%
                            </div>
                            <div class="tab-price">
                                <span style="color: #626366"><strike>49,99&euro;</strike></span>
                                <br>
                                45&euro;
                            </div>
                        </div>

                        <div id="released-games-4" class="tab-row">
                            <div class="tab-games-image">
                                <a href="#"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/30/tiny.jpg"></a>
                            </div>
                            <div class="tab-games-desc">
                                <a href="#"><h4>The Elder Scrolls V: Skyrim</h4></a>
                                <div class="genre-release">
                                    Action - Available : 4 May 2012
                                </div>
                            </div>
                            <div class="tab-games-discper">
                                -10%
                            </div>
                            <div class="tab-price">
                                <span style="color: #626366"><strike>49,99&euro;</strike></span>
                                <br>
                                45&euro;
                            </div>
                        </div>

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


            <div class="topblock">
                <div class="offers">Today's Offer</div>
            </div>
            <div class="mainblock">
                <div class="imageblock">
                     <div class="tinyimg">
                         <a href="#"><img src="<?php echo $config["assets"] ?>/images/thumbs/23/tiny.jpg"/></a>
                     </div>
                    <div class="tinyimg2">
                        <a href="#"><img src="<?php echo $config["assets"] ?>/images/thumbs/25/tiny.jpg"/></a>
                    </div>
                </div>
                <div class="offerinfo">
                    <p>Get Both Deus Ex & Tropico 4 for ONLY: 49,99&euro;</p>
                </div>
                <div class="btn-addtocart">
                    <a href="#">ADD TO CART</a>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <!--End Right Column Div-->
    </div>
</div>
<!--End Main-->


<!-- reusable dialogs -->
<?php include("components/dialog_login.php"); ?>

<?php include("common/footer.php") ?>
