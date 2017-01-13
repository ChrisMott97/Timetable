<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="/admin/users">Users</a></li>
  <li role="presentation"><a href="/admin/lessons">Lessons</a></li>
  <li role="presentation" class="active"><a href="/admin/notifications">Notifications</a></li>
</ul>
</div>
<br>
<div class="row">
	<div class="col-md-3 col-md-offset-1">
		<?php Flight::render('admin/createnotification.view'); ?>
	</div>
	<div class="col-md-7">
		<?php Flight::render('admin/readnotifications.view'); ?>
	</div>
</div>