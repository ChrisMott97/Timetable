function removeNotification(id){
	$.ajax({
    type:'delete',
    url:'/admin/notifications/'+id
    })
    .done(function(){
    	alert(id);
    	// $(location).attr('href', '/admin/notifications');
    })
}
function createNotification(){
	userid = $("#userids :selected").val();
	title = $("#title");
	description = $("#details");
	$.ajax({
    type:'post',
    url:'/admin/notifications/',
    data: {userid : userid, title: title, description : description}
    })
    .done(function(){
    	alert(id);
    	// $(location).attr('href', '/admin/notifications');
    });
}

