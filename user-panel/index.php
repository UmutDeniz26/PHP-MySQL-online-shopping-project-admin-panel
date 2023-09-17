<?php
include_once('operations/getConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once('meta-head.php');
?>

<body>
	<div id="wrapper">

		<?php
		//HEADER
		include_once('header.php');
		include_once('endnav.php');

		//SLIDER
		include_once('bigslidershowcase.php');
		include_once('smallslidershowcase.php');

		//MAIN
		include_once('maincontainer.php');

		//FOOTER
		include_once('footerwidget.php');
		include_once('footer.php');

		//SCRIPTS
		include_once('scripts.php');
		?>

	</div>
</body>

</html>