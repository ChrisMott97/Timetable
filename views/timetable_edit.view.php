<html>

<head>
    <?php require_once('partials/header.php');?>
    <title>SP - Timetable</title>
</head>

<body>
    <?php
    $x = 'Free';
    ?>
    <div class="container">

    <!-- Main component for a primary marketing message or call to action -->
        <div class="panel panel-primary">
            <div class="panel-heading"><h1>Timetable</h1></div>
            <div class="panel-body table-responsive">
                <table class="table table-bordered" style="table-layout: fixed; width: 100%">
                    <tr class="info">
                        <th>A</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th>
                    </tr>
                    <tr>
                        <th>1</th><td id="MonA1"><?= $timetable->MonA1; ?></td><td id="TueA1"><?= $timetable->TueA1; ?></td><td id="WedA1"><?= $timetable->WedA1; ?></td><td id="ThuA1"><?= $timetable->ThuA1; ?></td><td id="FriA1"><?= $timetable->FriA1; ?></td>
                    </tr>
                    <tr>
                        <th>2</th><td id="MonA2"><?= $timetable->MonA2; ?></td><td id="TueA2"><?= $timetable->TueA2; ?></td><td id="WedA2"><?= $timetable->WedA2; ?></td><td id="ThuA2"><?= $timetable->ThuA2; ?></td><td id="FriA2"><?= $timetable->FriA2; ?></td>
                    </tr>
                    <tr>
                        <th>3</th><td id="MonA3"><?= $timetable->MonA3; ?></td><td id="TueA3"><?= $timetable->TueA3; ?></td><td id="WedA3"><?= $timetable->WedA3; ?></td><td id="ThuA3"><?= $timetable->ThuA3; ?></td><td id="FriA3"><?= $timetable->FriA3; ?></td>
                    </tr>
                    <tr>
                        <th>4</th><td id="MonA4"><?= $timetable->MonA4; ?></td><td id="TueA4"><?= $timetable->TueA4; ?></td><td id="WedA4"><?= $timetable->WedA4; ?></td><td id="ThuA4"><?= $timetable->ThuA4; ?></td><td id="FriA4"><?= $timetable->FriA4; ?></td>
                    </tr>
                    <tr>
                        <th>5</th><td id="MonA5"><?= $timetable->MonA5; ?></td><td id="TueA5"><?= $timetable->TueA5; ?></td><td id="WedA5"><?= $timetable->WedA5; ?></td><td id="ThuA5"><?= $timetable->ThuA5; ?></td><td id="FriA5"><?= $timetable->FriA5; ?></td>
                    </tr>
                    <tr>
                        <th>6</th><td id="MonA6"><?= $timetable->MonA6; ?></td><td id="TueA6"><?= $timetable->TueA6; ?></td><td id="WedA6"><?= $timetable->WedA6; ?></td><td id="ThuA6"><?= $timetable->ThuA6; ?></td><td id="FriA6"><?= $timetable->FriA6; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Periods
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Times
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group pull-right" role="group" aria-label="...">
                            <button type="button" class="btn btn-primary">Week A</button>
                            <button type="button" class="btn btn-success" onclick="timetable_update()">Save</button>
                            <button type="button" class="btn btn-primary">Week B</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Edit Session</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Session:</label>
                                        <select id='session_edit' style='width: 100%'>;
                                            <?php foreach($periods as $period):?>
                                            <option value=<?= $period->code; ?>><?= $period->code; ?></option>);
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Lesson:</label>
                                        <select id='lesson_edit' style='width: 100%'>;
                                            <?php foreach($lessons as $lesson):?>
                                            <option value=<?= $lesson->id; ?>><?= $lesson->subject." ".$lesson->room ?></option>);
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="btn btn-success" onclick="setPeriod()">Set</button>
                        <a href="/timetable/lessons"><button class="btn btn-default">Manage Lessons</button></a>
                    </div>
                </div>    
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Settings</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>    
            </div>
        </div>
