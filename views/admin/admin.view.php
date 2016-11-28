<div class="container">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
		<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
		<li role="presentation"><a href="#subjects" aria-controls="subjects" role="tab" data-toggle="tab">Subjects</a></li>
		<li role="presentation"><a href="#notify" aria-controls="notify" role="tab" data-toggle="tab">Notifications</a></li>
	</ul>
</div>
<br>
<div class="tab-content">
	<div role="tabpanel" class="tab-pane fade in" id="overview">
	</div>
	<div role="tabpanel" class="tab-pane fade in active" id="users">
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<?php Flight::render('admin/adduser.view'); ?>
			</div>
			<div class="col-md-5">
				<?php Flight::render('admin/addteacher.view'); ?>
			</div>
		</div>
	</div>
	<div role="tabpanel" class="tab-pane fade in" id="subjects">
	</div>
	<div role="tabpanel" class="tab-pane fade in" id="notify">
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
				<?php Flight::render('admin/createnotify.view'); ?>
			</div>
			<div class="col-md-7">
				<?php Flight::render('admin/shownotify.view'); ?>
			</div>
		</div>
	</div>
</div>