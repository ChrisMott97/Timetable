'use strict';
function removeNotification(id){
	$.ajax({
    type:'delete',
    url:'/admin/notifications/'+id
    })
    .done(function(){
    	//alert(window.location.href);
    	$(location).attr('href', window.location.href);
    })
}
function createNotification(){
	var userid = $("#userids").val();
	var title = $("#title").val();
	var description = $("#details").val();
	$.post("/admin/notifications", { userid : userid, title : title, description : description})
    .done(function(){
        // alert(id);
        $(location).attr('href', window.location.href);
    });
}

