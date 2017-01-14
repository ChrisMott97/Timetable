'use strict';
function removeNotification(id){
	$.ajax({
    type:'delete',
    url:'/admin/notifications/'+id
    })
    .done(function(){
    	// alert(id);
    	$(location).attr('href', '/admin/notifications');
    })
}
function createNotification(){
	var userid = $("#userids").val();
	var title = $("#title").val();
	var description = $("#details").val();
	$.post("/admin/notifications", { userid : userid, title : title, description : description})
    .done(function(){
        // alert(id);
        $(location).attr('href', '/admin/notifications');
    });
}

