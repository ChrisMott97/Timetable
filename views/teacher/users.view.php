<div class="container">
	<div class="row">
		<div class="col s12">
		<?php
			Flight::render('components/searchbar.view');
		?>
		</div>
	</div>
	<div class="row">
		<div class="col s6">
			<?php
				Flight::render('components/users/add.view');
				Flight::render('components/users/modify.view');
			?>
		</div>
		<div class="col s6">
			<?php
				Flight::render('components/users/read.view');
			?>
		</div>
	</div>
</div>