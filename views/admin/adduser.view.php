<div class="panel panel-primary">
    <div class="panel-heading">
        <h2>Add User</h2>
    </div>
    <div class="panel-body row">
        <form method="post" action="admin/adduser">
            <div class="col-md-6">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="e.g. John">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="e.g. Smith">
            </div>
            <div class="form-group">
                <label for="year">Year Group</label>
                <select id="year" name="year" class="form-control">
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
                <input type="text" name="username" class="form-control" id="username" placeholder="e.g. jsmith03">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="e.g. tw0th0u54nd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>       
</div>