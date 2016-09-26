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
                        <th>1</th><td id="MonA1"></td><td id="TueA1"></td><td id="WedA1"></td><td id="ThuA1"></td><td id="FriA1"></td>
                    </tr>
                    <tr>
                        <th>2</th><td id="MonA2"></td><td id="TueA2"></td><td id="WedA2"></td><td id="ThuA2"></td><td id="FriA2"></td>
                    </tr>
                    <tr>
                        <th>3</th><td id="MonA3"></td><td id="TueA3"></td><td id="WedA3"></td><td id="ThuA3"></td><td id="FriA3"></td>
                    </tr>
                    <tr>
                        <th>4</th><td id="MonA4"></td><td id="TueA4"></td><td id="WedA4"></td><td id="ThuA4"></td><td id="FriA4"></td>
                    </tr>
                    <tr>
                        <th>5</th><td id="MonA5"></td><td id="TueA5"></td><td id="WedA5"></td><td id="ThuA5"></td><td id="FriA5"></td>
                    </tr>
                    <tr>
                        <th>6</th><td id="MonA6"></td><td id="TueA6"></td><td id="WedA6"></td><td id="ThuA6"></td><td id="FriA6"></td>
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
                                <select id='session_edit' style='width: 100%'>;
                                    <?php foreach($periods as $period):?>
                                    <option value=<?= $period->code; ?>><?= $period->code; ?></option>);
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Lesson:</label>
                                <select id='lesson_edit' style='width: 100%'>;
                                    <?php foreach($timetable as $lesson):?>
                                    <option value=<?= $lesson->id; ?>><?= $lesson->subject." ".$lesson->room ?></option>);
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6">
                            <button class="btn btn-default" onclick="setPeriod()">Set</button>
                    </div>
                </div>
            </div>
        </div>
    
