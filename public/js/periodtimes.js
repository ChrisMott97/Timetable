$(document).ready(function(){
    $("#timesbutton").click(function(){
        $("[id=p1]").html('8:40 <br> 9:40');
        $("[id=p2]").html('9:40 <br> 10:40');
        $("[id=p3]").html('11:00 <br> 12:00');
        $("[id=p4]").html('12:00 <br> 13:00');
        $("[id=p5]").html('14:00 <br> 15:00');
        $("[id=p6]").html('15:00 <br> 16:00');
    });
    $("#periodsbutton").click(function(){
        $("[id=p1]").html('1 <br>');
        $("[id=p2]").html('2 <br>');
        $("[id=p3]").html('3 <br>');
        $("[id=p4]").html('4 <br>');
        $("[id=p5]").html('5 <br>');
        $("[id=p6]").html('6 <br>');
    });
});
//function showTimes(){
//    document.getElementById('p1').innerHTML = '8:40 - 9:40';
//    document.getElementById('p2').innerHTML = '9:40 - 10:40';
//    document.getElementById('p3').innerHTML = '11:00 - 12:00';
//    document.getElementById('p4').innerHTML = '12:00 - 13:00';
//    document.getElementById('p5').innerHTML = '14:00 - 15:00';
//    document.getElementById('p6').innerHTML = '15:00 - 16:00';
//} 
//function showPeriods(){
//    document.getElementById('p1').innerHTML = '1';
//    document.getElementById('p2').innerHTML = '2';
//    document.getElementById('p3').innerHTML = '3';
//    document.getElementById('p4').innerHTML = '4';
//    document.getElementById('p5').innerHTML = '5';
//    document.getElementById('p6').innerHTML = '6';
//} 