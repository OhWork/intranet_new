<!DOCTYPE html>
<head>
    <link href="CSS/bootstrap_old.css" type="text/css" rel="stylesheet" />
    <link href="CSS/fullcalendar.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/cssforcfindex.css">
        <script>
        $(document).ready(function() {
	        $('.print').hide();
            $('#calendar').fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: 'listDay,listWeek,month'
                },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalStatus').html(event.stat);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#eventUrl2').attr('href',event.url2);
                    $('#fullCalModal').modal();
                    if (event.statuss == 'W'){
	                   $('#modelHeader').removeClass('alert-success');
	                   $('#modelHeader').removeClass('alert-danger');
	                   $('#modelHeader').addClass('alert-warning');

	                   $('#modalFooter').removeClass('alert-success');
	                   $('#modalFooter').removeClass('alert-danger');
	                   $('#modalFooter').addClass('alert-warning');
	                   $('.print').hide();
                   }
                   else if(event.statuss == 'N'){
	                   $('#modelHeader').removeClass('alert-success');
	                   $('#modelHeader').removeClass('alert-warning');
	                   $('#modelHeader').addClass('alert-danger');

	                   $('#modalFooter').removeClass('alert-success');
	                   $('#modalFooter').removeClass('alert-warning');
	                   $('#modalFooter').addClass('alert-danger');
	                   $('.print').hide();
                   }
                   else if(event.statuss == 'Y'){
	                   $('#modelHeader').removeClass('alert-warning');
	                   $('#modelHeader').removeClass('alert-danger');
	                   $('#modelHeader').addClass('alert-success');

	                   $('#modalFooter').removeClass('alert-danger');
	                   $('#modalFooter').removeClass('alert-warning');
	                   $('#modalFooter').addClass('alert-success');
	                   $('#modalStatus').removeClass('cfwait');
	                   $('#modalStatus').removeClass('cfno');
	                   $('.print').show();
                   }
                    return false;
                },
                views: {
				listDay: { buttonText: 'list day' },
				listWeek: { buttonText: 'list week' }
			},

                events:
                {
                    url: 'zoo/zpo.php?gData=1',
                },
                eventRender: function(event, element) {
					if (event.statuss == 'W'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/yellow.png' width='10px' height='10px'>");
				    }
			        else if(event.statuss == 'N'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/red.png' width='10px' height='10px'>");
			        }
			        else if(event.statuss == 'Y'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/green.png' width='10px' height='10px'>");
			        }

                    },
                timeFormat: 'H:mm',
                nextDayThreshold:'00:00',
            });
        });
    </script>
</head>
        <div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="margin-top:16px;margin-bottom:16px;">
				<div id="calendar"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
<?php include("cf_viewdetail.php")?>
