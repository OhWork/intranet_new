<?php
	$id = $_GET['id'];

	$r = $db->findByPK('confer','confer_id',$id)->executeRow();
	$confer = $r['confer_name'];
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
                   if(event.zoo_zoo_id == 3){
	                   if (event.status_confer == 'W' && event.status_online == 'W'){
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
	                   else if((event.status_confer == 'N')){
						   $('#statusconferrence').addClass('text-danger');
						   $('#txtconferonline').hide();
						   $('#statusconferrenceonline').hide();
		                   $('.reportconferzpo').hide();
		                   $('.reportconfersongkla').hide();
		                   $('.reportconferonline').hide();;
	                   }
	                   else if((event.status_confer == 'Y' && event.status_online == 'W') || (event.status_confer == 'Y' && event.status_online == 'N') || (event.status_confer == 'Y' && event.status_online == 'C')){
						   $('#statusconferrence').addClass('text-success');
		                   $('.reportconferzpo').show();
		                   $('.reportconfersongkla').hide();
		                   $('#comment').hide();
		                   $('#txtconferonline').hide();
						   $('#statusconferrenceonline').hide();
		                   $('.reportconferonline').hide();

	                   }
	                  else if(event.status_confer == 'Y' && event.status_online == 'Y'){
						   $('#statusconferrence').addClass('text-success');
						   $('#statusconferrenceonline').addClass('text-success');
						   $('#comment').hide();
		                   $('.reportconferzpo').show();
		                   $('.reportconfersongkla').hide();
		                   $('.reportconferonline').show();
	                   }
	                    else if(event.status_confer == 'C'){
						  $('#statusconferrence').addClass('textor');
		                   $('#txtconferonline').hide();
						   $('#statusconferrenceonline').hide();
		                   $('.reportconferzpo').hide();
		                   $('.reportconfersongkla').hide();
		                   $('.reportconferonline').hide();
	                   }
				   }
				   else if(event.zoo_zoo_id == 15){
				   	if (event.status_confer == 'W' && event.status_online == 'W'){
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
	                   else if((event.status_confer == 'N')){
						   $('#statusconferrence').addClass('text-danger');
						   $('#txtconferonline').hide();
						   $('#statusconferrenceonline').hide();
		                   $('.reportconferzpo').hide();
		                   $('.reportconfersongkla').hide();
		                   $('.reportconferonline').hide();;
	                   }
	                   else if((event.status_confer == 'Y' && event.status_online == 'W') || (event.status_confer == 'Y' && event.status_online == 'N') || (event.status_confer == 'Y' && event.status_online == 'C')){
						   $('#statusconferrence').addClass('text-success');
		                   $('.reportconferzpo').hide();
		                   $('.reportconfersongkla').show();
		                   $('#comment').hide();
		                   $('#txtconferonline').hide();
						   $('#statusconferrenceonline').hide();
		                   $('.reportconferonline').hide();

	                   }
	                  else if(event.status_confer == 'Y' && event.status_online == 'Y'){
						   $('#statusconferrence').addClass('text-success');
						   $('#statusconferrenceonline').addClass('text-success');
						   $('#comment').hide();
		                   $('.reportconferzpo').hide();
		                   $('.reportconfersongkla').show();
		                   $('.reportconferonline').show();
	                   }
	                    else if(event.status_confer == 'C'){
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
				        if(event.status_online == 'Y'){
					       element.find('div.fc-content').prepend("<img class='mb-1 mr-1' src='images/imgvdo.jpg' width='10px' height='10px'>");
				        }
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
            var disbledid = document.getElementById(<?php echo $r['confer_id'];?>);
            var checkdisbled = <?php echo $_GET['id']?>;
			if(conferid == checkdisbled){
				disbledid.classList.remove('btn-primary');
 				disbledid.classList.add('disabled');
				disbledid.classList.add('colorcfmenu');
			}
         });
     </script>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 16px;">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mrgcfmenu">
								<div class="row">
							<?php
								$rs =$db->findByPK('confer','zoo_zoo_id',$_GET['zoo'])->execute();
								foreach($rs as $showrs){
									?>
									<a id="<?php echo $showrs['confer_id'];?>" class="btn btn-primary col-12 pcfmenu mt-3" href="index.php?url=cf_calendar.php&id=<?php echo $showrs['confer_id'];?>&zoo=<?php echo $_GET['zoo'];?>"><?php echo $showrs['confer_name']; ?></a>
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
						<h1><center><?php echo $confer;?></center></h1>
						<div id="calendar" class='mt-5'></div>
					</div>
					<input type="text" id="confer_id" value="<?php echo $id;?>">
				</div>
			</div>
<?php include("cf_viewdetail.php")?>
