
<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


<div id="main">

    <div id="main-content">
        <h1 class="news">News</h1>

        <div class="line"></div>

        <!-- Left column-->
        <div class="leftcolumn">
            <div class="news-title">E3 2012: Square Enix Presents the Luminous Studio Engine</div>
            <p class="news-main">Square Enix took a hurdling leap into the future with its unveiling of the Agni's Philosophy demo at E3 2012.
            Running on the next-generation Luminous Studio engine, this is the same cutting-edge game technology that will be found in PlayStation 4 and the next-generation Xbox.
                Demonstrated in realtime to E3 showgoers, Agni's Philosophy: Final Fantasy Realtime Tech Demo combines the technical skills of Square Enix' top studios, including its Japanese
                Visual Works development group and Crystal Dynamics in the UK, as well as INEI Inc., Art Spirits, and YEBIS (makes of high-quality effects middleware.) The demo was designed to
                showcase the magic and emotion of the Final Fantasy saga, and "was created through the lens of the FINAL FANTASY series, where ancient magic and advanced science coexist in a near-futuristic world.
            </p>
            <div class="source">Source:<a target="_blank" href="http://ign.com"> IGN</a></a> Read the full story:<a target="_blank" href="http://uk.ign.com/articles/2012/06/06/e3-2012-square-enix-presents-the-lumines-engine"> Here</a></div>

            <div class="line about"></div>

        <!-- End Left column-->
            <div class="news-title">There Is Gameplay in Beyond: Two Souls</div>
            <p class="news-main">Beyond: Two Souls made quite an impression at Sony's E3 2012 press conference, but there was one question on every editor's lips--what's it like to play? While we
                didn't get to answer that directly at our behind-closed-doors appointment, we got a decent second-best--more than 40 minutes of gameplay shown off by the game's creator, David Cage.
                The section took place some way into the game and showed off drama, action, and even driving.
            </p>
            <img src="<?php echo $config["assets"] ?>/images/souls.jpg">
            <div class="source">Source:<a target="_blank" href="http://www.gamespot.com"> Gamespot</a></a> Read the full story:<a target="_blank" href="http://e3.gamespot.com/story/6381342/there-is-gameplay-in-beyond-two-souls"> Here</a></div>

            <div class="line about"></div>

            <div class="news-title">Activision Blizzard for sale?</div>
            <p class="news-main">LOS ANGELES--The industry's largest third-party publisher might be for sale. According to a Bloomberg report, senior executives of Activision Blizzard parent Vivendi are
                meeting later this month to determine whether they want to sell the telecom giant's majority stake in the game developer.
            </p>
            <div class="source">Source:<a target="_blank" href="http://www.gamespot.com"> Gamespot</a> Read the full story:<a target="_blank" href="http://e3.gamespot.com/story/6381404/activision-blizzard-for-sale"> Here</a></div>

        <!--Right column-->
        <div class="rightcolumn">

        </div>
        <!--End Right Column-->

        <div class="clear"></div>
    </div>

</div>

<?php include("common/footer.php") ?>
>>>>>>> origin/dev
