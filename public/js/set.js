function setPeriod(){
    var lesson = $("#lesson_edit :selected").text();
    var period = $("#session_edit :selected").text();
    document.getElementById(period).innerHTML = lesson;
}