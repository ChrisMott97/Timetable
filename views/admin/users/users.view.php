<div class="container">
	<div class="row">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="/admin/users">Users</a></li>
			<li role="presentation"><a href="/admin/lessons">Lessons</a></li>
			<li role="presentation"><a href="/admin/notifications">Notifications</a></li>
		</ul>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6">
			<?php
				Flight::render('admin/users/add.view');
				Flight::render('admin/users/modify.view');
			?>
		</div>
		<div class="col-md-6">
			<?php
				Flight::render('admin/users/read.view');
			?>
		</div>
	</div>
</div>