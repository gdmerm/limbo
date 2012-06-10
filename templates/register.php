<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>
<?php $currentPage = "register" ?>

<?php include("common/header.php") ?>


<div class="wrapper">
	<div id="main">

		<!--Start Global Header-->
		<div id="global-header">
			<div class="content">
				<div class="logo">
					<a href="<?php echo $config["root"] ?>"><img border="0" src="<?php echo $config["assets"] ?>/images/logo.jpg" alt="LIMBO"></a>
				</div>
				<a href="<?php echo $config["root"] ?>" class="header-item-active">STORE</a>
				<a href="<?php echo $config["root"] ?>/news/" class="header-item">NEWS</a>
				<a href="<?php echo $config["root"] ?>/about" class="header-item">ABOUT</a>
				<a href="<?php echo $config["root"] ?>/support" class="header-item">SUPPORT</a>
				<div class="global-actions">
					<a href="<?php echo $config["root"] ?>/cart"><div class="cart-icon"><img src="<?php echo $config["assets"] ?>/images/cart.png"></div></a>
					<?php if (!isset($view->data->member) || is_null($view->data->member)) { ?>
					<a class="register" href="<?php echo $config["root"] ?>/register/">SIGN UP FOR FREE</a> | <a class="register login" href="#">Sign in</a>
					<?php } else { ?>
					<a class="register" href="<?php echo $config["root"] ?>/#"><?php echo $view->data->member->email ?></a> | <a class="register" href="<?php echo $config["root"] ?>/members/logout">Logout</a>
					<!-- welcome <a class="register" href="<?php echo $config["root"] ?>/#"><?php echo $view->data->member->firstName ?></a> | <a class="register" href="#">Logout</a> -->
					<?php } ?>
				</div>
			</div>
			<!--End global Header-->
		</div>

		<?php include("common/naviMenu.php") ?>

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
								<span></span>
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
								<p>We recommend that you create a unique password for Limbo. Please never share your password.</p>
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
								<p>Please type a valid email address.Your email will be used to access your Limbo account.</p>
								<p>This email will be used only for registering reasons,not for advertising and will not be shared with any third party companies.</p>
							</div>
							<div class="clear"></div>
						</div>
						<div class="line"></div>
						<!--End Email-->

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
</div>


<?php include("common/footer.php") ?>

<script type="text/javascript">
	$(document).ready(function () {
		var validator = new LimboValidator();

		$(".create-account").data("validation-status", "false");

		$("#accountname").on("blur", function (e) {
			//validate username here
			var value = $(this).val();
			if ($.trim(value) === '')
				return false;
			validator.isUserTaken($(this).val());
		});

		$("#reenter_password").on("blur", function (e) {
			validator.validatePasswords($("#password").val(), $(this).val());
		});

		$("#email, #reenter_email").on("blur", function () {
			validator.validateEmail.call(this, $(this).val());
		})

		$("#reenter_email").on("blur", function () {
			validator.validateEmailSimilarity($("#email").val(), $("#reenter_email").val());
		});

		//handle click on submit button
		$(".create-account").on("click", function (e) {
			e.preventDefault();
			validationStatus = $(this).data("validation-status");
			if (validationStatus === "true")
				$(this).parent().parent().submit();
		})
	});
</script>