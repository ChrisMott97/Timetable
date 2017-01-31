<div class="container" id="timetable_edit">
    <div class="panel panel-primary">
        <div class="panel-heading"><h1>Timetable</h1></div>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#weeka" aria-controls="weeka" role="tab" data-toggle="tab">Week A</a></li>
                <li role="presentation"><a href="#weekb" aria-controls="weekb" role="tab" data-toggle="tab">Week B</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="weeka">
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered" style="table-layout: fixed; width: 100%">
                            <tr class="info">
                                <th>A</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th>
                            </tr>
                            <tr>
                                <th id="p1">1</th><td id="MonA1"><?= $timetable->MonA1; ?></td><td id="TueA1"><?= $timetable->TueA1; ?></td><td id="WedA1"><?= $timetable->WedA1; ?></td><td id="ThuA1"><?= $timetable->ThuA1; ?></td><td id="FriA1"><?= $timetable->FriA1; ?></td>
                            </tr>
                            <tr>
                                <th id="p2">2</th><td id="MonA2"><?= $timetable->MonA2; ?></td><td id="TueA2"><?= $timetable->TueA2; ?></td><td id="WedA2"><?= $timetable->WedA2; ?></td><td id="ThuA2"><?= $timetable->ThuA2; ?></td><td id="FriA2"><?= $timetable->FriA2; ?></td>
                            </tr>
                            <tr>
                                <th id="p3">3</th><td id="MonA3"><?= $timetable->MonA3; ?></td><td id="TueA3"><?= $timetable->TueA3; ?></td><td id="WedA3"><?= $timetable->WedA3; ?></td><td id="ThuA3"><?= $timetable->ThuA3; ?></td><td id="FriA3"><?= $timetable->FriA3; ?></td>
                            </tr>
                            <tr>
                                <th id="p4">4</th><td id="MonA4"><?= $timetable->MonA4; ?></td><td id="TueA4"><?= $timetable->TueA4; ?></td><td id="WedA4"><?= $timetable->WedA4; ?></td><td id="ThuA4"><?= $timetable->ThuA4; ?></td><td id="FriA4"><?= $timetable->FriA4; ?></td>
                            </tr>
                            <tr>
                                <th id="p5">5</th><td id="MonA5"><?= $timetable->MonA5; ?></td><td id="TueA5"><?= $timetable->TueA5; ?></td><td id="WedA5"><?= $timetable->WedA5; ?></td><td id="ThuA5"><?= $timetable->ThuA5; ?></td><td id="FriA5"><?= $timetable->FriA5; ?></td>
                            </tr>
                            <tr>
                                <th id="p6">6</th><td id="MonA6"><?= $timetable->MonA6; ?></td><td id="TueA6"><?= $timetable->TueA6; ?></td><td id="WedA6"><?= $timetable->WedA6; ?></td><td id="ThuA6"><?= $timetable->ThuA6; ?></td><td id="FriA6"><?= $timetable->FriA6; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="weekb">
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered" style="table-layout: fixed; width: 100%">
                            <tr class="info">
                                <th>B</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th>
                            </tr>
                            <tr>
                                <th id="p1">1</th><td id="MonB1"><?= $timetable->MonB1; ?></td><td id="TueB1"><?= $timetable->TueB1; ?></td><td id="WedB1"><?= $timetable->WedB1; ?></td><td id="ThuB1"><?= $timetable->ThuB1; ?></td><td id="FriB1"><?= $timetable->FriB1; ?></td>
                            </tr>
                            <tr>
                                <th id="p2">2</th><td id="MonB2"><?= $timetable->MonB2; ?></td><td id="TueB2"><?= $timetable->TueB2; ?></td><td id="WedB2"><?= $timetable->WedB2; ?></td><td id="ThuB2"><?= $timetable->ThuB2; ?></td><td id="FriB2"><?= $timetable->FriB2; ?></td>
                            </tr>
                            <tr>
                                <th id="p3">3</th><td id="MonB3"><?= $timetable->MonB3; ?></td><td id="TueB3"><?= $timetable->TueB3; ?></td><td id="WedB3"><?= $timetable->WedB3; ?></td><td id="ThuB3"><?= $timetable->ThuB3; ?></td><td id="FriB3"><?= $timetable->FriB3; ?></td>
                            </tr>
                            <tr>
                                <th id="p4">4</th><td id="MonB4"><?= $timetable->MonB4; ?></td><td id="TueB4"><?= $timetable->TueB4; ?></td><td id="WedB4"><?= $timetable->WedB4; ?></td><td id="ThuB4"><?= $timetable->ThuB4; ?></td><td id="FriB4"><?= $timetable->FriB4; ?></td>
                            </tr>
                            <tr>
                                <th id="p5">5</th><td id="MonB5"><?= $timetable->MonB5; ?></td><td id="TueB5"><?= $timetable->TueB5; ?></td><td id="WedB5"><?= $timetable->WedB5; ?></td><td id="ThuB5"><?= $timetable->ThuB5; ?></td><td id="FriB5"><?= $timetable->FriB5; ?></td>
                            </tr>
                            <tr>
                                <th id="p6">6</th><td id="MonB6"><?= $timetable->MonB6; ?></td><td id="TueB6"><?= $timetable->TueB6; ?></td><td id="WedB6"><?= $timetable->WedB6; ?></td><td id="ThuB6"><?= $timetable->ThuB6; ?></td><td id="FriB6"><?= $timetable->FriB6; ?></td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group" role="group">
                        <button type="button" id="periodsbutton" class="btn btn-primary">Periods</button>
                        <button type="button" id="timesbutton" class="btn btn-primary">Times</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <button type="button" class="btn btn-success" onclick="timetable_update()">Save</button>
                    </div>
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a href="/timetable"><button type="button" class="btn btn-danger">Return</button></a>
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
                                    <label for="session_edit">Period:</label>
                                    <select id='session_edit' style='width: 100%'>;
                                        <?php foreach($periods as $period):?>
                                        <option value=<?= $period->code; ?>><?= $period->code; ?></option>);
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lesson_edit">Lesson:</label>
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
                    <!-- <a href="/lessons"><button class="btn btn-default">Manage Lessons</button></a> -->
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
</div>