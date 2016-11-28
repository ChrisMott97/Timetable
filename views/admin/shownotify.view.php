<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">All Notification</h3></div>
    <div class="panel-body row">
        <div class="col-md-8">
        <ul class="list-group">
            <?php foreach($notifications as $notification): ?>
            <li class="list-group-item"><?= $notification->title;?></li>
            <?php endforeach ?>
        </ul>
        </div>
    </div>
</div>