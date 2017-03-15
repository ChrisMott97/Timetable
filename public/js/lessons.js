'use strict';
function removeLesson(){
    var id = $("#modify_id").val();
	$.ajax({
    type:'delete',
    url:'/services/lessons/'+id
    })
    .done(function(){
    	location.reload();
    })
}
function createLesson(){
	var subject = $("#create_subject").val();
	var room = $("#create_room").val();
	var teacher = $("#create_teacher").val();
	var year = $("#create_year").val();
	$.post("/services/lessons", { subject : subject, room : room, teacher : teacher, year : year})
    .done(function(){
        location.reload();
    });
}
function modifyLesson(){
    var id = $("#modify_id").val();
    var subject = $("#modify_subject").val();
    var room = $("#modify_room").val();
    var teacher = $("#modify_teacher").val();
    var year = $("#modify_year").val();
    $.ajax({
      type: "post",
      url: "/services/lessons/"+id,
      data: { subject : subject, room : room, teacher : teacher, year : year}
    })
    .done(function() {
      location.reload();
    });
}
function selectLesson(identity, id){
    $("#lesson").val(identity);
    $("#modify_id").val(id);
}
