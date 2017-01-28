<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="/public/css/global.css">
	<script type="text/javascript">
    function drawShape() {
        var myCanvas = document.getElementById("myCanvas");
        var ctx = myCanvas.getContext("2d");
        var img = new Image();
        img.onload = function() {
            ctx.drawImage(img, 0, 0);
            <?php 
            $nodes = Nodes::findAll();
            foreach($nodes as $node){
            	if(!$node->x){
            		$node->x = 0;
            	}
            	if(!$node->y){
            		$node->y = 0;
            	}
            	echo ('var '.$node->identifier.' = new circle(ctx,'.$node->x.','.$node->y.');');
            }
            ?>
            // connect(ctx, ReceptionE, Reception);
            // highlight(ctx, ReceptionE, Reception);
            // highlight(ctx, Arts, Music2);
        };
        img.src = '/public/images/denefield.png';
    }
    function circle(ctx, x=0, y=0){
        this.x = x;
        this.y = y;
        ctx.beginPath();
        ctx.arc(x, y, 6, 0, 2 * Math.PI);
        ctx.stroke();
        ctx.beginPath();
        ctx.arc(x, y, 3, 0, 2 * Math.PI);
        ctx.fill();
    }
    function connect(ctx, first, second){
        ctx.beginPath();
        ctx.moveTo(first.x, first.y);
        ctx.lineTo(second.x, second.y);
        ctx.stroke();
    }
    function highlight(ctx, first, second){
        ctx.beginPath();
        ctx.moveTo(first.x, first.y);
        ctx.lineTo(second.x, second.y);
        ctx.strokeStyle = '#ff0000';
        ctx.stroke();
    }
</script>


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