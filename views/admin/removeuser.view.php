<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Remove User</h3></div>
    <div class="panel-body row">
        <div class="col-md-6">
            <!-- <form method="post" action="/admin/users/remove"> -->
                <div class="form-group">
                    <label for="id">User:</label>
                    <!-- <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" name="id" class="form-control" id="id" autocomplete="off">
                    </div> -->
                    <select id='id' name='id' style='width: 100%'>;
                        <?php foreach($users as $user):?>
                        <option value=<?= $user->id; ?>><?= $user->firstname . " " . $user->lastname . " (" . $user->username . ")"; ?></option>);
                        <?php endforeach ?>
                    </select>
                </div>
                <button type="submit" onclick=<?= "removeUser(".$user->id.")"; ?> class="btn btn-primary">Remove</button>
            <!-- </form> -->
        </div>
    </div>
</div>