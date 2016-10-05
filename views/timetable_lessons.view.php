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
                    <form>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Session:</label>
                                <select id='session_edit' style='width: 100%'>;
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Lesson:</label>
                                <select id='lesson_edit' style='width: 100%'>;
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-2">
                        <button class="btn btn-default" onclick="setPeriod()">Set</button>
                    </div>
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
                        <li class="list-group-item">C</li>
                    </ul>
                </div>
            </div>
        </div>
