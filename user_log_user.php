<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    } );
} );
</script>
<?php
   if (!empty($_SESSION['user_name'])):
	include_once 'database/db_tools.php';
	include_once 'connect.php';
    date_default_timezone_set('Asia/Bangkok');
	$user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
    $form = new form();
    $lbyear = new label('ปี (พ.ศ.)');
    $lbmonth = new label('เดือน');
    $lbday = new label('วันที่');
    $lbday = new label('ปี');
    $lbdayfrist = new label('วันที่เริ่มต้น');
    $lbdaylast = new label('วันที่สิ้นสุด');
    $txtday = new datetimepicker('date','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','','');
    //$txtday = new datetimepicker('date','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker1','#datetimepicker1','');
    $txtday2 = new datetimepicker('date2','datetimepicker2','','form-control datetimepicker-input','date-form dayinbox form-horizontal control-group controls input-group','input-group date','datetimepicker2','#datetimepicker2','','');
    //$txtday2 = new datetimepicker('date2','datetimepicker2','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker2','#datetimepicker2','');
    $selectmonth = new selectMenu();
    $selectmonth->name = "month";
    $selectmonth->addItem('เลือก','');
    $selectmonth->addItem('มกราคม','01');
    $selectmonth->addItem('กุมภาพันธ์','02');
    $selectmonth->addItem('มีนาคม','03');
    $selectmonth->addItem('เมษายน','04');
    $selectmonth->addItem('พฤษภาคม','05');
    $selectmonth->addItem('มิถุนายน','06');
    $selectmonth->addItem('กรกฏาคม','07');
    $selectmonth->addItem('สิงหาคม','08');
    $selectmonth->addItem('กันยายน','09');
    $selectmonth->addItem('ตุลาคม','10');
    $selectmonth->addItem('พฤศจิกายน','11');
    $selectmonth->addItem('ธันวาคม','12');
    $txtyear = new textfield('year','','form-control css-require','','');
	$button = new buttonok('ค้นหา','','btn btn-primary col-12','submit');
echo $form->open('','','col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12','',''); ?>
	<div class='row'>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8" style="background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:solid 1px #E0E0E0;">
					<h4>เลือกวันที่ต้องการดู Log</h4>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
					<div id="searchdaySettings">
						<div class='row'>
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
									<?php echo $lbdayfrist; ?>
								</div>
								<div class="date-form dayinbox col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-horizontal control-group controls">
									<div class="input-group">
										<?php echo $txtday;?>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
						</div>
					</div>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2'>
					<div id="searchdaySettings">
						<div class='row'>
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
								<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
									<?php echo $lbdaylast; ?>
								</div>
								<div class="date-form dayinbox col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-horizontal control-group controls">
									<div class="input-group">
										<?php echo $txtday2;?>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
						</div>
					</div>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="padding-bottom:16px;">
					<div class='row'>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'><?php echo $button; ?></div>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4'></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"></div>
	</div>
<?php	        echo $form->close();
    isset($_POST['date'])?$date  = $_POST['date']:$date='';
    isset($_POST['date2'])?$date2 = $_POST['date2']:$date2='';

	if($_POST){
    $qua = "BETWEEN '$date 00:00:00' AND  '$date2 23:59:59' ";
    $columns = array('log_system','log_action','log_action_date','log_action_by','log_ip');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

// 			$rs2 = "user,subzoo,zoo  where ipzpo.subzoo_subzoo_id = subzoo.subzoo_id && subzoo.zoo_zoo_id = zoo.zoo_id ";
            $rs = $db->findByPK11BETWEEN('log','log_action_date',$qua)->execute();
?>
	<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
		<div class='row'>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
				<div class='row'>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
						<h4>Log การใช้งานของระบบ</h4>
					</div>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
						<?php echo $searchipzpo;
							$grid = new gridView();
							$grid->header = array('<b><center>ระบบ</center></b>','<b><center>ทำ</center></b>','<b><center>วันที่ใช้งาน</center></b>','<b><center>ใช้งานโดย</center></b>','<b><center>IP</center></b>');
							$grid->width = array('20%','20%','20%','20%','20%');
							$grid->name = 'table';
							$grid->renderFromDB($columns,$rs);
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
		</div>
	</div>
<?php endif; ?>
<script>
 $( function() {
   	$('.date').datetimepicker({
		 format: 'YYYY-MM-DD',
 		 minDate: '2017-10-1',
	     useCurrent: false,
	     ignoreReadonly: true,
         allowInputToggle: true,
	     locale:moment.locale('th'),
//       pickTime: false
        });
        $(".date").on("change.datetimepicker", function (e) {
             var widget = $(this).find(".bootstrap-datetimepicker-widget");
                if (widget.length > 0) {
                    widget.toggle("hide.datetimepicker");
                    $(this).find(".form-control").blur();
                }

        });
      } );
</script>
