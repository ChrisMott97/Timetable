<div class="container">
	<div class="row">
		<div class="col s6 offset-s3">
			<div class="card-panel">
				<h4>Registration</h4>
				Please contact an admin below to create an account.
			</div>
			<div class="card-panel">
				<ul class="collection">
					<?php foreach($admins as $admin): ?>
					<li class="collection-item center">
						<?= "$admin->firstname $admin->lastname <br>"; ?>
						<?= $admin->username ?>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>