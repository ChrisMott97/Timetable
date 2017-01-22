<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Create Notification</h3></div>
    <div class="panel-body row">
        <!-- <form method="post" action="/admin/notifications/create"> -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="userids">User:</label>
                    <select id='userids' name="userids" style='width: 100%'>;
                        <?php foreach($users as $user):?>
                        <option value=<?= $user->id; ?>><?= $user->firstname.' '.$user->lastname; ?></option>);
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="e.g. Maths has been moved!" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="title">Details</label>
                    <textarea name="details" style="height:200px;" class="form-control" id="details" placeholder="e.g. The lesson has been moved due to maintenance in our normal room!" autocomplete="off"></textarea>
                </div>
                <button type="submit" onclick="createNotification();" class="btn btn-primary">Create</button>
            </div>
        <!-- </form> -->
    </div>
</div>