function setPeriod(){
    var lesson = $("#lesson_edit :selected").text();
    var period = $("#session_edit :selected").text();
    var lessonid = $("#lesson_edit :selected").val();
    document.getElementById(period).innerHTML = lesson;
    document.getElementById(period).setAttribute("lessonid", lessonid)
} 

function removePeriod(){
	var period = $("#session_edit :selected").text();
	document.getElementById(period).innerhtml = "";
	$('#'+period).empty();
	document.getElementById(period).setAttribute("lessonid", '-1')
}