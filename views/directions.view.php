<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Directions Manager</h4>
                </div>
                <div class="panel-body">
                    <form method="post">
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