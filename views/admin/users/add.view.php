<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Add User</h3></div>
    <div class="panel-body row">
        <!-- <form method="post" action="/admin/users/create"> -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="create_firstname" placeholder="e.g. John" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="create_lastname" placeholder="e.g. Smith" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="year">Year Group</label>
                    <select id="create_year" name="year" class="form-control">
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
                    <input type="text" name="username" class="form-control" id="create_username" placeholder="e.g. jsmith03" autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="create_password" placeholder="e.g. tw0th0u54nd" autocomplete="new-password">
                </div>
                <button type="submit" onclick="createUser()" class="btn btn-primary">Create</button>
            </div>
        <!-- </form> -->
    </div>
</div>