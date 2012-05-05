<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


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

					<form method="POST" action="/limbo/register/save">

                    <!--Username-->
                    <div class="form-row">
                        <div class="form-area">
                            <label for="accountname">Create a Limbo Username</label>
                            <input type="text" id="accountname" name="firstName" maxlength="64">
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
                            <input type="text" id="secret_answer" name="secret" maxlength="255">
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
					</form>
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

<?php include("components/dialog_login.php"); ?>
<?php include("common/footer.php") ?>

<script type="text/javascript">
	$(document).ready(function () {
		$(".create-account").on("click", function (e) {
			e.preventDefault();
			$(this).parent().parent().submit();
		})
	});
</script>