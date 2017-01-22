<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Search</h3></div>
    <div class="panel-body">
        <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-search" id="sizing-addon3"></span>
            <input id="search" name="search" type="text" class="form-control" data-list=".search_list" placeholder="Search..." autocomplete="off">
        </div>
        <br>
        <ul class="search_list list-group">
            <?php foreach($users as $user): ?>
            <li class="list-group-item">
                <div class="row">
                <div class="col-md-4">
                    <?= "$user->firstname $user->lastname"; ?>
                </div>
                <div class="col-md-4">
                    <?= $user->username; ?>
                </div>
                <div class="col-md-3">
                    <?php
                        if($user->year == 0){
                            echo 'Teacher';
                        }else{
                            echo $user->year;
                        }
                    ?>
                </div>
                <div class="col-md-1">
                    <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $user->id; ?>>
                    <a onclick=<?= "removeUser(".$user->id.")";?>><span class="glyphicon glyphicon-remove" id="sizing-addon3"></span></a>
                </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>