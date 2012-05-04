<?php include("configuration/config.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $config["assets"] ?>/css/register.css" />
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
<div id="main">
    <div id="main-content">
        <div class="main-title">
            <div class="page-title">
                <div class="account">Create an Account</div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Left column-->
        <div class="left-column">
            <div class="register-box">
                <div class="join-form">

                    <!--Username-->
                    <div class="form-row">
                        <div class="form-area">
                            <label for="accountname">Create a Limbo Username</label>
                            <input type="text" id="accountname" name="accountname" maxlength="64">
                        </div>
                        <div class="form-notes">
                            <br>
                            <span>Availability</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="line"></div>
                    <!--End Username-->

                    <!--Password-->
                    <div class="form-row">
                        <div class="form-area">
                            <label for="password">Choose a password</label>
                            <input type="password" id="password" name="password" maxlength="64">
                            <br>
                            <label for="reenter_password">Re-enter Password</label>
                            <input type="password" id="reenter_password" name="reenter_password" maxlength="64">
                        </div>
                        <div class="form-notes">
                            <br>
                            <br>
                            <p>We recommend that you create a unique password for Limbo. Please never share your password</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="line"></div>
                    <!--End Password-->

                    <!--Email-->
                    <div class="form-row">
                        <div class="form-area">
                            <label for="email">Your current email address</label>
                            <input type="text" id="email" name="email" maxlength="64">
                            <br>
                            <label for="reenter_email">Re-enter email address</label>
                            <input type="text" id="reenter_email" name="reenter_email" maxlength="64">
                        </div>
                        <div class="form-notes">
                            <br>
                            <p>Your email address is used to confirm purchases and help you manage access to your Steam account.</p>
                            <p>Limbo will send a confirmation email to this account. Please follow the link in the mail to verify your email account with Limbo</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="line"></div>
                    <!--End Email-->

                    <!--Secret-->
                    <div class="form-row">
                        <div class="form-area">
                            <label for="question">Question</label>
                            <br>
                            <label for="secret_answer">Secret answer</label>
                            <input type="text" id="secret_answer" name="secret_answer" maxlength="255">
                        </div>

                        <div class="form-notes">
                            <br>
                            <p>Please select a question and then type your secret answer below. This will be asked if you want to retrieve your password.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="line"></div>
                    <!--End Secret-->

                     <div id="agree">
                         <input id="i-agree-check" type="checkbox" name="i_agree_check">
                         <label id="agree-check" for="agree-check">I agree and i am 13 years old or older</label>
                     </div>

                    <a href="#">
                        <div class="create-account">Create my account</div>
                    </a>
                        <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- End Left column-->

        <!--Right column-->
        <div class="right-column" id="asd">
            <div class="join-limbo">
                <h4>WHY JOIN LIMBO?</h4>
            </div>
            <div class="join-limbo-content">
                <ul id="reasons">
                    <li>Buy and dowload full games!</li>
                    <li>Get Exclusive offers everyday!</li>
                    <ll>Choose from a huge list of games!</ll>
                </ul>
            </div>
        </div>
        <!--End Right Column-->
        <div class="clear"></div>
    </div>
</div>

<!--Footer-->
<div id="footer">
    <ul>
        <li class="links">
            <a href="#" target="_blank">Store</a>
            <a href="#" target="_blank">News</a>
            <a href="#" target="_blank">About</a>
            <a href="#" target="_blank">Support</a>
        </li>
        <li class="social">
            <a href="http://www.facebook.com" target="_blank"><img class="facebook" src="<?php echo $config["assets"] ?>/images/facebook.png"</a>
            <a href="http://www.twitter.com" target="_blank"><img class="twitter" src="<?php echo $config["assets"] ?>/images/twitter.png"</a>
            <a href="http://www.plus.google.com" target="_blank"><img class="google" src="<?php echo $config["assets"] ?>/images/googleplus.png"</a>
        </li>
        <li class="trademark">&copy; 2012 Limbo Corporation. All rights reserved. All trademarks are property of their respective owners</li>
    </ul>
</div>
<!--End Footer-->

</body>

</html>