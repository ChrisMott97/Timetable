'use strict';
function removeUser(id){
	$.ajax({
    type:'delete',
    url:'/admin/users/'+id
    })
    .done(function(){
    	// alert(id);
    	$(location).attr('href', '/admin/users');
    })
}
function createUser(){
	var firstname = $("#firstname").val();
	var lastname = $("#lastname").val();
	var username = $("#username").val();
	var password = $("#password").val();
	var year = $("#year").val();
	$.post("/admin/users", { firstname : firstname, lastname : lastname, username : username, password : password, year : year})
    .done(function(){
        // alert(id);
        $(location).attr('href', '/admin/users');
    });
}

