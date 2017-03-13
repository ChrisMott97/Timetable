<div class="container">
	<div class="row">
		<div class="col s6">
			<?php
				Flight::render('admin/users/add.view');
				Flight::render('admin/users/modify.view');
			?>
		</div>
		<div class="col s6">
			<?php
				Flight::render('admin/users/read.view');
			?>
		</div>
	</div>
</div>