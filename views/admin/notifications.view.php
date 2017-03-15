<div class="container">
	<?php Flight::render('components/searchbar.view'); ?>
</div>
<div class="row">
	<div class="col s5">
		<?php Flight::render('components/users/read.view'); ?>
	</div>
	<div class="col s2">
		<?php Flight::render('components/notifications/add.view'); ?>
	</div>
	<div class="col s5">
		<?php Flight::render('components/notifications/read.view'); ?>
	</div>
</div>