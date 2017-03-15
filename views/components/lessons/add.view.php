<div class="card-panel">
    <h3 class="center">Add</h3>
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="subject" class="form-control" id="create_subject" placeholder="e.g. John" autocomplete="new-password">
            <label for="subject">Subject</label>
        </div>
        <div class="input-field col s6">
            <input type="text" name="room" class="form-control" id="create_room" placeholder="e.g. Smith" autocomplete="new-password">
            <label for="room">Room</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input disabled type="text" name="teacher" class="form-control" id="create_teacher" placeholder="e.g. jsmith03" autocomplete="new-password"
                <?php if(isset($teacher)){echo "value = $teacher";}?>
            >
            <label for="teacher">Teacher</label>
        </div>
        <div class="input-field col s6">
            <select id="create_year" name="year" class="form-control">
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
            </select>
            <label for="year">Year Group</label>
        </div>
        <button type="submit" onclick="createLesson()" class="btn btn-primary">Create</button>
    </div>
</div>