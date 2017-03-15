<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card-panel">
				<h4>Search</h4>
				<div class="input-field">
					<input id="search" data-list=".search_list" type="search" required>
					<label class="label-icon" for="search"><i class="material-icons">search</i></label>
					<i class="material-icons">close</i>
				</div>
				<br>
				<div class="row">
					<div class="col s6">
						<ul class="collection">
							<li class="collection-item"><h4>Users</h4></li>
						</ul>
						<ul class="search_list collection">
							<?php foreach($users as $user): ?>
							<li class="collection-item"><?= "$user->firstname $user->lastname <br> $user->username"; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="col s6">
						<ul class="collection">
							<li class="collection-item"><h4>Lessons</h4></li>
						</ul>
						<ul class="search_list collection">
							<?php foreach($lessons as $lesson): ?>
							<li class="collection-item"><?= "$lesson->subject $lesson->room <br> $lesson->teacher"; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>