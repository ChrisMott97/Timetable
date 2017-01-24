<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Search</h3></div>
    <div class="panel-body">
        <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-search" id="sizing-addon3"></span>
            <input id="search" name="search" type="text" class="form-control" data-list=".search_list" placeholder="Search..." autocomplete="off">
        </div>
        <br>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-3">
                    <h4>Subject</h4>
                </div>
                <div class="col-md-3">
                    <h4>Teacher</h4>
                </div>
                <div class="col-md-3">
                    <h4>Year</h4>
                </div>
                <div class="col-md-2">
                    <h4>Room</h4>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </li>
        <ul class="search_list list-group">
            <?php foreach($lessons as $lesson): ?>
            <li class="list-group-item">
                <div class="row">
                <div class="col-md-3">
                    <?= $lesson->subject; ?>
                </div>
                <div class="col-md-3">
                    <?= $lesson->teacher; ?>
                </div>
                <div class="col-md-3">
                    <?= $lesson->year; ?>
                </div>
                <div class="col-md-2">
                    <?= $lesson->room; ?>
                </div>
                <div class="col-md-1">
                    <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $lesson->id; ?>>
                    <a onclick=<?= "removeLesson(".$lesson->id.")";?>><span class="glyphicon glyphicon-remove" id="sizing-addon3"></span></a>
                </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>