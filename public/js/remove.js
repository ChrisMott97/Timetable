function removePeriod(){
	var period = $("#session_edit :selected").text();
	document.getElementById(period).innerhtml = "";
	document.getElementById(period).removeAttr('lessonid');
}