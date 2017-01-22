'use strict';
function removeLesson(id){
	$.ajax({
    type:'delete',
    url:'/admin/lessons/'+id
    })
    .done(function(){
    	$(location).attr('href', '/admin/lessons');
    })
}
function createLesson(){
	var subject = $("#create_subject").val();
	var room = $("#create_room").val();
	var teacher = $("#create_teacher").val();
	var year = $("#create_year").val();
	$.post("/admin/lessons", { subject : subject, room : room, teacher : teacher, year : year})
    .done(function(){
        $(location).attr('href', '/admin/lessons');
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
      url: "/admin/lessons/"+id,
      data: { subject : subject, room : room, teacher : teacher, year : year}
    })
    .done(function() {
      $(location).attr('href', '/admin/lessons');
    });
}
