<div class="container">
	<div class="row">
		<div class="col-md-12">
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
					<div class="row">
						<div class="col-md-6">
							<ul class="list-group">
								<li class="list-group-item"><h4>Users</h4></li>
							</ul>
							<ul class="search_list list-group">
								<?php foreach($users as $user): ?>
								<li class="list-group-item"><?= "$user->firstname $user->lastname <br> $user->username"; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-group">
								<li class="list-group-item"><h4>Lessons</h4></li>
							</ul>
							<ul class="search_list list-group">
								<?php foreach($lessons as $lesson): ?>
								<li class="list-group-item"><?= "$lesson->subject $lesson->room <br> $lesson->teacher"; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>