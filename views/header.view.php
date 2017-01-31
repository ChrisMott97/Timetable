<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="/public/css/global.css">
	


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