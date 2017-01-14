<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Modify User</h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id">User:</label>
                    <select id='id' name='id' style='width: 100%'>;
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
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="e.g. John" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="e.g. Smith" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="year">Year Group</label>
                    <select id="year" name="year" class="form-control">
                        <option>Teacher</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="e.g. jsmith03" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="e.g. tw0th0u54nd" autocomplete="new-password">
                </div>
                <button type="submit" onclick="modifyUser()" class="btn btn-primary">Create</button>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>