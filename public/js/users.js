function removeUser(){
	var id = $("#id :selected").val();
	$.ajax({
    type:'delete',
    url:'/admin/users/'+id
    })
    .done(function(){
    	$(location).attr('href', '/admin/users');
    })
}
