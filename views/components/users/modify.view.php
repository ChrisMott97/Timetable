<div class="card-panel">
    <h3 class="center">Modify</h3>
    <div class="row">
        <div class="col s6">
            <div class="input-field">
                <input disabled type="text" name="username" class="validate" placeholder="Select on left" id="username" autocomplete="off">
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input type="hidden" name="userid" class="validate" id="userid" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="firstname" class="validate" id="modify_firstname" placeholder="e.g. John" autocomplete="new-password">
            <label for="firstname">Firstname</label>
        </div>
        <div class="input-field col s6">
            <input type="text" name="lastname" class="validate" id="modify_lastname" placeholder="e.g. Smith" autocomplete="new-password">
            <label for="lastname">Lastname</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="username" class="validate" id="modify_username" placeholder="e.g. jsmith03" autocomplete="new-password">
            <label for="username">Username</label>
        </div>
        <div class="input-field col s6">
            <select id="modify_year" name="year" class="validate">
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
            <label for="year">Year Group</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="password" name="password" class="validate" id="modify_password" placeholder="e.g. tw0th0u54nd" autocomplete="new-password">
            <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
            <select id="modify_permission" name="permission" class="validate">
                <option></option>
                <option value=1>Student</option>
                <option value=3>Teacher</option>
                <option value=5>Admin</option>
            </select>
            <label for="permission">Permission</label>
        </div>
        <button type="submit" onclick="modifyUser()" class="btn">Update</button>
        <button type="submit" onclick="removeUser()" class="btn red right">Remove</button>
    </div>
</div>
