<?php
include_once('operations/getDataFromTable.php');
$result_about = getDataFromTable("about", "about_id", 0);
$result_config = getDataFromTable("config", "config_id", 1);
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('meta-head.php'); ?>

<body>
	<div id="wrapper">
		<?php
		//HEADER
		include_once('header.php');
		include_once('endnav.php');
		?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-title-wrap">
						<div class="page-title-inner">
							<div class="row">
								<div class="col-md-12">
									<div class="bigtitle" style="color: #F3CB50;
									font-size: 50px;
									text-align: center;
									font-family: cursive;
									-webkit-text-stroke: 1px #000;">
										<?php echo $result_about['about_title'] ?>
									</div>
								</div>
								<div class="col-md-12" style="text-align: center;
								color: gray;">
									<p class="">
										<?php echo $result_about['about_motto'] ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><!--Main content-->
					<div class="title-bg">
						<div class="title">About <?php echo $result_config['site_title'] ?>
						</div>
					</div>
					<div class="page-content">
						<p>
							<?php echo $result_about['about_content'] ?>
						</p>
					</div>
					<div class="title-bg">
						<!-- get column of variable in mysql -->
						<?php 
						$about_vision = $result_about['about_vision'];
						
						
						
						?>
						<div class="title">Our Vision</div>
					</div>
					<div class="page-content">
						<p>
							<?php echo $result_about['about_vision'] ?>
						</p>
					</div>
					<div class="title-bg">
						<div class="title">Our Mission</div>
					</div>
					<div class="page-content">
						<p>
							<?php echo $result_about['about_mission'] ?>
						</p>
					</div>
				</div>

			</div>
			<div class="spacer"></div>
		</div>

		<?php
		//HEADER
		include_once('footerwidget.php');
		include_once('footer.php');
		?>

	</div>
</body>

</html>