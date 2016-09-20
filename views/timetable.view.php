<html>

<head>
    <?php require_once('partials/header.php');?>
    <title>SP - Timetable</title>
</head>

<body>
    <?php $x = "<br>"."<br>"."<br>" ?>
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
                            <a href="#" type="button" class="btn btn-primary">Week A</a>
                            <a href="timetable/edit" type="button" class="btn btn-primary">Edit Timetable</a>
                            <a href="#" type="button" class="btn btn-primary">Week B</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
