<?php
	$id = $_GET['id'];

	$r = $db->findByPK('conferroom','conferroom_id',$id)->executeRow();
	$confer = $r['conferroom_name'];
?>
<!DOCTYPE html>
<input type='hidden' id='id' name="id" value="<?php echo $id;?>">
        <script>
         document.addEventListener('DOMContentLoaded', function() {
         $('.print').hide();
         var id = $('#id').val();
         var calendarEl = document.getElementById('calendar');
         var calendar = new FullCalendar.Calendar(calendarEl, {
            //plugins: [ 'interaction','dayGrid', 'timeGrid', 'list' ], // plugin ที่เราจะใช้งาน
            defaultView: 'dayGridMonth', // ค้าเริ่มร้นเมื่อโหลดแสดงปฏิทิน
            themeSystem: 'bootstrap',
	     headerToolbar: {
	        left: 'prev,next today',
	        center: 'title',
	        right: 'timeGridDay,timeGridWeek,dayGridMonth,listWeek'
	     },
               
                views: {
                toDay: { buttonText: 'วันนี้' },
				timeGridDay: { buttonText: 'วัน' },
				timeGridWeek: { buttonText: 'สัปดาห์' },
				dayGridMonth: { buttonText: 'เดือน' },
                                listWeek: { buttonText: 'กำหนดการ' }
			},

                events:
                {
                    url: 'cf_zpo_room.php?gData=' + id,
                },
                  eventTimeFormat: { // รูปแบบการแสดงของเวลา เช่น '14:30'
                hour: '2-digit',
                minute: '2-digit',
                meridiem: false
            },
                    firstDay : 1,
                  displayEventTime: true,
                  displayEventEnd: true,
                  locale: 'th',

            });
            var conferid = $('#conferroom_id').val();
            var disbledid = document.getElementById(<?php echo $r['conferroom_id'];?>);
            var checkdisbled = <?php echo $_GET['id']?>;
			if(conferid == checkdisbled){
				disbledid.classList.remove('btn-primary');
 				disbledid.classList.add('disabled');
				disbledid.classList.add('colorcfmenu');
			}
                        calendar.render();
         });
     </script>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 16px;">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenuok">
								<div class="row">
									<a href="index.php?url=ts_addreservecar.php&id=<?php echo $id;?>" class="btn btn-success col-md-12" id="submitbutton">> คลิกเพื่อจอง <</a>
								</div>
							</div>
							
					</div>
					<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
						<h1><center><?php echo $confer;?></center></h1>
						<div id="calendar" class='mt-5'></div>
					</div>
					<input type="text" id="conferroom_id" value="<?php echo $id;?>" style=" visibility: hidden;"/>
				</div>
			</div>
