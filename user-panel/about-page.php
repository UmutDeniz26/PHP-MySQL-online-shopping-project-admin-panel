<?php include_once('operations/getConfig.php'); ?>
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
								<div class="col-md-4">
									<div class="bread"><a href="#">Home</a> &rsaquo; About</div>
									<div class="bigtitle">About</div>
								</div>
								<div class="col-md-3 col-md-offset-5">
									<button class="btn btn-default btn-red btn-lg">Purchase Theme</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><!--Main content-->
					<div class="title-bg">
						<div class="title">About Shopping</div>
					</div>
					<div class="page-content">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the indusy standard dummy text ever since the 1500s, when an unknown printer took a
							galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy
							text of the printing and typesettin industry.
						</p>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the indusy standard dummy text ever since the 1500s, when an unknown printer took a
							galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy
							text of the printing and typesettin industry.
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