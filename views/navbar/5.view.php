<ul id="navdrop" class="dropdown-content">
  <li><a href="/settings">Settings</a></li>
  <li><a href="/logout">Logout</a></li>
</ul>
<ul id="admindrop" class="dropdown-content">
  <li><a href="/admin/users">Users</a></li>
  <li><a href="/admin/lessons">Lessons</a></li>
  <li><a href="/admin/notifications">Notifications</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">School Planner</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/timetable">Timetable</a></li>
            <li><a href="/directions">Directions</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="admindrop">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/search">Search</a></li>
            <li><a href="#notification">Notifications  <span class="new badge"><?php if($count){echo $count; }; ?></span></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="navdrop"><?= $user->firstname." ".$user->lastname ?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
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
<div class="modal" id="notification">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php foreach($notifications as $notification):?>
            <div id=<?= "n".$notification->id ?> class="card-panel">
                <h5><?= $notification->title; ?>
                <a class="right" href="#!" onclick=<?= "removeNotification(".$notification->id.")";?>><i class="material-icons">close</i></a></h5>
                <div class="panel-body"><?= $notification->description; ?></div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="modal-footer">
            <a class="modal-action waves-effect waves-green btn-flat" href="/notifications">Create Notification</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
</div>