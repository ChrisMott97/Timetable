<div class="card-panel">
    <h3 class="center">Teachers</h3>
    <ul class="collection with-header">
        <li class="collection-header">
            <b>
            <div class="row">
                <div class="col s4">Name</div>
                <div class="col s4">Username</div>
                <div class="col s3">Year</div>
            </div>
            </b>
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
                    <input name="users" onclick="<?php if(isset($teacher)){echo 'selectTeacherLimitted';}else{echo 'selectTeacher';}?>('<?= $user->username; ?>')" type="radio" id=<?= "r_"+$user->id; ?> />
                    <label for=<?= "r_"+$user->id; ?>></label>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>