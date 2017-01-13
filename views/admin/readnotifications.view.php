<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">All Notification</h3></div>
    <div class="panel-body row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover" style="table-layout: fixed; width: 100%">
                    <tr class="info">
                        <th>Title</th><th style="width: 25%">Username</th><th style="width: 15%">Year</th><th class="danger" style="width: 10%"></th>
                    </tr>
                    <?php foreach($notifications as $notification): ?>
                    <tr>
                        <td><?= $notification->title ?></td>
                        <td><?= $notification->user->username ?></td>
                        <td><?= $notification->user->year ?></td>
                        <td>
                            <!-- <form id="notifyremove" method="post" action="/admin/notifications/remove"> -->
                                <input type="hidden" id="id" name="id" class="form-control" autocomplete="off" value=<?= $notification->id; ?>>
                                <a onclick=<?= "removeNotification(".$notification->id.")";?>><span class="glyphicon glyphicon-remove" id="sizing-addon3"></span></a>
                                <!-- <input type="submit" value="X" /> -->
                                <!-- <button type="submit" class="btn btn-primary">Remove</button> -->
                            <!-- </form> -->
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</div>