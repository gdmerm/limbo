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
			<a href="http://www.facebook.com" target="_blank"><img class="facebook" src="<?php echo $config["assets"] ?>/images/facebook.png" /></a>
			<a href="http://www.twitter.com" target="_blank"><img class="twitter" src="<?php echo $config["assets"] ?>/images/twitter.png" /></a>
			<a href="http://www.plus.google.com" target="_blank"><img class="google" src="<?php echo $config["assets"] ?>/images/googleplus.png" /></a>
		</li>
		<li class="trademark">&copy; 2012 Limbo Corporation. All rights reserved. All trademarks are property of their respective owners</li>
	</ul>
</div>
<!--End Footer-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $config['js'] ?>/jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $config['js'] ?>/plugins/jquery.simplemodal.1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo $config['js'] ?>/plugins/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo $config['js'] ?>/dev/LimboValidator.js"></script>
<script type="text/javascript" src="<?php echo $config['js'] ?>/dev/GameSlider.js"></script>
<script type="text/javascript" src="<?php echo $config['js'] ?>/dev/Tabber.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#global-header a.login").on("click", function (e) {
		e.preventDefault();
		$(".dialog.login-prompt").modal({
			overlayClose: true,
			zIndex: 9999
		});
	});

	$(".dialog button.login").on("click", function (e) {
		e.preventDefault();
		$(this).parents("form").submit();
	});

	$(".dialog button.register").on("click", function (e) {
		e.preventDefault();
		window.location = '/limbo/register';
	});

	$(".searchbox input").autocomplete({
		source: "/limbo/productactions/search"
	});
});
</script>

</body>

</html>