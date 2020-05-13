<script>
            $(document).ready(function() {

                $('#table1').DataTable( {
                "ordering": false,
                "searching": false,
                "paging":   false,
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "",
                    "infoEmpty": ""
                }
    } );
} );
</script>
<?php
    if (!empty($_SESSION['user_name'])):
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	$user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
    $form = new form();
    $lbyear = new label('กรุณากรอกปี  (ค.ศ.) ที่ต้องการเลือก เช่น 20xx');
    $txtyearonly = new textfield('yearonly','','form-control css-require','','');
    $txtyearqua = new textfield('yearqua','','form-control css-require','','');
    $txtyearmonth = new textfield('yearmonth','','form-control css-require','','');
    $selectmonth = new selectMenu();
    $selectmonth->name = "month";
    $selectmonth->addItem('กรุณาเลือกเดือน','');
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
    $selectquarter = new selectMenu();
    $selectquarter->name = "quarter";
    $selectquarter->addItem('กรุณาเลือกไตรมาส','');
    $selectquarter->addItem('ไตรมาสที่ 1 (1 ต.ค. - 31 ธ.ค.)','1');
    $selectquarter->addItem('ไตรมาสที่ 2 (1 ม.ค. - 31 มี.ค.)','2');
    $selectquarter->addItem('ไตรมาสที่ 3 (1 เม.ย. - 30 มิ.ย.)','3');
    $selectquarter->addItem('ไตรมาสที่ 4 (1 ก.ค. - 30 ก.ย.)','4');
    $selectroom = new SelectFromDB();
    $selectroom->name = 'confer_confer_id';
    $selectroom->idtf = 'conferroom_idtf';
	$button = new buttonok('ค้นหา','submit','btn btn-success col-md-12 printdisplaynone','submit');
	   echo $form->open('','','','','');
	   ?>
<div class='col-md-12 printcenter printdisplaynone' style="padding-bottom:40px;border:solid #ddd 1px;border-radius: 7px;margin-top:16px;">
    <div class='row'>
        <div class='col-md-12 printdisplaynone' style="border-bottom:solid 1px #666666;padding-top:14px;">
            <h4>เลือกสิ่งที่ต้องการค้นหา</h4>
        </div>
<!-- ปุ่มตกลง -->
		<div class="col-md-12 printdisplaynone" style="margin-top: 40px;">
			<div class="row">
				<div class='col-md-2' style="float:left;"></div>
				<div class='col-md-2' style="float:left;"><?php echo $selectmonth;?></div>
				<div class='col-md-3' style="padding-top: 7px;float:left;"><center><?php echo $lbyear;?></center></div>
				<div class='col-md-1' style="float:left;"><?php echo $txtyearmonth;?></div>
				<div class='col-md-2' style="float:left;"></div>
			</div>
		</div>
		<div class="col-md-12 printdisplaynone" style="margin-top: 16px;">
			<div class="row">
				<div class='col-md-5' style="float:left;"></div>
				<div class='col-md-2 printdisplaynone' style="float:left;"><center><?php echo $button; ?></center></div>
				<div class='col-md-5' style="float:left;"></div>
			</div>
		</div>
	</div>
</div>
<?php
       echo $form->close();
      if (isset($_POST['submit'])) {
	   $conferrenname = $_POST['confer'];
@$zrs = $db->findByPK('zoo','zoo_id',$zoo)->executeAssoc();
@$zoo_name = $zrs['zoo_name'];
@$yearthai  = $_POST['year'];    // แปลง ปีพ.ศ. เป็น ปีค.ศ.
        isset($_POST['search'])?$search  = $_POST['search']:$search='';
        isset($_POST['month'])?$month = $_POST['month']:$month='';
        isset($_POST['quarter'])?$qua  = $_POST['quarter']:$qua='';
        isset($_POST['yearqua'])?$yearqua  = $_POST['yearqua']:$yearqua='';
        isset($_POST['yearonly'])?$yearonly  = $_POST['yearonly']:$yearonly='';
        isset($_POST['yearmonth'])?$yearmonth  = $_POST['yearmonth']:$yearmonth='';

  if($month){
         if($yearmonth){
            $qua = "BETWEEN '$yearmonth-$month-01 00:00:00' AND  '$yearmonth-$month-31 23:59:59' ";
        }else{
            $yearmonth = date("Y");
            $qua = "BETWEEN '$yearmonth-$month-01 00:00:00' AND  '$yearmonth-$month-31 23:59:59' ";
        }
    }else{
        $date = date("Y-m-d");
        $qua = " BETWEEN '$date' AND  '$date' AND ";
    }


    switch($month){
        case 1: $monthtxt = "มกราคม"; break;
        case 2: $monthtxt = "กุมภาพันธ์"; break;
        case 3: $monthtxt = "มีนาคม"; break;
        case 4: $monthtxt = "เมษายน"; break;
        case 5: $monthtxt = "พฤษภาคม"; break;
        case 6: $monthtxt = "มิถุนายน"; break;
        case 7: $monthtxt = "กรกฏาคม"; break;
        case 8: $monthtxt = "สิงหาคม"; break;
        case 9: $monthtxt = "กันยายน"; break;
        case 10: $monthtxt = "ตุลาคม"; break;
        case 11: $monthtxt = "พฤศจิกายน"; break;
        case 12: $monthtxt = "ธันวาคม"; break;
    }
    switch($conferrenname){
        case 1: $confertxt = "ห้องประชุมองค์การสวนสัตว์ ๑"; break;
        case 2: $confertxt = "ห้องประชุมองค์การสวนสัตว์ ๒"; break;
        case 3: $confertxt = "ห้องประชุมองค์การสวนสัตว์ ๓"; break;
        case 4: $confertxt = "ห้องประชุมเก้งเผือก"; break;
        case 5: $confertxt = "ห้องประชุมกวางดาว"; break;
        case 6: $confertxt = "ห้องประชุมมะลิ"; break;
        case 7: $confertxt = "ห้องประชุมสักทอง"; break;
        case 8: $confertxt = "ห้องประชุมฝ่ายบริหาร"; break;
        case 9: $confertxt = "ห้องประชุมโรงบาลสัตว์"; break;
        case 10: $confertxt = "ห้องประชุมฝ่ายบริหารงานทั่วไป"; break;
        case 11: $confertxt = "ห้องประชุมนกเงือก"; break;
        case 12: $confertxt = "ห้องประชุมอาคารสำนักงาน"; break;
    }
    $rs = $db->findByPK45LimitBETWEENASC('eventconfer','headncf','conferroom','zoo',
    'eventconfer.confer_confer_id','conferroom.conferroom_id',
    'eventconfer.subzoo_zoo_zoo_id','zoo.zoo_id',
    'eventconfer.headncf_headncf_id','headncf.headncf_id',
    'eventconfer_status',"'Y'",
    'eventconfer_start',$qua,
    'eventconfer_start')->execute();

    $total = $db->countTableBETWEEN45('eventconfer','headncf','conferroom','zoo',
    'eventconfer.confer_confer_id','conferroom.conferroom_id',
    'eventconfer.subzoo_zoo_zoo_id','zoo.zoo_id',
    'eventconfer.headncf_headncf_id','headncf.headncf_id',
    'eventconfer_status',"'Y'",
    'eventconfer_start',$qua)->executeRowcount();

    $countjoin = $db->specifytable('*,
    SUM(eventconfer_join) AS join conferroom'
    ,'eventconfer,zoo,headncf,conferroom',"eventconfer.confer_confer_id = confer.conferroom_id AND
                                           eventconfer.subzoo_zoo_zoo_id = zoo.zoo_id AND
                                           eventconfer.headncf_headncf_id = headncf.headncf_id AND
                                           eventconfer_status = 'Y' AND
                                           eventconfer_start $qua")->executeAssoc();
 ?>
<div class='col-md-12'>
	<div class='row'>
		<div class='col-md-12 reporthead test'>
			<Center><img src='images/logo/zpo.png'></center>
		</div>
		<div class='col-md-12 test'>
			<center>รายงานการใช้บริการห้องประชุม</center>
		</div>
		<div class='col-md-12' style="float:left;">
			<center>
				<?php
    				$yearthai = $yearmonth+543;
    				if($month){
    				echo "ประจำเดือน ".$monthtxt." ปี  ".$yearthai;
    				}else if($textqua){
                    echo $textqua;
                    }else if($yearonly){
                    echo "ประจำปี ".$yearonly;
                    }
    				?>
			</center>
		</div>
  <?php if(!empty($rs)){?>
        <div class='col-md-12'>
			<div class='row'>
				<div class='col-md-12'>
					<p><b><u>สรุป</u></b> จำนวนการขอใช้ห้องประชุมทั้งหมด <?php echo $total;?> ครั้ง</p>
					<p> จำนวนผู้เข้าใช้ทั้งหมด <?php echo $countjoin['joinconfer'];?> คน</p>
				</div>
				<div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('eventconfer_start','eventconfer_end','headncf_name','eventconfer_story','eventconfer_join','zoo_name','conferroom_name');
					$grid = new gridView();
					$grid->pr = 'eventconfer_id';
					$grid->header = array('<b><center>วันเริ่มประชุม</center></b>',
					                      '<b><center>วันเลิกประชุม</center></b>',
					                      '<b><center>ประเภทเรื่อง</center></b>',
					                      '<b><center>เรื่อง</center></b>',
					                      '<b><center>ผู้เข้าร่วมประชุม</center></b>',
										  '<b><center>สำนัก/สวนสัตว์</center></b>',
										  '<b><center>ห้องประชุม</center></b>');
					$grid->name = 'table1';
					$grid->width = array('15%','15%','20%','10%','25%','25%');
					$grid->renderFromDB($columns,$rs);
					}
					?>
				</div>
			</div>
        </div>
		<?php
			}
        endif;?>
	</div>
</div>
