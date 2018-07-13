<?php
	$id = $_GET['id'];

	$r = $db->findByPK('conferroom','confer_id',$id)->executeRow();
	$conferroom = $r['confer_name'];
?>
<!DOCTYPE html>
<input type='hidden' id='id' name="id" value="<?php echo $id;?>">
        <script>
        $(document).ready(function() {
         $('.print').hide();
         var id = $('#id').val();
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
                    $('#modalFooter').html(event.statusfootermodal);
                    $('#fullCalModal').modal();
                   if (event.status_confer == 'W' && event.status_online == 'W'){

					   $('#confer').removeClass('col-md-5');
					   $('#confer').addClass('col-md-6');
					   $('#txtconfer').removeClass('col-md-8');
					   $('#txtconfer').addClass('col-md-7');
					   $('#statusconferrence').addClass('text-warning');
					   $('#comment').hide();
					   $('#txtconferonline').hide();
					   $('#statusconferrenceonline').hide();
	                   $('.reportconfer').hide();
	                   $('.reportconferonline').hide();
                   }
                   else if((event.status_confer == 'N')){

					   $('#statusconferrence').addClass('text-danger');
					   $('#txtconferonline').hide();
					   $('#statusconferrenceonline').hide();
	                   $('.reportconfer').hide();
	                   $('.reportconferonline').hide();;
                   }
                   else if((event.status_confer == 'Y' && event.status_online == 'W') || (event.status_confer == 'Y' && event.status_online == 'N') || (event.status_confer == 'Y' && event.status_online == 'C')){

					   $('#statusconferrence').addClass('text-success');
	                   $('.reportconfer').show();
	                    $('#comment').hide();
	                   $('#txtconferonline').hide();
					   $('#statusconferrenceonline').hide();
	                   $('.reportconferonline').hide();

                   }
                  else if(event.status_confer == 'Y' && event.status_online == 'Y'){

					   $('#statusconferrence').addClass('text-success');
					   $('#statusconferrenceonline').addClass('text-success');
					    $('#comment').hide();
	                   $('.reportconfer').show();
	                   $('.reportconferonline').show();
                   }
                    else if(event.status_confer == 'C'){

					  $('#statusconferrence').addClass('textor');
	                   $('#txtconferonline').hide();
					   $('#statusconferrenceonline').hide();
	                   $('.reportconfer').hide();
	                   $('.reportconferonline').hide();
                   }


                   return false;
                },
                views: {
				listDay: { buttonText: 'วัน' },
				listWeek: { buttonText: 'อาทิตย์' },
				month: { buttonText: 'เดือน' }
			},

                events:
                {
                    url: 'zoo/zpo_room1.php?gData=' + id,
                },
				eventRender: function (event, element, view) {
					if (event.status_confer == 'W'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/yellow.png' width='10px' height='10px'>");
				    }
			        else if(event.status_confer == 'N'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/red.png' width='10px' height='10px'>");
			        }
			        else if(event.status_confer == 'Y'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/green.png' width='10px' height='10px'>");
			        }
			        else if(event.status_confer == 'C'){
				        element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/orange.png' width='10px' height='10px'>");
			        }
			    },
                  timeFormat: 'H:mm',
                  nextDayThreshold:'00:00',
                  displayEventTime: true,
                  displayEventEnd: true,
                  locale: 'th',

            });
            var conferid = $('#confer_id').val();
			console.log(conferid);
			if(conferid == 1){
				$('#roomzpo1').removeClass('btn-info');
 				$('#roomzpo1').addClass('disabled');
				$('#roomzpo1').addClass('colorcfmenu');
			}
			else if(conferid == 2){
				$('#roomzpo2').removeClass('btn-info');
 				$('#roomzpo2').addClass('disabled');
				$('#roomzpo2').addClass('colorcfmenu');
			}
			else if(conferid == 3){
				$('#roomzpo3').removeClass('btn-info');
 				$('#roomzpo3').addClass('disabled');
				$('#roomzpo3').addClass('colorcfmenu');
			}
			else if(conferid == 4){
				$('#roomdusit1').removeClass('btn-info');
 				$('#roomdusit1').addClass('disabled');
				$('#roomdusit1').addClass('colorcfmenu');
			}
			else if(conferid == 5){
				$('#roomdusit2').removeClass('btn-info');
 				$('#roomdusit2').addClass('disabled');
				$('#roomdusit2').addClass('colorcfmenu');
			}
			else if(conferid == 6){
				$('#roomdusit3').removeClass('btn-info');
 				$('#roomdusit3').addClass('disabled');
				$('#roomdusit3').addClass('colorcfmenu');
			}
			else if(conferid == 7){
				$('#roomdusit4').removeClass('btn-info');
 				$('#roomdusit4').addClass('disabled');
				$('#roomdusit4').addClass('colorcfmenu');
			}
			else if(conferid == 8){
				$('#roomkorach1').removeClass('btn-info');
 				$('#roomkorach1').addClass('disabled');
				$('#roomkorach1').addClass('colorcfmenu');
			}
			else if(conferid == 9){
				$('#roomkorach2').removeClass('btn-info');
 				$('#roomkorach2').addClass('disabled');
				$('#roomkorach2').addClass('colorcfmenu');
			}
			else if(conferid == 10){
				$('#roomkhonkean1').removeClass('btn-info');
 				$('#roomkhonkean1').addClass('disabled');
				$('#roomkhonkean1').addClass('colorcfmenu');
			}
			else if(conferid == 11){
				$('#roomchangmai1').removeClass('btn-info');
 				$('#roomchangmai1').addClass('disabled');
				$('#roomchangmai1').addClass('colorcfmenu');
			}
			else if(conferid == 12){
				$('#roomubon1').removeClass('btn-info');
 				$('#roomubon1').addClass('disabled');
				$('#roomubon1').addClass('colorcfmenu');
			}
			else if(conferid == 13){
				$('#roomsongkhla1').removeClass('btn-info');
 				$('#roomsongkhla1').addClass('disabled');
				$('#roomsongkhla1').addClass('colorcfmenu');
			}
			else if(conferid == 14){
				$('#roomsongkhla1').removeClass('btn-info');
 				$('#roomsongkhla1').addClass('disabled');
				$('#roomsongkhla1').addClass('colorcfmenu');
			}
			else if(conferid == 15){
				$('#roomkkoz1').removeClass('btn-info');
 				$('#roomkkoz1').addClass('disabled');
				$('#roomkkoz1').addClass('colorcfmenu');
			}
			else if(conferid == 16){
				$('#roomubon2').removeClass('btn-info');
 				$('#roomubon2').addClass('disabled');
				$('#roomubon2').addClass('colorcfmenu');
			}
			else if(conferid == 17){
				$('#roomsr2').removeClass('btn-info');
 				$('#roomsr2').addClass('disabled');
				$('#roomsr2').addClass('colorcfmenu');
			}
			else if(conferid == 18){
				$('#roomubon3').removeClass('btn-info');
 				$('#roomubon3').addClass('disabled');
				$('#roomubon3').addClass('colorcfmenu');
			}
			else if(conferid == 19){
				$('#roomkkoz2').removeClass('btn-info');
 				$('#roomkkoz2').addClass('disabled');
				$('#roomkkoz2').addClass('colorcfmenu');
			}
			else if(conferid == 20){
				$('#roomkkoz3').removeClass('btn-info');
 				$('#roomkkoz3').addClass('disabled');
				$('#roomkkoz3').addClass('colorcfmenu');
			}
         });
     </script>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="margin-top: 16px;">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
							<?php
								if($id == 1 || $id == 2 ||$id==3){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomzpo1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=1" at='1'>ห้องประชุม 1</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
								<div class="row">
									<a id="roomzpo2" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=2" at='2'>ห้องประชุม 2</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
								<div class="row">
									<a id="roomzpo3" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=3" at='3'>ห้องประชุม 3</a>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($id == 4 || $id == 5 ||$id == 6 || $id == 7){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomdusit1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=4" at='4'>ห้องประชุมเก้งเผือก</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
								<div class="row">
									<a id="roomdusit2" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=5" at='5'>ห้องประชุมกวางดาว</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
								<div class="row">
									<a id="roomdusit3" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=6" at='6'>ห้องประชุมมะลิ</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12v" style="margin-top:8px;">
								<div class="row">
									<a id="roomdusit4" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=7" at='7'>ห้องประชุมสักทอง</a>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($id == 8 || $id == 9){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomkorach1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=8" at='4'>ห้องประชุมฝ่ายบริหาร</a>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
								<div class="row">
									<a id="roomkorach2" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=9" at='5'>ห้องประชุมโรงบาลสัตว์</a>
								</div>
							</div>
							<?php
								}
							?>
							<?php
								if($id == 10){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomkhonkean1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=10" at='4'>ห้องประชุมฝ่ายบริหารงานทั่วไป</a>
								</div>
							</div>

							<?php
								}
							?>
							<?php
								if($id == 11){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomchangmai1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=11" at='4'>ห้องประชุมชั้น 2 อาคารบริการนักท่องเที่ยว</a>
								</div>
							</div>

							<?php
								}
							?>
							<?php
								if($id == 12 || $id == 16 || $id == 18){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
										<div class="row">
											<a id="roomubon1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=12" at='4'>ห้องประชุมอาคารสำนักงาน</a>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
										<div class="row">
											<a id="roomubon2" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=16" at='4'>ห้องประชุม 2</a>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
										<div class="row">
											<a id="roomubon3" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=18" at='4'>ห้องประชุม 1 (ห้องประชุมใหญ่)</a>
										</div>
									</div>
								</div>
							</div>

							<?php
								}
							?>
							<?php
								if($id == 13){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomsongkhla1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=13" at='4'>ห้องประชุมนกเงือก</a>
								</div>
							</div>

							<?php
								}
							?>
							<?php
								if($id == 15 || $id == 19 || $id == 20){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
										<div class="row">
											<a id="roomkkoz1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=15" at='4'>ห้องประชุมบาหลี</a>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
										<div class="row">
											<a id="roomkkoz2" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=19" at='4'>ห้องประชุมบำรุงสัตว์</a>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:8px;">
										<div class="row">
											<a id="roomkkoz3" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=20" at='4'>ห้องประชุมศูนย์บริการนักท่องเที่ยว(ห้องม่วง)</a>
										</div>
									</div>
								</div>
							</div>

							<?php
								}
							?>
							<?php
								if($id == 17){
							?>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
									<a id="roomsr1" class="btn btn-info col-12 pcfmenu" href="index.php?url=cf_calendar.php&id=17" at='4'>ห้องประชุมคชอาณาจักร</a>
								</div>
							</div>
							<?php
								}
							?>
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
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
												<img class="float-right" src='images/yellow.png' width='25px' height='25px'>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
												<p>รอการอนุมัติ</p>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
												<img class="float-right" src='images/red.png' width='25px' height='25px'>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
												<p>ไม่อนุมัติ</p>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
												<img class="float-right" src='images/green.png' width='25px' height='25px'>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
												<p>อนุมัติ</p>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 mt-1">
										<div class="row">
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'>
												<img  class="float-right" src='images/orange.png' width='25px' height='25px'>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8'>
												<p>ยกเลิก</p>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
						<h1><center><?php echo $conferroom;?></center></h1>
						<div id="calendar" class='mt-5'></div>
					</div>
					<input type="hidden" id="confer_id" value="<?php echo $id;?>">
				</div>
			</div>
<?php include("cf_viewdetail.php")?>
