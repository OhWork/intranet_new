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
    $('#table1_1').DataTable( {
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
    $('#table2').DataTable( {
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
    $('#table2_1').DataTable( {
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
    $('#table3').DataTable( {
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
    $('#table3_1').DataTable( {
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
    $('#table4').DataTable( {
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
    $('#table4_1').DataTable( {
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
    $('#table5').DataTable( {
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
    $('#table5_1').DataTable( {
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
    $('#table6').DataTable( {
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
    $('#table6_1').DataTable( {
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
	$button = new buttonok('ค้นหา','','btn btn-success col-md-12 printdisplaynone','submit');
	   echo $form->open('','','','','');
	   ?>
                            <div class='col-md-12 printcenter printdisplaynone' style="padding-bottom:40px;border:solid #ddd 1px;border-radius: 7px;">
                                    <div class='row' style="margin-top:0;">
                                        <div class='col-md-12 printdisplaynone' style="border-bottom:solid 1px #666666;padding-top:14px;">
                    					    <h4>เลือกสิ่งที่ต้องการค้นหา</h4>
                    				    </div>
                                        <div class='col-md-12 printdisplaynone' style="margin-top: 40px;">
                                            <div class='row'>
                                                <div class='col-md-1'>
												</div>
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
											</div>
                                              <div class='col-md-1'></div>
										</div>
                                     <!-- ชุดเดือน -->
									<div class="col-md-12 printdisplaynone" style="margin-top: 40px;" id="searchmonthSettings">
										<div class="row">
											<div class='col-md-3' style="float:left;"></div>
												<div class='col-md-2' style="float:left;"><?php echo $selectmonth;?></div>
												<div class='col-md-3' style="padding-top: 7px;float:left;"><center><?php echo $lbyear;?></center></div>
												<div class='col-md-2' style="float:left;"><?php echo $txtyearmonth;?></div>
											<div class='col-md-2'></div>
										</div>
									</div>
<!--   ไตรมาส -->
									<div class="col-md-12 printgisplaynone" style="margin-top: 40px;display:none;" id="searchquarterSettings">
										<div class="row">
											<div class='col-md-3' style="float:left;"></div>
												<div class='col-md-2'  style="float:left;"><?php echo $selectquarter;?></div>
												<div class='col-md-3' style="padding-top: 7px;float:left;"><center><?php echo $lbyear;?></center></div>
												<div class='col-md-2'  style="float:left;"><?php echo $txtyearqua;?></div>
											<div class='col-md-2'></div>
										</div>
									</div>
<!--   ปี -->
									<div class="col-md-12 printdisplaynone" style="margin-top: 40px;display:none;" id="searchyearSettings">
										<div class="row">
											<div class='col-md-3' style="float:left;"></div>
											<div class='col-md-3' style="padding-top: 7px;float:left;"><center><?php echo $lbyear;?></center></div>
											<div class='col-md-3' style="float:left;"><?php echo $txtyearonly;?></div>
											<div class='col-md-3' style="float:left;"></div>
										</div>
									</div>

									<div class='col-md-12 printdisplaynone'style="margin-top: 40px;">
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

        isset($_POST['search'])?$search  = $_POST['search']:$search='';
        isset($_POST['month'])?$month = $_POST['month']:$month='';
        isset($_POST['quarter'])?$qua  = $_POST['quarter']:$qua='';
        isset($_POST['yearqua'])?$yearqua  = $_POST['yearqua']:$yearqua='';
        isset($_POST['yearonly'])?$yearonly  = $_POST['yearonly']:$yearonly='';
        isset($_POST['yearmonth'])?$yearmonth  = $_POST['yearmonth']:$yearmonth='';
        isset($_GET['zoo'])?$zoo  = $_GET['zoo']:$zoo='';


@$zrs = $db->findByPK('zoo','zoo_id',$zoo)->executeAssoc();
@$zoo_name = $zrs['zoo_name'];
@$month=$_POST['month'];      //เก็บค่า 1   2   3   4   5
@$yearthai  = $_POST['year'];    // แปลง ปีไทย เป็น ปีฝรั่ง

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
        $textqua = "ปี".$yearonly;
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
    $txtreport = "ประจำเดือน ".$monthtxt." ปี  ".$yearmonth;
    }else if($search == 2){
	$txtreport = $textqua." พ.ศ. ".$yearqua;
	}else if($search == 3){
	$txtreport = "ประจำปี ".$yearonly;//แสดงวันที่
    }

$CY = $db->countTableBETWEEN24('problem','zoo','problem.subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',$zoo,'problem_status',"'Y'",'problem_date',$qua)->executeRowcount();
$CS = $db->countTableBETWEEN24('problem','zoo','problem.subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',$zoo,'problem_status',"'S'",'problem_date',$qua)->executeRowcount();
$CN = $db->countTableBETWEEN24('problem','zoo','problem.subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',$zoo,'problem_status',"'N'",'problem_date',$qua)->executeRowcount();
$counttotal =  $CS+$CY+$CN;
//  บริหารงานทั่วไป
    $rs1 = $db->specifytable("subtypetools.subtypetools_name AS STT,
COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
 zoo.zoo_id = $zoo AND
 subzoo.subzoo_name = 'บริหารงานทั่วไป' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem.subtypetools_subtypetools_id")->execute();

$CY1 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'บริหารงานทั่วไป'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'Y'",
                                'problem_date',$qua)->executeRowcount();
$CS1 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'บริหารงานทั่วไป'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'S'",
                                'problem_date',$qua)->executeRowcount();
$CN1 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'บริหารงานทั่วไป'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'N'",
                                'problem_date',$qua)->executeRowcount();
$counttotal1 =  $CS1+$CY1+$CN1;
$rsp1 = $db->specifytable("user.user_name AS name, user.user_last AS lastname,
SUM(IF(problem_status = 'Y',1,0)) AS adminfix",
'problem,subtypetools,subzoo,zoo,user',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 problem.problem_adminfix = user.user_id AND
 subzoo.subzoo_name = 'บริหารงานทั่วไป' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem_adminfix")->execute();
 //  พัฒนาธุรกิจและประชาสัมพันธ์
    $rs2 = $db->specifytable("subtypetools.subtypetools_name AS STT,
COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
 zoo.zoo_id = $zoo AND
 subzoo.subzoo_name = 'พัฒนาธุรกิจและประชาสัมพันธ์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem.subtypetools_subtypetools_id")->execute();
 $CY2 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'พัฒนาธุรกิจและประชาสัมพันธ์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'Y'",
                                'problem_date',$qua)->executeRowcount();
$CS2 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'พัฒนาธุรกิจและประชาสัมพันธ์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'S'",
                                'problem_date',$qua)->executeRowcount();
$CN2 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'พัฒนาธุรกิจและประชาสัมพันธ์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'N'",
                                'problem_date',$qua)->executeRowcount();
$counttotal2 =  $CS2+$CY2+$CN2;
$rsp2 = $db->specifytable("user.user_name AS name, user.user_last AS lastname,
SUM(IF(problem_status = 'Y',1,0)) AS adminfix",
'problem,subtypetools,subzoo,zoo,user',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
 zoo.zoo_id = $zoo AND
 problem.problem_adminfix = user.user_id AND
 subzoo.subzoo_name = 'พัฒนาธุรกิจและประชาสัมพันธ์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem_adminfix")->execute();
 //  การศึกษา
    $rs3 = $db->specifytable("subtypetools.subtypetools_name AS STT,
COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
 zoo.zoo_id = $zoo AND
 subzoo.subzoo_name = 'การศึกษา' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem.subtypetools_subtypetools_id")->execute();
 $CY3 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'การศึกษา'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'Y'",
                                'problem_date',$qua)->executeRowcount();
$CS3 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'การศึกษา'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'S'",
                                'problem_date',$qua)->executeRowcount();
$CN3 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'การศึกษา'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'N'",
                                'problem_date',$qua)->executeRowcount();
$counttotal3 =  $CS3+$CY3+$CN3;
$rsp3 = $db->specifytable("user.user_name AS name, user.user_last AS lastname,
SUM(IF(problem_status = 'Y',1,0)) AS adminfix",
'problem,subtypetools,subzoo,zoo,user',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 problem.problem_adminfix = user.user_id AND
 subzoo.subzoo_name = 'การศึกษา' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem_adminfix")->execute();
 //บำรุงสัตว์
     $rs4 = $db->specifytable("subtypetools.subtypetools_name AS STT,
COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
 zoo.zoo_id = $zoo AND
 subzoo.subzoo_name = 'บำรุงสัตว์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem.subtypetools_subtypetools_id")->execute();
 $CY4 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'บำรุงสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'Y'",
                                'problem_date',$qua)->executeRowcount();
$CS4 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'บำรุงสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'S'",
                                'problem_date',$qua)->executeRowcount();
$CN4 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'บำรุงสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'N'",
                                'problem_date',$qua)->executeRowcount();
$counttotal4 =  $CS4+$CY4+$CN4;
$rsp4 = $db->specifytable("user.user_name AS name, user.user_last AS lastname,
SUM(IF(problem_status = 'Y',1,0)) AS adminfix",
'problem,subtypetools,subzoo,zoo,user',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 problem.problem_adminfix = user.user_id AND
 subzoo.subzoo_name = 'บำรุงสัตว์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem_adminfix")->execute();
 //พัฒนาสวนสัตว์
     $rs5 = $db->specifytable("subtypetools.subtypetools_name AS STT,
COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 subzoo.subzoo_name = 'พัฒนาสวนสัตว์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem.subtypetools_subtypetools_id")->execute();
 $CY5 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'พัฒนาสวนสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'Y'",
                                'problem_date',$qua)->executeRowcount();
$CS5 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'พัฒนาสวนสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'S'",
                                'problem_date',$qua)->executeRowcount();
$CN5 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'พัฒนาสวนสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'N'",
                                'problem_date',$qua)->executeRowcount();
$counttotal5 =  $CS5+$CY5+$CN5;
$rsp5 = $db->specifytable("user.user_name AS name, user.user_last AS lastname,
SUM(IF(problem_status = 'Y',1,0)) AS adminfix",
'problem,subtypetools,subzoo,zoo,user',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 problem.problem_adminfix = user.user_id AND
 subzoo.subzoo_name = 'พัฒนาสวนสัตว์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem_adminfix")->execute();
 //อนุรักษ์ วิจัย และสุขภาพสัตว์
     $rs6 = $db->specifytable("subtypetools.subtypetools_name AS STT,
COUNT(problem.subtypetools_subtypetools_id) AS C_A,
SUM(IF(problem_status = 'N',1,0)) AS C_N,
SUM(IF(problem_status = 'Y',1,0)) AS C_Y,
SUM(IF(problem_status = 'S',1,0)) AS C_S",
'problem,subtypetools,subzoo,zoo',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 subzoo.subzoo_name = 'อนุรักษ์ วิจัย และสุขภาพสัตว์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem.subtypetools_subtypetools_id")->execute();
 $CY6 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'อนุรักษ์ วิจัย และสุขภาพสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'Y'",
                                'problem_date',$qua)->executeRowcount();
$CS6 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'อนุรักษ์ วิจัย และสุขภาพสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'S'",
                                'problem_date',$qua)->executeRowcount();
$CN6 = $db->countTableBETWEEN47('problem','subtypetools','subzoo','zoo',
                                'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
                                'problem.subzoo_subzoo_id','subzoo.subzoo_id',
                                'zoo.zoo_id',$zoo,
                                'subzoo.subzoo_name',"'อนุรักษ์ วิจัย และสุขภาพสัตว์'",
                                'problem.subzoo_zoo_zoo_id','zoo.zoo_id',
                                'problem_status',"'N'",
                                'problem_date',$qua)->executeRowcount();
$counttotal6 =  $CS6+$CY6+$CN6;
$rsp6 = $db->specifytable("user.user_name AS name, user.user_last AS lastname,
SUM(IF(problem_status = 'Y',1,0)) AS adminfix",
'problem,subtypetools,subzoo,zoo,user',
"problem.subtypetools_subtypetools_id = subtypetools.subtypetools_id AND
 problem.subzoo_subzoo_id = subzoo.subzoo_id AND
  zoo.zoo_id = $zoo AND
 problem.problem_adminfix = user.user_id AND
 subzoo.subzoo_name = 'อนุรักษ์ วิจัย และสุขภาพสัตว์' AND
 problem.subzoo_zoo_zoo_id = zoo.zoo_id AND problem_date ".$qua."
 GROUP BY problem_adminfix")->execute();
 ?>

                    <div class='col-xs-12'>
					<div class='col-md-12'>
						<Center><img src='images/logo/ZPO.png'></center>
					</div>
					<div class='col-md-12'>
						<p><Center>รายงานการซ่อม/บริการคอมพิวเตอร์ของ<?php echo $zoo_name; ?></p>
						<?php echo $txtreport; ?></center>
					</div>
					<div class='col-md-12'>
                        <center><p>ยอดรวม จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal;?> ครั้ง</p></center>
                    </div>
 <!-- บริหารงานทั่วไป -->
  <?php if(!empty($rs1)){?>
        <div class='col-md-12'>
            <div class='col-md-12'>
                <h4><p>ฝ่ายบริหารงานทั่วไป</p></h4>
            </div>
            <div class='col-md-12'>
                <p><b><u>สรุป</u></b> จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal1;?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
                <p>จำนวนการให้บริการแล้วเสร็จทั้งหมด <?php echo $CY1; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
<?php
            $columns = array('STT','C_N','C_S','C_Y');
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->header = array('<b><center>ปัญหา</center></b>',
			                      '<b><center>รอดำเนินการ</center></b>',
			                      '<b><center>ระหว่างดำเนินการ</center></b>',
			                      '<b><center>ดำเนินการเสร็จสิ้น</center></b>');
			$grid->name = 'table1';
			$grid->width = array('5%','5%','5%','5%');
			$grid->renderFromDB($columns,$rs1);
			
?>	        </div>
 <div class='row'>
                            <div class='col-md-12'>
                                <p><b><u>เจ้าหน้าที่ผู้ดำเนินการ</u></b>
                            </div>
                            <div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('name','lastname','adminfix');
					$grid = new gridView();
					$grid->pr = 'problem_id';
					$grid->header = array('<b><center>ชื่อ</center></b>',
                                                              '<b><center>นามสกุล</center></b>',
                                                              '<b><center>จำนวน</center></b>');
					$grid->name = 'table1_1';
					$grid->width = array('20%','20%','60%');
					$grid->renderFromDB($columns,$rsp1);
					}
					?>
				</div>
                        </div>
        </div>
 <!-- พัฒนาธุรกิจและประชาสัมพันธ์ -->
 <?php if(!empty($rs2)){?>
        <div class='col-md-12'>
            <div class='col-md-12'>
                <h4><p>ฝ่ายพัฒนาธุรกิจและประชาสัมพันธ์</p></h4>
            </div>
            <div class='col-md-12'>
                <p><b><u>สรุป</u></b> จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal2;?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
                <p>จำนวนการให้บริการแล้วเสร็จทั้งหมด <?php echo $CY2; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
<?php
            $columns = array('STT','C_N','C_S','C_Y');
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->header = array('<b><center>ปัญหา</center></b>',
			                      '<b><center>รอดำเนินการ</center></b>',
			                      '<b><center>ระหว่างดำเนินการ</center></b>',
			                      '<b><center>ดำเนินการเสร็จสิ้น</center></b>');
			$grid->name = 'table2';
			$grid->width = array('5%','5%','5%','5%');
			$grid->renderFromDB($columns,$rs2);
			
?>          </div>
 <div class='row'>
                            <div class='col-md-12'>
                                <p><b><u>เจ้าหน้าที่ผู้ดำเนินการ</u></b>
                            </div>
                            <div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('name','lastname','adminfix');
					$grid = new gridView();
					$grid->pr = 'problem_id';
					$grid->header = array('<b><center>ชื่อ</center></b>',
                                                              '<b><center>นามสกุล</center></b>',
                                                              '<b><center>จำนวน</center></b>');
					$grid->name = 'table2_1';
					$grid->width = array('20%','20%','60%');
					$grid->renderFromDB($columns,$rsp2);
					}
					?>
				</div>
                        </div>
        </div>
 <!-- การศึกษา -->
  <?php if(!empty($rs3)){?>
        <div class='col-md-12'>
            <div class='col-md-12'>
                <h4><p>ฝ่ายการศึกษา</p></h4>
            </div>
             <div class='col-md-12'>
                <p><b><u>สรุป</u></b> จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal3; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
                <p>จำนวนการให้บริการแล้วเสร็จทั้งหมด <?php echo $CY3; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
<?php
            $columns = array('STT','C_N','C_S','C_Y');
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->header = array('<b><center>ปัญหา</center></b>',
			                      '<b><center>รอดำเนินการ</center></b>',
			                      '<b><center>ระหว่างดำเนินการ</center></b>',
			                      '<b><center>ดำเนินการเสร็จสิ้น</center></b>');
			$grid->name = 'table3';
			$grid->width = array('5%','5%','5%','5%');
			$grid->renderFromDB($columns,$rs3);
			
?>	        </div>
        </div>
  <div class='row'>
                            <div class='col-md-12'>
                                <p><b><u>เจ้าหน้าที่ผู้ดำเนินการ</u></b>
                            </div>
                            <div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('name','lastname','adminfix');
					$grid = new gridView();
					$grid->pr = 'problem_id';
					$grid->header = array('<b><center>ชื่อ</center></b>',
                                                              '<b><center>นามสกุล</center></b>',
                                                              '<b><center>จำนวน</center></b>');
					$grid->name = 'table3_1';
					$grid->width = array('20%','20%','60%');
					$grid->renderFromDB($columns,$rsp3);
					}
					?>
				</div>
                        </div>
 <!-- บำรุงสัตว์-->
  <?php if(!empty($rs4)){?>
        <div class='col-md-12'>
            <div class='col-md-12'>
                <h4><p>ฝ่ายบำรุงสัตว์</p></h4>
            </div>
            <div class='col-md-12'>
                <p><b><u>สรุป</u></b> จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal4;?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
                <p>จำนวนการให้บริการแล้วเสร็จทั้งหมด <?php echo $CY4; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
<?php
            $columns = array('STT','C_N','C_S','C_Y');
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->header = array('<b><center>ปัญหา</center></b>',
			                      '<b><center>รอดำเนินการ</center></b>',
			                      '<b><center>ระหว่างดำเนินการ</center></b>',
			                      '<b><center>ดำเนินการเสร็จสิ้น</center></b>');
			$grid->name = 'table4';
			$grid->width = array('5%','5%','5%','5%');
			$grid->renderFromDB($columns,$rs4);
			
?>          </div>
 <div class='row'>
                            <div class='col-md-12'>
                                <p><b><u>เจ้าหน้าที่ผู้ดำเนินการ</u></b>
                            </div>
                            <div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('name','lastname','adminfix');
					$grid = new gridView();
					$grid->pr = 'problem_id';
					$grid->header = array('<b><center>ชื่อ</center></b>',
                                                              '<b><center>นามสกุล</center></b>',
                                                              '<b><center>จำนวน</center></b>');
					$grid->name = 'table4_1';
					$grid->width = array('20%','20%','60%');
					$grid->renderFromDB($columns,$rsp4);
					}
					?>
				</div>
                        </div>
        </div>
 <!-- พัฒนาสวนสัตว์ -->
  <?php if(!empty($rs5)){?>
        <div class='col-md-12'>
            <div class='col-md-12'>
                <h4><p>ฝ่ายพัฒนาสวนสัตว์</p></h4>
            </div>
            <div class='col-md-12'>
                <p><b><u>สรุป</u></b> จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal5;?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
                <p>จำนวนการให้บริการแล้วเสร็จทั้งหมด <?php echo $CY5; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
<?php
            $columns = array('STT','C_N','C_S','C_Y');
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->header = array('<b><center>ปัญหา</center></b>',
			                      '<b><center>รอดำเนินการ</center></b>',
			                      '<b><center>ระหว่างดำเนินการ</center></b>',
			                      '<b><center>ดำเนินการเสร็จสิ้น</center></b>');
			$grid->name = 'table5';
			$grid->width = array('5%','5%','5%','5%');
			$grid->renderFromDB($columns,$rs5);
			
?>	        </div>
 <div class='row'>
                            <div class='col-md-12'>
                                <p><b><u>เจ้าหน้าที่ผู้ดำเนินการ</u></b>
                            </div>
                            <div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('name','lastname','adminfix');
					$grid = new gridView();
					$grid->pr = 'problem_id';
					$grid->header = array('<b><center>ชื่อ</center></b>',
                                                              '<b><center>นามสกุล</center></b>',
                                                              '<b><center>จำนวน</center></b>');
					$grid->name = 'table5_1';
					$grid->width = array('20%','20%','60%');
					$grid->renderFromDB($columns,$rsp5);
					}
					?>
				</div>
                        </div>
        </div>
 <!-- อนุรักษ์ วิจัย และสุขภาพสัตว์ -->
  <?php if(!empty($rs6)){?>
        <div class='col-md-12'>
            <div class='col-md-12'>
                <h4><p>ฝ่ายอนุรักษ์ วิจัย และสุขภาพสัตว์</p></h4>
            </div>
            <div class='col-md-12'>
                <p><b><u>สรุป</u></b> จำนวนการขอรับบริการทั้งหมด <?php echo $counttotal6;?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
                <p>จำนวนการให้บริการแล้วเสร็จทั้งหมด <?php echo $CY6; ?> ครั้ง</p>
            </div>
            <div class='col-md-12'>
<?php
            $columns = array('STT','C_N','C_S','C_Y');
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->header = array('<b><center>ปัญหา</center></b>',
			                      '<b><center>รอดำเนินการ</center></b>',
			                      '<b><center>ระหว่างดำเนินการ</center></b>',
			                      '<b><center>ดำเนินการเสร็จสิ้น</center></b>');
			$grid->name = 'table6';
			$grid->width = array('5%','5%','5%','5%');
			$grid->renderFromDB($columns,$rs6);
			
?>	   	    </div>
 <div class='row'>
                            <div class='col-md-12'>
                                <p><b><u>เจ้าหน้าที่ผู้ดำเนินการ</u></b>
                            </div>
                            <div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('name','lastname','adminfix');
					$grid = new gridView();
					$grid->pr = 'problem_id';
					$grid->header = array('<b><center>ชื่อ</center></b>',
                                                              '<b><center>นามสกุล</center></b>',
                                                              '<b><center>จำนวน</center></b>');
					$grid->name = 'table6_1';
					$grid->width = array('20%','20%','60%');
					$grid->renderFromDB($columns,$rsp6);
					}
					?>
				</div>
                        </div>
        </div>
				<div class='col-md-12'>
					<p><u>หมายเหตุ</u> </p>
				</div>
				<?php

					}
				?>
<?php endif;?>
