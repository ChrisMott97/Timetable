<html>

<head>
    <?php require_once('partials/header.php');?>
    <title>SP - Lessons</title>
</head>

<body>
    <div class="container">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Add Lesson</h4>
                </div>
                <div class="panel-body">
                   <div class="alert alert-danger" role="alert"><b>Warning:</b> Ensure the lesson you're about to add <b>does not</b> already exist by using the search utility on the right.</div>
                    <form method="post" action="/timetable/lessons/create">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="e.g. IT">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="room">Room</label>
                                <input type="text" name="room" class="form-control" id="room" placeholder="e.g. M119">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="teacher">Teacher</label>
                                <input type="text" name="teacher" class="form-control" id="teacher" placeholder="e.g. RYA">
                            </div>
                        </div>
                        <button class="btn btn-success center-block" type="submit">Add</button>
                    </form>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Remove Lesson</h4>
                </div>
                <div class="panel-body">
                   <div class="alert alert-danger" role="alert"><b>Warning:</b> The following action <b>cannot</b> be undone!</div>
                    <form method="post" action="/timetable/lessons/delete">
                        <div class="form-group">
                            <label for="lesson_edit">Lesson:</label>
                            <select name='lesson_edit' id='lesson_edit' style='width: 100%'>;
                                <?php foreach($lessons as $lesson):?>
                                <option value=<?= $lesson->id; ?>><?= $lesson->subject." ".$lesson->room ?></option>);
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button class="btn btn-danger center-block" type="submit">Remove</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Search lessons</h4>
                </div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-search" id="sizing-addon3"></span>
                        <input id="search" name="search" type="text" class="form-control" data-list=".default_list" placeholder="Search..." autocomplete="off">
                    </div>
                    <br>
                    <ul class="default_list list-group">
                        <?php foreach($lessons as $lesson):?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <?= $lesson->subject;?>
                                </div>
                                <div class="col-md-4">
                                    <?= $lesson->room;?>
                                </div>
                                <div class="col-md-4">
                                    <?= $lesson->teacher;?>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
