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
                <table class="table table-bordered">
                    <tr class="info">
                        <th>A</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th>
                    </tr>
                    <tr>
                        <th>1</th><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td>
                    </tr>
                    <tr>
                        <th>2</th><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td>
                    </tr>
                    <tr>
                        <th>3</th><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td>
                    </tr>
                    <tr>
                        <th>4</th><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td>
                    </tr>
                    <tr>
                        <th>5</th><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td>
                    </tr>
                    <tr>
                        <th>6</th><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td><td><?= $x ?></td>
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
                            <button type="button" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-primary">Week B</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Edit Session</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Session:</label>
                                <select class='session_edit' style='width: 100%'>;
                                    <?php foreach($periods as $period):?>
                                    <option value=<?= $period->code; ?>><?= $period->code; ?></option>);
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Lesson:</label>
                                <select class='lesson_edit' style='width: 100%'>;
                                    <?php foreach($timetable as $lesson):?>
                                    <option value=<?= $lesson->id; ?>><?= $lesson->year." ".$lesson->subject." ".$lesson->room." ".$lesson->teacher; ?></option>);
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-default">Set</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
