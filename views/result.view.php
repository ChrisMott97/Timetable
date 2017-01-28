
<div class="container" >
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
                    <form method="post" action="/directions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">From:</label>
                                    <select id='from' name="from" style='width: 100%'>;
                                        <?php foreach($buildings as $building => $rooms):?>
                                        <optgroup label=<?= $building?>>
                                            <?php foreach($rooms as $room):?>
                                            <option value=<?= $room->room; ?>><?= $room->room; ?></option>);
                                            <?php endforeach ?>
                                        </optgroup>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">To:</label>
                                    <select id='to' name="to" style='width: 100%'>;
                                        <?php foreach($buildings as $building => $rooms):?>
                                        <optgroup label=<?= $building?>>
                                            <?php foreach($rooms as $room):?>
                                            <option value=<?= $room->room; ?>><?= $room->room; ?></option>);
                                            <?php endforeach ?>
                                        </optgroup>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Calculate</button>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-body">
                    <?= "$output <br> $output2" ?>
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
<canvas id="myCanvas" width="1600" height="800" style="position: absolute;">
    Sorry, your browser doesn't support canvas technology
</canvas>