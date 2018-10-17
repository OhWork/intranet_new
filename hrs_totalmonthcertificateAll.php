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
    $selectroom->idtf = 'confer_idtf';
	$button = new buttonok('ค้นหา','submit','btn btn-success col-md-12 printdisplaynone','submit');
echo $form->open('','','col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12','','');
	   ?>
<div class='col-md-12 printcenter printdisplaynone' style="padding-bottom:40px;border:solid #ddd 1px;border-radius: 7px;margin-top:16px;">
        <div class='col-md-12 printdisplaynone' style="border-bottom:solid 1px #666666;padding-top:14px;">
            <h4>เลือกสิ่งที่ต้องการค้นหา</h4>
        </div>
<!-- ปุ่มตกลง -->
		<div class="col-md-12 printdisplaynone" style="margin-top: 40px;">
			<div class="row">
				<div class='col-md-2'></div>
				<div class='col-md-3'><?php echo $selectmonth;?></div>
				<div class='col-md-4 pt-2'><center><?php echo $lbyear;?></center></div>
				<div class='col-md-1'><?php echo $txtyearmonth;?></div>
				<div class='col-md-2'></div>
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
<?php
       echo $form->close();
      if (isset($_POST['submit'])) {
	   $conferrenname = $_POST['conferroom'];
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

//     $rs = $db->findByPK2("hrctf","typectf",'typectf_typectf_id','typectf_id')->execute();
     $rs = $db->specifytable('typectf_name,
                                count(typectf_typectf_id) AS ctf',
                                        'hrctf,typectf',"hrctf.typectf_typectf_id = typectf.typectf_id AND hrctf_status = 'Y' AND hrctf_datereg $qua GROUP BY typectf_typectf_id")->execute();
     $total = $db->countTableBETWEEN('hrctf','hrctf_status',"'Y'",'hrctf_datereg',$qua)->executeRowcount()
 ?>
<div class='col-md-12'>
	<div class='row'>
		<div class='col-md-12 reporthead test'>
			<Center><img src='images/Logo/zpo.png'></center>
		</div>
		<div class='col-md-12 test'>
			<center>รายงานการขอใบรับรอง</center>
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
					<p><b><u>สรุป</u></b> จำนวนการขอใบรับรอง <?php echo $total;?> ครั้ง</p>
				</div>
				<div class='col-md-12 page' style="float:left;">
					<?php
					$columns = array('typectf_name','ctf');
					$grid = new gridView();
					$grid->pr = 'hrctf_id';
					$grid->header = array(
					                      '<b><center>ประเภทใบรับรอง</center></b>',
					                      '<b><center>จำนวน</center></b>');
					$grid->name = 'table1';
					$grid->width = array('50%','50%');
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
