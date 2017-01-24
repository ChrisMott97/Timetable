<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">School Planner</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/timetable">Timetable</a></li>
                <li><a href="/directions">Directions</a></li>
                <li><a href="/teacher">Teacher</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/search">Search</a></li>
                <li><a href="#" data-toggle="modal" data-target="#notifications">Notifications  <span class="badge"><?php if($count){echo $count; }; ?></span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $user->firstname." ".$user->lastname ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/settings">Settings</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php 
        if(isset($error)){
            echo '<div class="alert alert-danger">'.$error.'</div>';
        }elseif(isset($warning)){
            echo '<div class="alert alert-warning">'.$warning.'</div>';
        }
        ?>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="notifications" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Notifications</h4>
            </div>
            <div class="modal-body">
                <?php foreach($notifications as $notification):?>
                <div id=<?= "n".$notification->id ?> class="panel panel-primary">
                    <div class="panel-heading"><?= $notification->title; ?>
                        <button type="button" class="close"
                        data-target=<?= "#n".$notification->id ?>
                        data-dismiss="alert" onclick=<?= "removeNotification(".$notification->id.")";?>>
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="panel-body"><?= $notification->description; ?></div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>