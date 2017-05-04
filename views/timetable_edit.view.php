<div class="container">
    <div class="card-panel">
        <h1>Timetable</h1>
        <ul class="tabs">
            <li class="tab col s3"><a href="#weeka">Week A</a></li>
            <li class="tab col s3"><a href="#weekb">Week B</a></li>
        </ul>
        <div id="weeka">
            <div class="card-panel">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>A</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th id="p1">1</th>
                            <td id="MonA1" onclick="selectPeriod(this)">
                                <?= $timetable->MonA1->lessonName; ?>
                                <br>
                                <?= $timetable->MonA1->lessonRoom; ?>
                            </td>
                            <td id="TueA1" onclick="selectPeriod(this)">
                                <?= $timetable->TueA1->lessonName; ?>
                                <br>
                                <?= $timetable->TueA1->lessonRoom; ?>
                            </td>
                            <td id="WedA1" onclick="selectPeriod(this)">
                                <?= $timetable->WedA1->lessonName; ?>
                                <br>
                                <?= $timetable->WedA1->lessonRoom; ?>
                            </td>
                            <td id="ThuA1" onclick="selectPeriod(this)">
                                <?= $timetable->ThuA1->lessonName; ?>
                                <br>
                                <?= $timetable->ThuA1->lessonRoom; ?>
                            </td>
                            <td id="FriA1" onclick="selectPeriod(this)">
                                <?= $timetable->FriA1->lessonName; ?>
                                <br>
                                <?= $timetable->FriA1->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p2">2 <br></th>
                            <td id="MonA2" onclick="selectPeriod(this)">
                                <?= $timetable->MonA2->lessonName; ?>
                                <br>
                                <?= $timetable->MonA2->lessonRoom; ?>
                            </td>
                            <td id="TueA2" onclick="selectPeriod(this)">
                                <?= $timetable->TueA2->lessonName; ?>
                                <br>
                                <?= $timetable->TueA2->lessonRoom; ?>
                            </td>
                            <td id="WedA2" onclick="selectPeriod(this)">
                                <?= $timetable->WedA2->lessonName; ?>
                                <br>
                                <?= $timetable->WedA2->lessonRoom; ?>
                            </td>
                            <td id="ThuA2" onclick="selectPeriod(this)">
                                <?= $timetable->ThuA2->lessonName; ?>
                                <br>
                                <?= $timetable->ThuA2->lessonRoom; ?>
                            </td>
                            <td id="FriA2" onclick="selectPeriod(this)">
                                <?= $timetable->FriA2->lessonName; ?>
                                <br>
                                <?= $timetable->FriA2->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p3">3 <br></th>
                            <td id="MonA3" onclick="selectPeriod(this)">
                                <?= $timetable->MonA3->lessonName; ?>
                                <br>
                                <?= $timetable->MonA3->lessonRoom; ?>
                            </td>
                            <td id="TueA3" onclick="selectPeriod(this)">
                                <?= $timetable->TueA3->lessonName; ?>
                                <br>
                                <?= $timetable->TueA3->lessonRoom; ?>
                            </td>
                            <td id="WedA3" onclick="selectPeriod(this)">
                                <?= $timetable->WedA3->lessonName; ?>
                                <br>
                                <?= $timetable->WedA3->lessonRoom; ?>
                            </td>
                            <td id="ThuA3" onclick="selectPeriod(this)">
                                <?= $timetable->ThuA3->lessonName; ?>
                                <br>
                                <?= $timetable->ThuA3->lessonRoom; ?>
                            </td>
                            <td id="FriA3" onclick="selectPeriod(this)">
                                <?= $timetable->FriA3->lessonName; ?>
                                <br>
                                <?= $timetable->FriA3->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p4">4 <br></th>
                            <td id="MonA4" onclick="selectPeriod(this)">
                                <?= $timetable->MonA4->lessonName; ?>
                                <br>
                                <?= $timetable->MonA4->lessonRoom; ?>
                            </td>
                            <td id="TueA4" onclick="selectPeriod(this)">
                                <?= $timetable->TueA4->lessonName; ?>
                                <br>
                                <?= $timetable->TueA4->lessonRoom; ?>
                            </td>
                            <td id="WedA4" onclick="selectPeriod(this)">
                                <?= $timetable->WedA4->lessonName; ?>
                                <br>
                                <?= $timetable->WedA4->lessonRoom; ?>
                            </td>
                            <td id="ThuA4" onclick="selectPeriod(this)">
                                <?= $timetable->ThuA4->lessonName; ?>
                                <br>
                                <?= $timetable->ThuA4->lessonRoom; ?>
                            </td>
                            <td id="FriA4" onclick="selectPeriod(this)">
                                <?= $timetable->FriA4->lessonName; ?>
                                <br>
                                <?= $timetable->FriA4->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p5">5 <br></th>
                            <td id="MonA5" onclick="selectPeriod(this)">
                                <?= $timetable->MonA5->lessonName; ?>
                                <br>
                                <?= $timetable->MonA5->lessonRoom; ?>
                            </td>
                            <td id="TueA5" onclick="selectPeriod(this)">
                                <?= $timetable->TueA5->lessonName; ?>
                                <br>
                                <?= $timetable->TueA5->lessonRoom; ?>
                            </td>
                            <td id="WedA5" onclick="selectPeriod(this)">
                                <?= $timetable->WedA5->lessonName; ?>
                                <br>
                                <?= $timetable->WedA5->lessonRoom; ?>
                            </td>
                            <td id="ThuA5" onclick="selectPeriod(this)">
                                <?= $timetable->ThuA5->lessonName; ?>
                                <br>
                                <?= $timetable->ThuA5->lessonRoom; ?>
                            </td>
                            <td id="FriA5" onclick="selectPeriod(this)">
                                <?= $timetable->FriA5->lessonName; ?>
                                <br>
                                <?= $timetable->FriA5->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p6">6 <br></th>
                            <td id="MonA6" onclick="selectPeriod(this)">
                                <?= $timetable->MonA6->lessonName; ?>
                                <br>
                                <?= $timetable->MonA6->lessonRoom; ?>
                            </td>
                            <td id="TueA6" onclick="selectPeriod(this)">
                                <?= $timetable->TueA6->lessonName; ?>
                                <br>
                                <?= $timetable->TueA6->lessonRoom; ?>
                            </td>
                            <td id="WedA6" onclick="selectPeriod(this)">
                                <?= $timetable->WedA6->lessonName; ?>
                                <br>
                                <?= $timetable->WedA6->lessonRoom; ?>
                            </td>
                            <td id="ThuA6" onclick="selectPeriod(this)">
                                <?= $timetable->ThuA6->lessonName; ?>
                                <br>
                                <?= $timetable->ThuA6->lessonRoom; ?>
                            </td>
                            <td id="FriA6" onclick="selectPeriod(this)">
                                <?= $timetable->FriA6->lessonName; ?>
                                <br>
                                <?= $timetable->FriA6->lessonRoom; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="weekb">
            <div class="card-panel">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>B</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th id="p1">1 <br></th>
                            <td id="MonB1" onclick="selectPeriod(this)">
                                <?= $timetable->MonB1->lessonName; ?>
                                <br>
                                <?= $timetable->MonB1->lessonRoom; ?>
                            </td>
                            <td id="TueB1" onclick="selectPeriod(this)">
                                <?= $timetable->TueB1->lessonName; ?>
                                <br>
                                <?= $timetable->TueB1->lessonRoom; ?>
                            </td>
                            <td id="WedB1" onclick="selectPeriod(this)">
                                <?= $timetable->WedB1->lessonName; ?>
                                <br>
                                <?= $timetable->WedB1->lessonRoom; ?>
                            </td>
                            <td id="ThuB1" onclick="selectPeriod(this)">
                                <?= $timetable->ThuB1->lessonName; ?>
                                <br>
                                <?= $timetable->ThuB1->lessonRoom; ?>
                            </td>
                            <td id="FriB1" onclick="selectPeriod(this)">
                                <?= $timetable->FriB1->lessonName; ?>
                                <br>
                                <?= $timetable->FriB1->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p2">2 <br></th>
                            <td id="MonB2" onclick="selectPeriod(this)">
                                <?= $timetable->MonB2->lessonName; ?>
                                <br>
                                <?= $timetable->MonB2->lessonRoom; ?>
                            </td>
                            <td id="TueB2" onclick="selectPeriod(this)">
                                <?= $timetable->TueB2->lessonName; ?>
                                <br>
                                <?= $timetable->TueB2->lessonRoom; ?>
                            </td>
                            <td id="WedB2" onclick="selectPeriod(this)">
                                <?= $timetable->WedB2->lessonName; ?>
                                <br>
                                <?= $timetable->WedB2->lessonRoom; ?>
                            </td>
                            <td id="ThuB2" onclick="selectPeriod(this)">
                                <?= $timetable->ThuB2->lessonName; ?>
                                <br>
                                <?= $timetable->ThuB2->lessonRoom; ?>
                            </td>
                            <td id="FriB2" onclick="selectPeriod(this)">
                                <?= $timetable->FriB2->lessonName; ?>
                                <br>
                                <?= $timetable->FriB2->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p3">3 <br></th>
                            <td id="MonB3" onclick="selectPeriod(this)">
                                <?= $timetable->MonB3->lessonName; ?>
                                <br>
                                <?= $timetable->MonB3->lessonRoom; ?>
                            </td>
                            <td id="TueB3" onclick="selectPeriod(this)">
                                <?= $timetable->TueB3->lessonName; ?>
                                <br>
                                <?= $timetable->TueB3->lessonRoom; ?>
                            </td>
                            <td id="WedB3" onclick="selectPeriod(this)">
                                <?= $timetable->WedB3->lessonName; ?>
                                <br>
                                <?= $timetable->WedB3->lessonRoom; ?>
                            </td>
                            <td id="ThuB3" onclick="selectPeriod(this)">
                                <?= $timetable->ThuB3->lessonName; ?>
                                <br>
                                <?= $timetable->ThuB3->lessonRoom; ?>
                            </td>
                            <td id="FriB3" onclick="selectPeriod(this)">
                                <?= $timetable->FriB3->lessonName; ?>
                                <br>
                                <?= $timetable->FriB3->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p4">4 <br></th>
                            <td id="MonB4" onclick="selectPeriod(this)">
                                <?= $timetable->MonB4->lessonName; ?>
                                <br>
                                <?= $timetable->MonB4->lessonRoom; ?>
                            </td>
                            <td id="TueB4" onclick="selectPeriod(this)">
                                <?= $timetable->TueB4->lessonName; ?>
                                <br>
                                <?= $timetable->TueB4->lessonRoom; ?>
                            </td>
                            <td id="WedB4" onclick="selectPeriod(this)">
                                <?= $timetable->WedB4->lessonName; ?>
                                <br>
                                <?= $timetable->WedB4->lessonRoom; ?>
                            </td>
                            <td id="ThuB4" onclick="selectPeriod(this)">
                                <?= $timetable->ThuB4->lessonName; ?>
                                <br>
                                <?= $timetable->ThuB4->lessonRoom; ?>
                            </td>
                            <td id="FriB4" onclick="selectPeriod(this)">
                                <?= $timetable->FriB4->lessonName; ?>
                                <br>
                                <?= $timetable->FriB4->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p5">5 <br></th>
                            <td id="MonB5" onclick="selectPeriod(this)">
                                <?= $timetable->MonB5->lessonName; ?>
                                <br>
                                <?= $timetable->MonB5->lessonRoom; ?>
                            </td>
                            <td id="TueB5" onclick="selectPeriod(this)">
                                <?= $timetable->TueB5->lessonName; ?>
                                <br>
                                <?= $timetable->TueB5->lessonRoom; ?>
                            </td>
                            <td id="WedB5" onclick="selectPeriod(this)">
                                <?= $timetable->WedB5->lessonName; ?>
                                <br>
                                <?= $timetable->WedB5->lessonRoom; ?>
                            </td>
                            <td id="ThuB5" onclick="selectPeriod(this)">
                                <?= $timetable->ThuB5->lessonName; ?>
                                <br>
                                <?= $timetable->ThuB5->lessonRoom; ?>
                            </td>
                            <td id="FriB5" onclick="selectPeriod(this)">
                                <?= $timetable->FriB5->lessonName; ?>
                                <br>
                                <?= $timetable->FriB5->lessonRoom; ?>
                            </td>
                        </tr>
                        <tr>
                            <th id="p6">6 <br></th>
                            <td id="MonB6" onclick="selectPeriod(this)">
                                <?= $timetable->MonB6->lessonName; ?>
                                <br>
                                <?= $timetable->MonB6->lessonRoom; ?>
                            </td>
                            <td id="TueB6" onclick="selectPeriod(this)">
                                <?= $timetable->TueB6->lessonName; ?>
                                <br>
                                <?= $timetable->TueB6->lessonRoom; ?>
                            </td>
                            <td id="WedB6" onclick="selectPeriod(this)">
                                <?= $timetable->WedB6->lessonName; ?>
                                <br>
                                <?= $timetable->WedB6->lessonRoom; ?>
                            </td>
                            <td id="ThuB6" onclick="selectPeriod(this)">
                                <?= $timetable->ThuB6->lessonName; ?>
                                <br>
                                <?= $timetable->ThuB6->lessonRoom; ?>
                            </td>
                            <td id="FriB6" onclick="selectPeriod(this)">
                                <?= $timetable->FriB6->lessonName; ?>
                                <br>
                                <?= $timetable->FriB6->lessonRoom; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div onclick="switchState()" class="switch center">
            <label>
                Periods
                <input id="timetableSwitch" type="checkbox">
                <span class="lever"></span>
                Times
            </label>
        </div>
    </div>
    <div class="card-panel">
        <a href="#!" onclick="timetable_update()" class="waves-effect waves-light btn">Save</a>
        <a href="/timetable" class="right waves-effect waves-light btn red">Return</a>
    </div>
    <div class="card-panel">
        <h4>Edit Session</h4>
        <div class="row">
            <div class="input-field col s6">
                <!-- <select id="session_edit"> -->
                <!-- <?php foreach($periods as $period):?> -->
                <!-- <option value=<?= $period->code; ?>><?= $period->code; ?></option> -->
                <!-- <?php endforeach ?> -->
                <!-- </select> -->
                <div class="input-field">
                    <input disabled type="text" name="session_edit" class="validate disabled" placeholder="Select above" id="session_edit" autocomplete="off">
                    <label for="session_edit">Period:</label>
                </div>
                <!-- <label>Period:</label> -->
            </div>
            <div class="input-field col s6">
                <select id="lesson_edit">
                    <?php foreach($lessons as $lesson):?>
                    <option value=<?= $lesson->id; ?>><?= $lesson->subject." , ".$lesson->room ?></option>
                    <?php endforeach ?>
                </select>
                <label>Lesson:</label>
            </div>
        </div>
        <a href="#!" onclick="setPeriod()" class="waves-effect waves-light btn">Set</a>
        <a href="#!" onclick="removePeriod()" class="waves-effect waves-light btn">Remove</a>
    </div>
</div>