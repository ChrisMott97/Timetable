<div class="card-panel">
    <h3 class="center">Notifications</h3>
    <ul class="collection with-header">
        <li class="collection-header">
            <b>
            <div class="row">
                <div class="col s5">Title</div>
                <div class="col s2">To</div>
                <div class="col s2">From</div>
                <div class="col s2">Year</div>
            </div>
            </b>
        </li>
    </ul>
    <ul class="search_list collection">
        <?php foreach($notifications as $notification): ?>
        <li class="collection-item">
            <div class="row">
                <div class="col s5">
                    <?= $notification->title; ?>
                </div>
                <div class="col s2">
                    <?= $notification->toUser->username; ?>
                </div>
                <div class="col s2">
                    <?= $notification->fromUser->username; ?>
                </div>
                <div class="col s2">
                    <?php
                    if($notification->toUser->year == 0){
                    echo 'Teacher';
                    }else{
                    echo $notification->toUser->year;
                    }
                    ?>
                </div>
                <div class="col s1">
                    <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $notification->id; ?>>
                    <a onclick=<?= "removeNotification(".$notification->id.")";?>><i class="material-icons">remove_circle_outline</i></a>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>