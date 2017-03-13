<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel">
                <h4>Directions Manager</h4>
                <form method="post">
                    <div class="row">
                        <div class="col s6">
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
                        <div class="col s6">
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
    <div class="row">
    <div class="col s8 offset-s2">
        <div class="card-panel center">
            Select two locations from above to calculate the shortest route!
        </div>
    </div>
    </div>
</div>
<div class="card-panel">
    <img class="responsive-img" src="../public/images/denefield.png">
</div>