<div class="container">
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
                        <table class="table table-bordered table-condensed" style="table-layout: fixed; width: 100%">
                            <tr class="info">
                                <th>A</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th>
                            </tr>
                            <tr>
                                <th id="p1">1 <br></th><td id="MonA1"><?= $timetable->MonA1->lessonName; echo "<br>"; echo $timetable->MonA1->lessonRoom ?></td><td id="TueA1"><?= $timetable->TueA1->lessonName; echo "<br>"; echo $timetable->TueA1->lessonRoom ?></td><td id="WedA1"><?= $timetable->WedA1->lessonName; echo "<br>"; echo $timetable->WedA1->lessonRoom ?></td><td id="ThuA1"><?= $timetable->ThuA1->lessonName; echo "<br>"; echo $timetable->ThuA1->lessonRoom ?></td><td id="FriA1"><?= $timetable->FriA1->lessonName; echo "<br>"; echo $timetable->FriA1->lessonRoom ?></td>
                            </tr>
                            <tr>
                                <th id="p2">2 <br></th><td id="MonA2"><?= $timetable->MonA2->lessonName; echo "<br>"; echo $timetable->MonA2->lessonRoom ?></td><td id="TueA2"><?= $timetable->TueA2->lessonName; echo "<br>"; echo $timetable->TueA2->lessonRoom ?></td><td id="WedA2"><?= $timetable->WedA2->lessonName; echo "<br>"; echo $timetable->WedA2->lessonRoom ?></td><td id="ThuA2"><?= $timetable->ThuA2->lessonName; echo "<br>"; echo $timetable->ThuA2->lessonRoom ?></td><td id="FriA2"><?= $timetable->FriA2->lessonName; echo "<br>"; echo $timetable->FriA2->lessonRoom ?></td>
                            </tr>
                            <tr>
                                <th id="p3">3 <br></th><td id="MonA3"><?= $timetable->MonA3->lessonName; echo "<br>"; echo $timetable->MonA3->lessonRoom ?></td><td id="TueA3"><?= $timetable->TueA3->lessonName; echo "<br>"; echo $timetable->TueA3->lessonRoom ?></td><td id="WedA3"><?= $timetable->WedA3->lessonName; echo "<br>"; echo $timetable->WedA3->lessonRoom ?></td><td id="ThuA3"><?= $timetable->ThuA3->lessonName; echo "<br>"; echo $timetable->ThuA3->lessonRoom ?></td><td id="FriA3"><?= $timetable->FriA3->lessonName; echo "<br>"; echo $timetable->FriA3->lessonRoom ?></td>
                            </tr>
                            <tr>
                                <th id="p4">4 <br></th><td id="MonA4"><?= $timetable->MonA4->lessonName; echo "<br>"; echo $timetable->MonA4->lessonRoom ?></td><td id="TueA4"><?= $timetable->TueA4->lessonName; echo "<br>"; echo $timetable->TueA4->lessonRoom ?></td><td id="WedA4"><?= $timetable->WedA4->lessonName; echo "<br>"; echo $timetable->WedA4->lessonRoom ?></td><td id="ThuA4"><?= $timetable->ThuA4->lessonName; echo "<br>"; echo $timetable->ThuA4->lessonRoom ?></td><td id="FriA4"><?= $timetable->FriA4->lessonName; echo "<br>"; echo $timetable->FriA4->lessonRoom ?></td>
                            </tr>
                            <tr>
                                <th id="p5">5 <br></th><td id="MonA5"><?= $timetable->MonA5->lessonName; echo "<br>"; echo $timetable->MonA5->lessonRoom ?></td><td id="TueA5"><?= $timetable->TueA5->lessonName; echo "<br>"; echo $timetable->TueA5->lessonRoom ?></td><td id="WedA5"><?= $timetable->WedA5->lessonName; echo "<br>"; echo $timetable->WedA5->lessonRoom ?></td><td id="ThuA5"><?= $timetable->ThuA5->lessonName; echo "<br>"; echo $timetable->ThuA5->lessonRoom ?></td><td id="FriA5"><?= $timetable->FriA5->lessonName; echo "<br>"; echo $timetable->FriA5->lessonRoom ?></td>
                            </tr>
                            <tr>
                                <th id="p6">6 <br></th><td id="MonA6"><?= $timetable->MonA6->lessonName; echo "<br>"; echo $timetable->MonA6->lessonRoom ?></td><td id="TueA6"><?= $timetable->TueA6->lessonName; echo "<br>"; echo $timetable->TueA6->lessonRoom ?></td><td id="WedA6"><?= $timetable->WedA6->lessonName; echo "<br>"; echo $timetable->WedA6->lessonRoom ?></td><td id="ThuA6"><?= $timetable->ThuA6->lessonName; echo "<br>"; echo $timetable->ThuA6->lessonRoom ?></td><td id="FriA6"><?= $timetable->FriA6->lessonName; echo "<br>"; echo $timetable->FriA6->lessonRoom ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="weekb">
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered table-condensed" style="table-layout: fixed; width: 100%">
                            <tr class="info">
                                <th>B</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th>
                            </tr>
                            <tr>
                                <th id="p1">1 <br></th><td id="MonB1"><?= $timetable->MonB1->lessonName; echo "<br>"; echo $timetable->MonB1->lessonRoom; ?></td><td id="TueB1"><?= $timetable->TueB1->lessonName; echo "<br>"; echo $timetable->TueB1->lessonRoom; ?></td><td id="WedB1"><?= $timetable->WedB1->lessonName; echo "<br>"; echo $timetable->WedB1->lessonRoom; ?></td><td id="ThuB1"><?= $timetable->ThuB1->lessonName; echo "<br>"; echo $timetable->ThuB1->lessonRoom; ?></td><td id="FriB1"><?= $timetable->FriB1->lessonName; echo "<br>"; echo $timetable->FriB1->lessonRoom; ?></td>
                            </tr>
                            <tr>
                                <th id="p2">2 <br></th><td id="MonB2"><?= $timetable->MonB2->lessonName; echo "<br>"; echo $timetable->MonB2->lessonRoom; ?></td><td id="TueB2"><?= $timetable->TueB2->lessonName; echo "<br>"; echo $timetable->TueB2->lessonRoom; ?></td><td id="WedB2"><?= $timetable->WedB2->lessonName; echo "<br>"; echo $timetable->WedB2->lessonRoom; ?></td><td id="ThuB2"><?= $timetable->ThuB2->lessonName; echo "<br>"; echo $timetable->ThuB2->lessonRoom; ?></td><td id="FriB2"><?= $timetable->FriB2->lessonName; echo "<br>"; echo $timetable->FriB2->lessonRoom; ?></td>
                            </tr>
                            <tr>
                                <th id="p3">3 <br></th><td id="MonB3"><?= $timetable->MonB3->lessonName; echo "<br>"; echo $timetable->MonB3->lessonRoom; ?></td><td id="TueB3"><?= $timetable->TueB3->lessonName; echo "<br>"; echo $timetable->TueB3->lessonRoom; ?></td><td id="WedB3"><?= $timetable->WedB3->lessonName; echo "<br>"; echo $timetable->WedB3->lessonRoom; ?></td><td id="ThuB3"><?= $timetable->ThuB3->lessonName; echo "<br>"; echo $timetable->ThuB3->lessonRoom; ?></td><td id="FriB3"><?= $timetable->FriB3->lessonName; echo "<br>"; echo $timetable->FriB3->lessonRoom; ?></td>
                            </tr>
                            <tr>
                                <th id="p4">4 <br></th><td id="MonB4"><?= $timetable->MonB4->lessonName; echo "<br>"; echo $timetable->MonB4->lessonRoom; ?></td><td id="TueB4"><?= $timetable->TueB4->lessonName; echo "<br>"; echo $timetable->TueB4->lessonRoom; ?></td><td id="WedB4"><?= $timetable->WedB4->lessonName; echo "<br>"; echo $timetable->WedB4->lessonRoom; ?></td><td id="ThuB4"><?= $timetable->ThuB4->lessonName; echo "<br>"; echo $timetable->ThuB4->lessonRoom; ?></td><td id="FriB4"><?= $timetable->FriB4->lessonName; echo "<br>"; echo $timetable->FriB4->lessonRoom; ?></td>
                            </tr>
                            <tr>
                                <th id="p5">5 <br></th><td id="MonB5"><?= $timetable->MonB5->lessonName; echo "<br>"; echo $timetable->MonB5->lessonRoom; ?></td><td id="TueB5"><?= $timetable->TueB5->lessonName; echo "<br>"; echo $timetable->TueB5->lessonRoom; ?></td><td id="WedB5"><?= $timetable->WedB5->lessonName; echo "<br>"; echo $timetable->WedB5->lessonRoom; ?></td><td id="ThuB5"><?= $timetable->ThuB5->lessonName; echo "<br>"; echo $timetable->ThuB5->lessonRoom; ?></td><td id="FriB5"><?= $timetable->FriB5->lessonName; echo "<br>"; echo $timetable->FriB5->lessonRoom; ?></td>
                            </tr>
                            <tr>
                                <th id="p6">6 <br></th><td id="MonB6"><?= $timetable->MonB6->lessonName; echo "<br>"; echo $timetable->MonB6->lessonRoom; ?></td><td id="TueB6"><?= $timetable->TueB6->lessonName; echo "<br>"; echo $timetable->TueB6->lessonRoom; ?></td><td id="WedB6"><?= $timetable->WedB6->lessonName; echo "<br>"; echo $timetable->WedB6->lessonRoom; ?></td><td id="ThuB6"><?= $timetable->ThuB6->lessonName; echo "<br>"; echo $timetable->ThuB6->lessonRoom; ?></td><td id="FriB6"><?= $timetable->FriB6->lessonName; echo "<br>"; echo $timetable->FriB6->lessonRoom; ?></td>
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
                    
                </div>
                <div class="col-md-6">
                    <div class="btn-group pull-right" role="group" aria-label="...">
                        <a href="/timetable/edit"><button type="button" class="btn btn-success">Edit Timetable</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Week Overview</h4></div>
                <div class="panel-body"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Settings</h4></div>
                <div class="panel-body">
                    <div class="btn-group" role="group">
                        <button type="button" id="periodsbutton" class="btn btn-primary">Periods</button>
                        <button type="button" id="timesbutton" class="btn btn-primary">Times</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>