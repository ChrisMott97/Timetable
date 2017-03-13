<div class="card-panel">
    <h3>Search</h3>
    <div class="input-field">
        <input id="search" data-list=".search_list" type="search" required>
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
    </div>
    <ul class="collection with-header">
        <li class="collection-header">
            <h5>
            <div class="row">
                <div class="col s4">Name</div>
                <div class="col s4">Username</div>
                <div class="col s3">Year</div>
            </div>
            </h5>
        </li>
    </ul>
    <ul class="search_list collection with-header">
        <?php foreach($users as $user): ?>
        <li class="collection-item">
            <div class="row">
                <div class="col s4">
                    <?= "$user->firstname $user->lastname"; ?>
                </div>
                <div class="col s4">
                    <?= $user->username; ?>
                </div>
                <div class="col s3">
                    <?php
                    if($user->year == 0){
                    echo 'Teacher';
                    }else{
                    echo $user->year;
                    }
                    ?>
                </div>
                <div class="col s1">
                    <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $user->id; ?>>
                    <a href="#!" onclick=<?= "removeUser(".$user->id.")";?>><i class="material-icons">remove_circle_outline</i></a>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>