<div class="container">
    <div class="card-panel">
        <div class="input-field">
            <input id="search" data-list=".search_list" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
        </div>
    </div>
    <div class="row">
        <div class="col s6">
            <div class="card-panel">
                <h3 class="center">Users</h3>
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
                <ul class="search_list collection">
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
                                <input name="users" onclick="selectUser('<?= $user->username; ?>', <?= $user->id;?>)" type="radio" id=<?= "r_"+$user->id; ?> />
                                <label for=<?= "r_"+$user->id; ?>></label>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col s6">
            <div class="card-panel">
                <h3 class="center">Create</h3>
                <div class="row">
                    <div class="col s12">
                        <div class="input-field">
                            <input disabled type="text" name="username" class="validate" placeholder="Select on left" id="username" autocomplete="off">
                            <label for="username">Username</label>
                        </div>
                        <div class="input-field">
                            <input type="hidden" name="userid" class="validate" id="userid" autocomplete="off">
                        </div>
                        <div class="input-field">
                            <input type="text" name="title" class="validate" id="title" placeholder="e.g. Maths has been moved!" autocomplete="off">
                            <label for="title">Title</label>
                        </div>
                        <div class="input-field">
                            <textarea name="details" class="validate materialize-textarea" id="details" placeholder="e.g. The lesson has been moved due to maintenance in our normal room!" autocomplete="off"></textarea>
                            <label for="title">Details</label>
                        </div>
                        <button type="submit" onclick="createNotification();" class="btn waves-effect waves-light">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>