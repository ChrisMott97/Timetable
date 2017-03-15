'use strict';
function removeUser(){
    var id = $("#userid").val();
	$.ajax({
    type:'delete',
    url:'/services/users/'+id
    })
    .done(function(){
    	// alert(id);
    	location.reload();
    })
}
function createUser(){
	var firstname = $("#create_firstname").val();
	var lastname = $("#create_lastname").val();
	var username = $("#create_username").val();
	var password = $("#create_password").val();
	var year = $("#create_year").val();
	$.post("/services/users", { firstname : firstname, lastname : lastname, username : username, password : password, year : year})
    .done(function(){
        // alert(id);
        location.reload();
    });
}
function modifyUser(){
    var id = $("#userid").val();
    var firstname = $("#modify_firstname").val();
    var lastname = $("#modify_lastname").val();
    var username = $("#modify_username").val();
    var password = $("#modify_password").val();
    var year = $("#modify_year").val();
    var permission = $("#modify_permission").val();
    $.ajax({
      type: "post",
      url: "/services/users/"+id,
      data: { firstname : firstname, lastname : lastname, username : username, password : password, year : year, permission : permission}
    })
    .done(function() {
      location.reload();
    });
}
function selectUser(username, id){
    $("#username").val(username);
    $("#userid").val(id);
}
function selectTeacher(username){
    var initials = username.toUpperCase();
    $("#modify_teacher").val(initials);
    $("#create_teacher").val(initials);
}
function selectTeacherLimitted(username){
    var initials = username.toUpperCase();
    $("#modify_teacher").val(initials);
}
function changePassword(){
    var pass = $("#password").val();
    $.post("/settings/password", { pass : pass })
    .done(function(){
        location.reload();
    });
}