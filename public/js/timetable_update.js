function timetable_update(){
    var periods = [];
    
    var sessions = new Object();
    
    var table_cells = document.getElementsByTagName("td");
    for(var i = 0; i < table_cells.length; i++){
        periods.push(table_cells[i].getAttribute("id"));
    }
    
    for(var j = 0; j < periods.length; j++){
        var period = periods[j];
        
        sessions[period] = document.getElementById(period).getAttribute("lessonid");
    }
    
    
    $.post( "/timetable/update", { sessions : sessions})
        .done(function(data) {
        //alert(data);
        $(location).attr('href', '/timetable')
    });
    
}