<?php include("../configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Limbo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $config["assets"] ?>/css/limbo.css"/>
</head>

<body>

<!--Start Global Header-->
<div id="global-header">
    <div class="content">
        <div class="logo">
            <a href="#"><img border="0" src="<?php echo $config["assets"] ?>/images/logo.jpg" alt="LIMBO"></a>
        </div>
        <a href="#" class="header-item-active">STORE</a>
        <a href="#" class="header-item">NEWS</a>
        <a href="#" class="header-item">ABOUT</a>
        <a href="#" class="header-item">SUPPORT</a>
        <div class="global-actions">
            <a class="register" href="#">SIGN UP FOR FREE</a> | <a class="register" href="#">Sign in</a>
        </div>
    </div>
</div>
<!--End global Header-->

<!--Start Games Menu-->
<div id="games-header">
    <div class="content">
        <div class="games-navigation-area">
            <div class="games-navigation">
                <a class="tab-active" href="#">FEATURED GAMES</a>
                <a class="tab" href="#">GENRES</a>
                <a class="tab" href="#">MAC</a>
                <a class="tab" href="#">VIDEOS</a>
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
                            <img border="0" class="slideshow-capsule-image" alt="Crusader" src="<?php echo $config["assets"] ?>/images/crusader.jpg">
                            <div class="price">
                                <div class="final-price"> <strong>Buy Now</strong> : 39,99&euro;</div>
                            </div>
                            <div class="main-overlay">
                                <div class="ext-overlay"></div>
                                <div class="main-overlay-content">
                                    <div class="main-overlay-platform">
                                        <img border="0" class="platform-image" src="<?php echo $config["assets"] ?>/images/platformwin.png" alt="Windows" />
                                    </div>
                                    <h1>Now Available</h1>
                                    <p>An intense and spectacular Real Time Strategy game, where realism and strategy are brought to the front lines.</p>
                                </div>
                            </div>
                        </a>
                        <!--End Image 0-->

                        <!--New Image 1-->
                        <a id="mainslideshow-1" class="slideshow-capsule" href="#">
                            <img border="0" class="slideshow-capsule-image" alt="Crusader" src="<?php echo $config["assets"] ?>/images/crusader.jpg">
                            <div class="price">
                                <div class="final-price"> <strong>Buy Now</strong> : 39,99&euro;</div>
                            </div>
                            <div class="main-overlay">
                                <div class="ext-overlay"></div>
                                <div class="main-overlay-content">
                                    <div class="main-overlay-platform">
                                        <img border="0" class="platform-image" src="<?php echo $config["assets"] ?>/images/platformwin.png" alt="Windows" />
                                    </div>
                                    <h1>Now Available</h1>
                                    <p>An intense and spectacular Real Time Strategy game, where realism and strategy are brought to the front lines.</p>
                                </div>
                            </div>
                        </a>
                        <!--End Image 1-->
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

        </div>
        <!--End Left Column DIv-->

        <!--Right Column Div-->
        <div class="rightcolumn">
        </div>
        <!--End RIght Column Div-->
    </div>
</div>
<!--End Main-->





</body>

</html>