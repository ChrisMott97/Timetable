<div class="card-panel">
    <h3 class="center">Lessons</h3>
    <ul class="collection with-header">
        <li class="collection-header">
            <b>
            <div class="row">
                <div class="col s3">Subject</div>
                <div class="col s3">Teacher</div>
                <div class="col s3">Year</div>
                <div class="col s2">Room</div>
            </div>
            </b>
        </li>
    </ul>
    <ul class="search_list collection">
        <?php foreach($lessons as $lesson): ?>
        <li class="collection-item">
            <div class="row">
                <div class="col s3">
                    <?= $lesson->subject; ?>
                </div>
                <div class="col s3">
                    <?= $lesson->teacher; ?>
                </div>
                <div class="col s3">
                    <?= $lesson->year; ?>
                </div>
                <div class="col s2">
                    <?= $lesson->room; ?>
                </div>
                <div class="col s1">
                    <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $lesson->id; ?>>
                    <input name="lessons" onclick="selectLesson('<?= "$lesson->subject $lesson->teacher $lesson->year $lesson->room"; ?>', <?= $lesson->id;?>)" type="radio" id=<?= "r_"+$lesson->id; ?> />
                    <label for=<?= "r_"+$lesson->id; ?>></label>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>