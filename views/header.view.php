<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="/public/css/global.css">
		<!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


		<?php
		if(!isset($style)){
			$style = "none";
		};
		if(!isset($title)){
			$title = "School Planner";
		};
		if(file_exists('public/css/'.$style.'.css')){
			echo '<link type="text/css" rel="stylesheet" href="public/css/'.$style.'.css">';
		}
		?>
		<!-- <link type="text/css" rel="stylesheet" href="<?= "public/css/".$style.".css"; ?>"> -->
	    <title><?= $title; ?></title>

	</head>
	<body onload="drawShape()">