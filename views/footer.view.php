		<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
		<script src="/public/js/jquery.hideseek.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				// $("#session_edit").select2();
				// $("#lesson_edit").select2();
				$("#from").select2();
				$("#to").select2();
				// $("#userids").select2();
				// $("#modify_id").select2();
				$('#search').hideseek();
    			$('.modal').modal();
			    $('ul.tabs').tabs();
    			$('select').material_select();
  				$(".button-collapse").sideNav();
  				// $('.collapsible').collapsible();
  				$(".dropdown-button").dropdown();
        
			});
		</script>
		<script src="/public/js/users.js"></script>
		<script src="/public/js/notifications.js"></script>
		<script src="/public/js/lessons.js"></script>
		<script src="/public/js/timetable.js"></script>
		<script src="/public/js/periodtimes.js"></script>
		<script src="/public/js/timetable_update.js"></script>
		<script src="/public/js/time.js"></script>
	</body>
</html>