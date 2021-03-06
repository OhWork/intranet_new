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
               eventClick: function(info) {
//                    console.log('modal', info);
                    $('#modalTitle').html(info.event.title);
                    $('#modalStatus').html(info.event.stat);
                    $('#modalBody').html(info.event.extendedProps.description);
                    $('#modalFooter').html(info.event.extendedProps.statusfootermodal);
                    $('#fullCalModal').modal();
                    var idzoo = info.event.extendedProps.zoo_zoo_id;
                    var stat_confer = info.event.extendedProps.status_confer;
                    var stat_online = info.event.extendedProps.status_online;
                    if(idzoo == 3){
	                if (stat_confer == 'W' && stat_online == 'W'){
                            $('#confer').removeClass('col-md-5');
                            $('#confer').addClass('col-md-6');
                            $('#txtconfer').removeClass('col-md-8');
                            $('#txtconfer').addClass('col-md-7');
                            $('#statusconferrence').addClass('text-warning');
                            $('#comment').hide();
                            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').hide();
	                }
	                else if((stat_confer == 'N')){
                            $('#statusconferrence').addClass('text-danger');
                            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').hide();;
	                }
	                else if((stat_confer == 'Y' && stat_online == 'W') || (stat_confer == 'Y' && stat_online == 'N') || (stat_confer == 'Y' && stat_online == 'C')){
                    $('#statusconferrence').addClass('text-success');
		            $('.reportconferzpo').show();
		            $('.reportconfersongkla').hide();
		            $('#comment').hide();
		            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferonline').hide();
	                }
	                else if(stat_confer == 'Y' && stat_online == 'Y'){
                            $('#statusconferrence').addClass('text-success');
                            $('#statusconferrenceonline').addClass('text-success');
                            $('#comment').hide();
		            $('.reportconferzpo').show();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').show();
	                }
	                else if(stat_confer == 'C'){
                            $('#statusconferrence').addClass('textor');
		            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').hide();
	                }
                    }
                    else if(idzoo == 15){
			if (stat_confer == 'W' && stat_online == 'W'){
                            $('#confer').removeClass('col-md-5');
                            $('#confer').addClass('col-md-6');
                            $('#txtconfer').removeClass('col-md-8');
                            $('#txtconfer').addClass('col-md-7');
                            $('#statusconferrence').addClass('text-warning');
                            $('#comment').hide();
                            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').hide();
	                }
                        else if((stat_confer == 'N')){
                            $('#statusconferrence').addClass('text-danger');
                            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').hide();;
	                }
                        else if((stat_confer == 'Y' && stat_online == 'W') || (stat_confer == 'Y' && stat_online == 'N') || (stat_confer == 'Y' && stat_online == 'C')){
                            $('#statusconferrence').addClass('text-success');
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').show();
		            $('#comment').hide();
		            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferonline').hide();
                        }
                        else if(stat_confer == 'Y' && stat_online == 'Y'){
                            $('#statusconferrence').addClass('text-success');
                            $('#statusconferrenceonline').addClass('text-success');
                            $('#comment').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').show();
		            $('.reportconferonline').show();
	                }
                        else if(stat_confer == 'C'){
                            $('#statusconferrence').addClass('textor');
		            $('#txtconferonline').hide();
                            $('#statusconferrenceonline').hide();
		            $('.reportconferzpo').hide();
		            $('.reportconfersongkla').hide();
		            $('.reportconferonline').hide();
	                }
                    }
                   return false;
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
		//	eventRender: function (event, element, view) {
		//			if (event.status_confer == 'W'){
		//		        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/yellow.png' width='10px' height='10px'>");
		//		    }
		//	        else if(event.status_confer == 'N'){
		//		        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/red.png' width='10px' height='10px'>");
			    //    }
			   //      else if(event.status_confer == 'Y'){
			//	        if(event.status_online == 'Y'){
			//		       element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/imgvdo.jpg' width='10px' height='10px'>");
			//	       }
			//	        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/green.png' width='10px' height='10px'>");
			   //     }
			//        else if(event.status_confer == 'C'){
				//       element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/orange.png' width='10px' height='10px'>");
			      //}
			    //},
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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
							<?php
								$rs =$db->findByPK('conferroom','zoo_zoo_id',$_GET['zoo'])->execute();
								foreach($rs as $showrs){
									?>
									<a id="<?php echo $showrs['conferroom_id'];?>" class="btn btn-info col-12 pcfmenu mt-3" href="index.php?url=cf_calendar.php&id=<?php echo $showrs['conferroom_id'];?>&zoo=<?php echo $_GET['zoo'];?>"><?php echo $showrs['conferroom_name']; ?></a>
									<?php
								}
							?>
							</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenuok">
								<div class="row">
									<a href="index.php?url=cf_addday.php&id=<?php echo $id;?>" class="btn btn-success col-md-12" id="submitbutton">> คลิกเพื่อจอง <</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 cfstatus">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<p style="font-size: large;"><center><b>สถานะการจอง</b></center></p>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
                                                                                            <button class="btn btn-primary btn-circle" style="background-color:#F6E05E;border: none;"></button>
											</div>
											<div class='col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 pl-0 pr-0'>
												<p>รอการอนุมัติ</p>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
												<button class="btn btn-primary btn-circle" style="background-color:#e30000;border: none;"></button>
											</div>
											<div class='col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 pl-0 pr-0'>
												<p>ไม่อนุมัติ</p>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
												<button class="btn btn-primary btn-circle" style="background-color:#51c900;border: none;"></button>
											</div>
											<div class='col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 pl-0 pr-0'>
												<p>อนุมัติห้องประชุม</p>
											</div>
										</div>
									</div>
                                                                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
												<button class="btn btn-primary btn-circle" style="background-color:#275FEA;border: none;"></button>
											</div>
											<div class='col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 pl-0 pr-0'>
												<p>อนุมัติการประชุมออนไลน์</p>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3'>
												<button class="btn btn-primary btn-circle" style="background-color:#f0911d;border: none;"></button>
											</div>
											<div class='col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 pl-0 pr-0'>
												<p>ยกเลิก</p>
											</div>
										</div>
									</div>
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
<?php include("cf_viewdetail.php")?>
