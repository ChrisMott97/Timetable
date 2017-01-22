<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">Search</h3></div>
    <div class="panel-body">
        <div class="input-group">
            <span class="input-group-addon glyphicon glyphicon-search" id="sizing-addon3"></span>
            <input id="search" name="search" type="text" class="form-control" data-list=".search_list" placeholder="Search..." autocomplete="off">
        </div>
        <br>
        <ul class="search_list list-group">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Title</h4>
                    </div>
                    <div class="col-md-3">
                        <h4>Username</h4>
                    </div>
                    <div class="col-md-2">
                        <h4>Year</h4>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </li>
            <?php foreach($notifications as $notification): ?>
            <li class="list-group-item">
                <div class="row">
                <div class="col-md-6">
                    <?= $notification->title; ?>
                </div>
                <div class="col-md-3">
                    <?= $notification->user->username; ?>
                </div>
                <div class="col-md-2">
                    <?php
                        if($notification->user->year == 0){
                            echo 'Teacher';
                        }else{
                            echo $notification->user->year;
                        }
                    ?>
                </div>
                <div class="col-md-1">
                    <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $notification->id; ?>>
                    <a onclick=<?= "removeNotification(".$notification->id.")";?>><span class="glyphicon glyphicon-remove" id="sizing-addon3"></span></a>
                </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>