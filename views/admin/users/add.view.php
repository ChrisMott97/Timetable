<div class="card-panel">
    <h3>Add User</h3>
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="firstname" class="validate" id="create_firstname" placeholder="e.g. John" autocomplete="new-password">
            <label for="firstname">Firstname</label>
        </div>
        <div class="input-field col s6">
            <input type="text" name="lastname" class="validate" id="create_lastname" placeholder="e.g. Smith" autocomplete="new-password">
            <label for="lastname">Lastname</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="text" name="username" class="validate" id="create_username" placeholder="e.g. jsmith03" autocomplete="new-password">
            <label for="username">Username</label>
        </div>
        <div class="input-field col s6">
            <select id="create_year" name="year">
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
                <option value=11>11</option>
                <option value=12>12</option>
                <option value=13>13</option>
                <option value=0>Teacher</option>
            </select>
            <label>Year Group</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input type="password" name="password" class="validate" id="create_password" placeholder="e.g. tw0th0u54nd" autocomplete="new-password">
            <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
            <button type="submit" onclick="createUser()" class="btn btn-primary right">Create</button>
        </div>
    </div>
</div>