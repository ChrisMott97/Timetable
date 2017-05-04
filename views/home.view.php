<div class="container">
	<div class="card-panel">
		<h1><?= "Welcome, $user->firstname" ?></h1>
		<p>Below is a basic map of the school.</p>
	</div>
	<div class="card-panel">
		<h3 id="time" class="center-align">
		<?php
			echo "Today is " . date("l") . "<br>";
			echo date("d-m-Y");
		?>
		</h3>
	</div>
</div>
<div class="card-panel">
	<img class="responsive-img" src="../public/images/denefield.png">
</div>