<?php include("configuration/config.php"); ?>
<?php $view = json_decode($viewData); ?>

<?php include("common/header.php") ?>

<?php include("common/naviMenu.php") ?>


<div id="main">

	<div id="main-content">

		<!-- Left column-->
		<div class="leftcolumn">
        <?php echo $view->data->product->name ?>
		</div>
		<!-- End Left column-->

		<!--Right column-->
		<div class="rightcolumn">

		</div>
		<!--End Right Column-->

		<div class="clear"></div>
	</div>

</div>

<?php include("common/footer.php") ?>