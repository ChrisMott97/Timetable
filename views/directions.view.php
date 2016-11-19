<div class="container">
	<!-- <div class="jumbotron">
		<h1><?= "Directions" ?></h1>
		<p>Below is a basic map of the school.</p>
	</div> -->
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Directions Manager</h4>
				</div>
				<div class="panel-body">
					<div class="row">
                        <form>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">From:</label>
                                    <select id='from' style='width: 100%'>;
                                    	<?php foreach($rooms as $room):?>
                                        <option value=<?= $room->room; ?>><?= $room->room; ?></option>);
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">To:</label>
                                    <select id='to' style='width: 100%'>;
                                    	<?php foreach($rooms as $room):?>
                                        <option value=<?= $room->room; ?>><?= $room->room; ?></option>);
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-success" onclick="dijkstra()">Set</button>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Settings</h4>
				</div>
				<div class="panel-body">
                    
                </div>
			</div>
		</div>
	</div>
</div>