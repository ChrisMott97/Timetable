'use strict';
function removeNotification(id){
	$.ajax({
    type:'delete',
    url:'/services/notifications/'+id
    })
    .done(function(){
    	//alert(window.location.href);
    	location.reload();
    })
}
function createNotification(){
	var userid = $("#userid").val();
	var title = $("#title").val();
	var description = $("#details").val();
	$.post("/services/notifications", { userid : userid, title : title, description : description})
    .done(function(){
        // alert(id);
        location.reload();
    });
}
function removeNotificationUser(id){
    $.ajax({
    type:'delete',
    url:'/services/notifications/'+id
    })
    .done(function(){
        //alert(window.location.href);
        location.reload();
        $('#notification').modal('open');
    })
}
