function setPeriod(){
    var lesson = $("#lesson_edit :selected").text();
    var period = $("#session_edit").val();
    var lessonid = $("#lesson_edit :selected").val();
    document.getElementById(period).innerHTML = lesson.split(" , ")[0] + "<br>" + lesson.split(" , ")[1];
    document.getElementById(period).setAttribute("lessonid", lessonid)
} 

function removePeriod(){
	var period = $("#session_edit").val();
	document.getElementById(period).innerhtml = "";
	$('#'+period).empty();
	document.getElementById(period).setAttribute("lessonid", '-1')
}

function selectPeriod(cell){
	var theParent = $(cell).parent().parent()[0];
	var theChildren = $(theParent).find("td");
	$(theChildren).css("background-color", "white");
	$(cell).css("background-color", "skyblue");
	$("#session_edit").val(cell.id);
}