<ul id="navdrop" class="dropdown-content">
    <li><a href="/settings">Settings</a></li>
    <li><a href="/logout">Logout</a></li>
</ul>
<ul id="teacherdrop" class="dropdown-content">
    <li><a href="/teacher/users">Users</a></li>
    <li><a href="/teacher/lessons">Lessons</a></li>
    <li><a href="/teacher/notifications">Notifications</a></li>
</ul>
<ul id="navdrop_mobile" class="dropdown-content">
    <li><a href="/settings">Settings</a></li>
    <li><a href="/logout">Logout</a></li>
</ul>
<ul id="teacherdrop_mobile" class="dropdown-content">
    <li><a href="/teacher/users">Users</a></li>
    <li><a href="/teacher/lessons">Lessons</a></li>
    <li><a href="/teacher/notifications">Notifications</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">School Planner</a>
        <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/timetable">Timetable</a></li>
            <li><a href="/directions">Directions</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="teacherdrop">Teacher Services<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="/search">Search</a></li>
            <li><a href="#notification">Notifications  <span class="new badge"><?php if($count){echo $count; }; ?></span></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="navdrop"><?= $user->firstname." ".$user->lastname ?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile">
            <li><a href="/">Home</a></li>
            <li><a href="/timetable">Timetable</a></li>
            <li><a href="/directions">Directions</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="teacherdrop_mobile">Teacher Services<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="/search">Search</a></li>
            <li><a href="#notification">Notifications  <span class="new badge"><?php if($count){echo $count; }; ?></span></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="navdrop_mobile"><?= $user->firstname." ".$user->lastname ?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<div class="row">
    <div class="col s6 offset-s3">
        <?php
        if(isset($error)){
        echo '<div class="card-panel red lighten-1">'.$error.'</div>';
        }elseif(isset($warning)){
        echo '<div class="card-panel yellow lighten-1"">'.$warning.'</div>';
        }
        ?>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-fixed-footer" id="notification">
    <div class="modal-content">
        <?php foreach($notifications as $notification):?>
        <div id=<?= "n".$notification->id ?> class="card-panel">
            <blockquote>
            <h5><?= $notification->title; ?>
            <a class="right" onclick=<?= "removeNotificationUser(".$notification->id.")";?>><i class="material-icons">close</i></a></h5>
            <div><?= $notification->description; ?></div>
            </blockquote>
            <div class="right"><?= $notification->fromUser->firstname ," ", $notification->fromUser->lastname; ?></div>
        </div>
        <?php endforeach ?>
    </div>
    <div class="modal-footer">
        <a class="modal-action waves-effect waves-green btn-flat" href="/notifications">Create</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>