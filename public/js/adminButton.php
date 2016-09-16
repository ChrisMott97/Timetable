<script>
$(document).ready(function(){
    var permission = <?php  $user->permission ?>;
    if(permission != 5){
        $(".adminbtn").hide();
    }
});
</script>