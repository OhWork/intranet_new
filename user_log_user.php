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
    $txtday = new textfieldcalendarreadonly('date','date-picker-1','','date-picker form-control datetimepicker','input-group-addon','date-picker-1');
    $txtday2 = new textfieldcalendarreadonly('date2','date-picker-2','','date-picker form-control datetimepicker','input-group-addon','date-picker-2');
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
     ?>
<?php   echo $form->open('','','','',''); ?>
    <div class='col-md-12 printdisplaynone'>
		<div class='row'>
			<div class='col-md-12' style="margin-top: 10px;">
				<h3>เลือกวันที่ต้องการดู Log</h3>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-12' style="margin-bottom: 10px;">
						<div id="searchdaySettings">
						<div class='row'>
							<div class="col-md-1" style="padding-top: 7px;">
								<?php echo $lbdayfrist; ?>
							</div>
							<div class="date-form dayinbox col-md-3 form-horizontal control-group controls">
								<div class="input-group"><?php echo $txtday;?></div>
							</div>
							<div class="col-md-1" style="padding-top: 7px;">
								<?php echo $lbdaylast; ?>
							</div>
							<div class="date-form dayinbox col-md-3 form-horizontal control-group controls">
								<div class="input-group"><?php echo $txtday2;?></div>
							</div>
							<div class='col-md-4'>
								<div class='row'>
									<div class="col-md-4">
										<center><?php echo $button ?></center>
									</div>
									<div class="col-md-4"></div>
									<div class="col-md-4"></div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class='col-md-12'>
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
            echo $row."<div class='col-sm-4 col-md-offset-0'>"."<h4>Log การใช้งานของระบบ</h4>".$rowend."<div class='col-sm-4 col-md-offset-3'>".$searchipzpo.$rowend.$rowend;

			$grid = new gridView();
			$grid->header = array('<b><center>ระบบ</center></b>','<b><center>ทำ</center></b>','<b><center>วันที่ใช้งาน</center></b>','<b><center>ใช้งานโดย</center></b>','<b><center>IP</center></b>');
			$grid->width = array('20%','20%','20%','20%','20%');
			$grid->name = 'table';
			$grid->renderFromDB($columns,$rs);
		}
			endif;
		?>
	</div>
<script>
 $( function() {
   	$('.datetimepicker').datetimepicker({
		 format: 'YYYY-MM-DD',
 		 minDate: '2017-10-1',
	     useCurrent: false,
	     ignoreReadonly: true,
         allowInputToggle: true,
	     locale:moment.locale('th'),
//       pickTime: false
        });
      } );
</script>
