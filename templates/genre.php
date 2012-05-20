<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


<div id="main">

    <div id="main-content">
        <!-- Left column-->
        <div class="leftcolumn">
            <h2 class="header">UpComing Action Games</h2>
            <div id="upcoming">
                <div class="upcoming-content">
                    <a class="cluster-image">
                        <img src="<?php echo $config["assets"] ?>/images/upcoming/action/crysis3.jpg"/>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Left column-->


        <!--Right column-->
        <div class="rightcolumn">
            <div class="topblock-genre">
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
        <!--End Right Column-->

        <div class="clear"></div>

        <h2 class="games-header">Action Games List</h2>
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

            <a class="games-row-grey" href="#">
                <div id="released-games-1" class="tab-row">
                    <div class="tab-games-image">
                        <a href="#"><img class="tiny-cap-image" src="<?php echo $config["assets"] ?>/images/thumbs/1/tiny.jpg"></a>
                    </div>
                    <div class="tab-games-desc">
                        <a href="#"><h4>Max Payne 3</h4></a>
                    </div>
                    <div class="tab-released">
                       4 May 2012
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
            </a>

            <a class="games-row-black" href="#">
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
            </a>
        </div>

    </div>

</div>

<?php include("common/footer.php") ?>