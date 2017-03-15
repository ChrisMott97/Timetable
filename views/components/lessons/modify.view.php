<div class="card-panel">
    <h3 class="center">Modify</h3>
    <div class="row">
        <div class="col s6">
            <div class="input-field">
                <input disabled type="text" name="lesson" class="validate" placeholder="Select on left" id="lesson" autocomplete="off">
                <label for="lesson">Lesson</label>
            </div>
            <div class="input-field">
                <input type="hidden" name="lessonid" class="validate" id="modify_id" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="subject" class="form-control" id="modify_subject" placeholder="e.g. Maths" autocomplete="new-password">
            <label for="subject">Subject</label>
        </div>
        <div class="input-field col s6">
            <input type="text" name="room" class="form-control" id="modify_room" placeholder="e.g. A101" autocomplete="new-password">
            <label for="room">Room</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input disabled <?php if(isset($teacher)){echo "value=$teacher";}?> type="text" name="Teacher" class="form-control" id="modify_teacher" placeholder="e.g. DGN" autocomplete="new-password">
            <label for="username">Teacher</label>
        </div>
        <div class="input-field col s6">
            <select id="modify_year" name="year" class="form-control">
                <option></option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
                <option value=11>11</option>
                <option value=12>12</option>
                <option value=13>13</option>
            </select>
            <label for="year">Year Group</label>
        </div>
        <button type="submit" onclick="modifyLesson()" class="btn">Update</button>
        <button type="submit" onclick="removeLesson()" class="btn red right">Remove</button>
    </div>
</div>