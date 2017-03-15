<div class="container">
	<div class="row">
		<div class="col s12">
			<?php
				Flight::render('components/searchbar.view');
			?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s4">
		<?php
			Flight::render('components/users/teacher.view');
		?>
	</div>
	<div class="col s4">
		<?php
			Flight::render('components/lessons/add.view');
			Flight::render('components/lessons/modify.view');
		?>
	</div>
	<div class="col s4">
		<?php
			Flight::render('components/lessons/read.view');
		?>
	</div>
</div>