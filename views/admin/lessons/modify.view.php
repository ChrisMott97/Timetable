<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Modify Lesson</h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id">Lesson:</label>
                    <select id='modify_id' name='id' style='width: 100%'>;
                        <?php foreach($lessons as $lesson):?>
                        <option value=<?= $lesson->id; ?>><?= "$lesson->subject $lesson->teacher $lesson->room $lesson->year" ; ?></option>);
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <form method="post" action="/admin/users/create"> -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" id="modify_subject" placeholder="e.g. Maths" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="room">Room</label>
                    <input type="text" name="room" class="form-control" id="modify_room" placeholder="e.g. A101" autocomplete="new-password">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Teacher</label>
                    <input type="text" name="Teacher" class="form-control" id="modify_teacher" placeholder="e.g. DGN" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="year">Year Group</label>
                    <select id="modify_year" name="year" class="form-control">
                        <option></option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                        <option value=11>11</option>
                        <option value=12>12</option>
                        <option value=13>13</option>
                        <option value=0>Teacher</option>
                    </select>
                </div>
                <button type="submit" onclick="modifyLesson()" class="btn btn-primary">Update</button>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>