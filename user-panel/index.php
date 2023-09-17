<?php 
	include_once('operations/connectdb.php');
	$setup = $db->prepare("SELECT * FROM config WHERE config_id=:id");
	$setup->execute(array('id'=>1));
	$result = $setup->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $result['site_title']?></title>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">

</head>

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