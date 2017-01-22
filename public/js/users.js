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
	var firstname = $("#create_firstname").val();
	var lastname = $("#create_lastname").val();
	var username = $("#create_username").val();
	var password = $("#create_password").val();
	var year = $("#create_year").val();
	$.post("/admin/users", { firstname : firstname, lastname : lastname, username : username, password : password, year : year})
    .done(function(){
        // alert(id);
        $(location).attr('href', '/admin/users');
    });
}
function modifyUser(){
    var id = $("#modify_id").val();
    var firstname = $("#modify_firstname").val();
    var lastname = $("#modify_lastname").val();
    var username = $("#modify_username").val();
    var password = $("#modify_password").val();
    var year = $("#modify_year").val();
    var permission = $("#modify_permission").val();
    $.ajax({
      type: "post",
      url: "/admin/users/"+id,
      data: { firstname : firstname, lastname : lastname, username : username, password : password, year : year, permission : permission}
    })
    .done(function() {
      $(location).attr('href', '/admin/users');
    });
}
