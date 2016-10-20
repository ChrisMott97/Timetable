<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Search</h4>
				</div>
				<div class="panel-body">
					<div class="input-group">
						<span class="input-group-addon glyphicon glyphicon-search" id="sizing-addon3"></span>
						<input id="search" name="search" type="text" class="form-control" data-list=".search_list" placeholder="Search..." autocomplete="off">
					</div>
					<br>
					<ul class="search_list list-group">
						<?php foreach($users as $user): ?>
						<li class="list-group-item"><?= "$user->firstname $user->lastname <br> $user->username"; ?></li>
						<?php endforeach; ?>
						<?php foreach($lessons as $lesson): ?>
						<li class="list-group-item"><?= "$lesson->subject $lesson->room <br> $lesson->teacher"; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Filter</h4>
				</div>
				<div class="panel-body">
					<div>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
							<li role="presentation"><a href="#subjects" aria-controls="subjects" role="tab" data-toggle="tab">Subjects</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="users">
								
							</div>
							<div role="tabpanel" class="tab-pane" id="subjects">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>