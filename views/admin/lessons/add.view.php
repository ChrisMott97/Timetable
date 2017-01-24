<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Add Lesson</h3></div>
    <div class="panel-body row">
        <!-- <form method="post" action="/admin/users/create"> -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" id="create_subject" placeholder="e.g. John" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="room">Room</label>
                    <input type="text" name="room" class="form-control" id="create_room" placeholder="e.g. Smith" autocomplete="new-password">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="teacher">Teacher</label>
                    <input type="text" name="teacher" class="form-control" id="create_teacher" placeholder="e.g. jsmith03" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="year">Year Group</label>
                    <select id="create_year" name="year" class="form-control">
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>Teacher</option>
                    </select>
                </div>
                <button type="submit" onclick="createLesson()" class="btn btn-primary">Create</button>
            </div>
        <!-- </form> -->
    </div>
</div>