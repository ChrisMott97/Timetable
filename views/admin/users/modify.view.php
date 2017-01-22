<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Modify User</h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id">User:</label>
                    <select id='modify_id' name='id' style='width: 100%'>;
                        <?php foreach($users as $user):?>
                        <option value=<?= $user->id; ?>><?= $user->firstname . " " . $user->lastname . " (" . $user->username . ")"; ?></option>);
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <form method="post" action="/admin/users/create"> -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="modify_firstname" placeholder="e.g. John" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="modify_lastname" placeholder="e.g. Smith" autocomplete="new-password">
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="modify_username" placeholder="e.g. jsmith03" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="modify_password" placeholder="e.g. tw0th0u54nd" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="permission">Permission</label>
                    <select id="modify_permission" name="permission" class="form-control">
                        <option></option>
                        <option value=1>Student</option>
                        <option value=3>Teacher</option>
                        <option value=5>Admin</option>
                    </select>
                </div>
                <button type="submit" onclick="modifyUser()" class="btn btn-primary">Update</button>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>