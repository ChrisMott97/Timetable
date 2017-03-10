<div class="container">
	<div class="row">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="/admin/users">Users</a></li>
			<li role="presentation"><a href="/admin/lessons">Lessons</a></li>
			<li role="presentation" class="active"><a href="/admin/notifications">Notifications</a></li>
		</ul>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
			<?php Flight::render('admin/notifications/create.view'); ?>
		</div>
		<div class="col-md-8">
			<?php Flight::render('admin/notifications/read.view'); ?>
		</div>
	</div>
</div>