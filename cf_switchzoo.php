<?php
    switch($i){
        case 1 : echo "<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			lang: 'th',
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'zoo/zpo.php',
				error: function() {
					$('#script-warning').show();
				}
			},
// 			eventClick:  function(event, jsEvent, view) {
//             $('#modalTitle').html(event.title);
//             $('#modalBody').html(event.description);
//             $('#eventUrl').attr('href',event.url);
//             $('#fullCalModal').modal();
//             return false;
//         },
               allDaySlot:false,
			eventRender: function(event, element) {
        $(element).find('.fc-time').remove();
    },
 			loading: function(bool) {
 				$('#loading').toggle(bool);
 			}
		});
		
	});
</script>";
    case 2 : echo "<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			lang: 'th',
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'zoo/zpo2.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			allDaySlot:false,
			eventRender: function(event, element) {
        $(element).find('.fc-time').remove();
    },
// 			loading: function(bool) {
// 				$('#loading').toggle(bool);
// 			}
		});
		
	});
</script>";
case 3 : echo "<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			lang: 'th',
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'zoo/dzo.php',
				error: function() {
					$('#script-warning').show();
				}
			},
						allDaySlot:false,
			eventRender: function(event, element) {
        $(element).find('.fc-time').remove();
    },
// 			loading: function(bool) {
// 				$('#loading').toggle(bool);
// 			}
		});
		
	});
</script>";
case 4 : echo "<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			lang: 'th',
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'zoo/dzo2.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			allDaySlot:false,
			eventRender: function(event, element) {
        $(element).find('.fc-time').remove();
    },
// 			loading: function(bool) {
// 				$('#loading').toggle(bool);
// 			}
		});
		
	});
</script>";
case 5 : echo "<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			lang: 'th',
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'zoo/dzo3.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			allDaySlot:false,
			eventRender: function(event, element) {
        $(element).find('.fc-time').remove();
    },
// 			loading: function(bool) {
// 				$('#loading').toggle(bool);
// 			}
		});
		
	});
</script>";
case 6 : echo "<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			lang: 'th',
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'zoo/dzo4.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			allDaySlot:false,
			eventRender: function(event, element) {
        $(element).find('.fc-time').remove();
    },
// 			loading: function(bool) {
// 				$('#loading').toggle(bool);
// 			}
		});
		
	});
</script>";


    }
?>