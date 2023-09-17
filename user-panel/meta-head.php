<?php include_once('operations/getDataFromTable.php'); ?>
<head>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $result_config['site_description'] ?>">
	<meta name="keywords" content="<?php echo $result_config['site_keyword'] ?>">
	<meta name="author" content="<?php echo $result_config['site_author'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo getDataFromTable("config", "config_id", 1)["site_title"]?>
	</title>

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
