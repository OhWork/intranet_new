<script>
            $(document).ready(function() {

                $('#table1').DataTable( {
                "ordering": false,
                "lengthMenu": [[100, 200, 500, -1], [100, 200, 500, "ทุกหน้า"]],
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
    $lbyear = new label('กรุณากรอกปี  (พ.ศ.) ที่ต้องการเลือก เช่น 25xx');
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
	$button = new buttonok('ค้นหา','','btn btn-success col-md-12','');
	   echo $form->open('','','','','');
	   ?>
<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 printdisplaynone' style="padding-bottom:40px;border:solid #ddd 1px;border-radius: 7px;">
    <div class='row'>
        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' style="border-bottom:solid 1px #666666;padding-top:14px;">
            <h4>เลือกสิ่งที่ต้องการค้นหา</h4>
        </div>
        <div class='col-md-12' style="margin-top: 40px;">
            <div class='row'>
                <div class='col-md-1'></div>
                <div class='btn-group btn-group-toggle col-md-10' data-toggle='buttons'>
					<label class="btn btn-success active" style="width:33%">
                        <input type="radio" name="search" value="1" onChange="swapConfig(this)" id="searchmonth" autocomplete="off" checked>เดือน
                    </label>
                    <label class="btn btn-success" style="width:33%">
                        <input type="radio" name="search" value="2" onChange="swapConfig(this)" id="searchquarter" autocomplete="off">ไตรมาส
                    </label>
                    <label class="btn btn-success" style="width:33%">
                        <input type="radio" name="search" value="3" onChange="swapConfig(this)" id="searchyear" autocomplete="off">ปี
                    </label>
                </div>
                <div class='col-md-1'></div>
			</div>
		</div>
        <!-- ชุดเดือน -->
		<div class="col-md-12" style="margin-top: 40px;" id="searchmonthSettings">
			<div class='row'>
				<div class='col-md-2'></div>
				<div class='col-md-2'><?php echo $selectmonth;?></div>
				<div class='col-md-4' style="padding-top: 7px;"><center><?php echo $lbyear;?></center></div>
				<div class='col-md-2'><?php echo $txtyearmonth;?></div>
				<div class='col-md-2'></div>
			</div>
		</div>
		<!--   ไตรมาส -->
		<div class="col-md-12" style="margin-top: 40px;display:none;" id="searchquarterSettings">
			<div class='row'>
				<div class='col-md-1'></div>
				<div class='col-md-4'><?php echo $selectquarter;?></div>
				<div class='col-md-4' style="padding-top: 7px;"><center><?php echo $lbyear;?></center></div>
				<div class='col-md-2'><?php echo $txtyearqua;?></div>
				<div class='col-md-1'></div>
			</div>
		</div>
		<!--   ปี -->
		<div class="col-md-12" style="margin-top: 40px;display:none;" id="searchyearSettings">
			<div class='row'>
				<div class='col-md-3'></div>
				<div class='col-md-4' style="padding-top: 7px;"><center><?php echo $lbyear;?></center></div>
				<div class='col-md-2'><?php echo $txtyearonly;?></div>
				<div class='col-md-3'></div>
			</div>
		</div>
		<!--ปุ่ม-->
		<div class="col-md-12"style="margin-top: 40px;">
			<div class='row'>
				<div class='col-md-5'></div>
				<div class='col-md-2'><center><?php echo $button; ?></center></div>
				<div class='col-md-5'></div>
			</div>
		</div>
	</div>
</div>
<?php
		echo $form->close();
		@$zrs = $db->findByPK('zoo','zoo_id',$zoo)->executeAssoc();
		@$zoo_name = $zrs['zoo_name'];
		@$yearthai  = $_POST['year'];    // แปลง ปีไทย เป็น ปีฝรั่ง
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
    }else if($qua){
        switch ($qua){
            case 1:
            $yearqua1=$yearqua-1;
                $qua="BETWEEN '$yearqua1-10-01 00:00:00' AND '$yearqua1-12-31 23:59:59' ";
                $textqua = "ไตรมาสที่ 1 (1 ต.ค. - 31 ธ.ค.)";

            break;
            case 2:
                $qua="BETWEEN '$yearqua-01-01 00:00:00' AND '$yearqua-3-31 23:59:59' ";
                $textqua = "ไตรมาสที่ 2 (1 ม.ค. - 31 มี.ค.)";
            break;
            case 3:
                $qua="BETWEEN '$yearqua-04-01 00:00:00' AND  '$yearqua-06-30 23:59:59' ";
                $textqua = "ไตรมาสที่ 3 (1 เม.ย. - 30 มิ.ย.)";
            break;
            case 4:
                $qua="BETWEEN '$yearqua-07-01 00:00:00' AND  '$yearqua-09-30 23:59:59' ";
                $textqua = "ไตรมาสที่ 4 (1 ก.ค. - 30 ก.ย.)";
            break;
        }
    }else if($yearonly){
        $qua = "BETWEEN '$yearonly-01-01 00:00:00' AND  '$yearonly-12-31 23:59:59' ";
    }else{
        $date = date("Y-m-d");
        $qua = " BETWEEN '$date' AND  '$date' AND ";
    }

    if($search == 1){
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
    }
	$CY = $db->countTableBETWEEN13('problem','problem_adminfix',1,'problem_status',"'Y'",'problem_date',$qua)->executeRowcount();
    $rs = $db->findByPK35BETWEEN('problem','subtypetools','typetools','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','problem_adminfix',1,'problem_status',"'Y'",'problem_date',$qua)->execute();
 ?>
<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
	<div class="row">
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 totalimghead reporthead'>
			<center><img src='images/Logo/ZPO.png'></center>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 tsvhrow1'>
			<center>รายงานการซ่อม/บริการคอมพิวเตอร์ขององค์การสวนสัตว์</center>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 tsvhrow1'>
			<center>
				<?php
    				if($month){
    				echo "ประจำเดือน ".$monthtxt." ปี  ".$yearmonth;
    				}else if($textqua){
                    echo $textqua;
                    }else if($yearonly){
                    echo "ประจำปี ".$yearonly;
                    }
    			?>
			</center>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 tsvhrow2'>
            <center><p>ยอดรวม จำนวนการให้บริการทั้งหมด <?php echo $CY;?> ครั้ง</p></center>
        </div>
 <!-- สำนักตรวจสอบ -->
  <?php if(!empty($rs)){?>
        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 tsvshow'>
			<div class="row">
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 tsvrow1'>
					<h4><p>ผู้ดำเนินการแก้ไข นายโชติเชาว์ ปาลคำ</p></h4>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 totalrow2'>
					<p><b><u>สรุป</u></b> จำนวนการให้บริการทั้งหมด <?php echo $CY;?> ครั้ง</p>
				</div>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<?php
						$columns = array('problem_name','problem_dateend','typetools_name','subtypetools_name');
						$grid = new gridView();
						$grid->pr = 'problem_id';
						$grid->header = array('<b><center>ชื่อผู้แจ้ง</center></b>',
											  '<b><center>วันที่แก้ปัญหา</center></b>',
											  '<b><center>ชนิดอุปกรณ์</center></b>',
											  '<b><center>ปัญหา</center></b>');
						$grid->name = 'table1';
						$grid->width = array('25%','25%','25%','25%');
						$grid->renderFromDB($columns,$rs);
						}
					?>	        
				</div>
			</div>
		</div>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 totalrow4'>
			<p><u>หมายเหตุ <?php echo $month.$yearmonth ?></u> </p>
		</div>
	</div>
</div>
<?php endif;?>
