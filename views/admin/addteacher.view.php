<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title">Add Teacher</h3></div>
    <div class="panel-body row">
        <form method="post" action="admin/addteacher">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Initial</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="e.g. J" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="e.g. Smith" autocomplete="off">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="e.g. jsmith03" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="e.g. tw0th0u54nd" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>