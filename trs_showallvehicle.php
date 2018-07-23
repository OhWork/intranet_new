<script type='text/javascript'>
    $(document).ready(function() {
            $('table.table').DataTable({
                "ordering": false,
                "lengthMenu": false,
                "searching": false,
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    });
});
</script>
<?php
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	isset($_GET['id'])?$id = $_GET['id'] : $id='';//เปลี่ยนจากบรรทัดที่ 4 มาเป็นรูปแบบใหม่
	date_default_timezone_set('Asia/Bangkok');
    if($id == 1){
        $type = 'zoo.zoo_type';
        $zoo_name = 'องค์การสวนสัตว์';
    }else{
        $type = 'zoo.zoo_id';
		$zrs = $db->findByPK('zoo','zoo_id',$id)->executeAssoc();
		$zoo_name = $zrs['zoo_name'];
		}
	isset($_SESSION['sub_zoo_zoo_id'])?$user_zoo = $_SESSION['subzoo_zoo_zoo_id']:$user_zoo='';
    $form = new form();
    $lbyear = new label('ปี (พ.ศ.)');
    $lbmonth = new label('เดือน');
    $lbday = new label('วันที่');
    $txtyearonly = new textfield('yearonly','','form-control css-require','','');
    $txtyearqua = new textfield('yearqua','','form-control css-require','','');
    $txtyearmonth = new textfield('yearmonth','','form-control css-require','','');
    $textday = new textfieldcalendarreadonly('date','date-picker-1','','date-picker form-control trsdaybox datetimepicker','input-group-addon btn calen','date-picker-1');
    $texttwoday = new textfieldcalendarreadonly('date2_1','date-picker-2','','date-picker form-control datetimepicker','input-group-addon btn calen','date-picker-2');
    $texttwoday2 = new textfieldcalendarreadonly('date2_2','date-picker-3','','date-picker form-control datetimepicker','input-group-addon btn calen','date-picker-3');
    $txtyear = new textfield('year','','form-control css-require','','');
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

    $selectquarter = new selectMenu();
    $selectquarter->name = "quarter";
    $selectquarter->addItem('กรุณาเลือกไตรมาส','');
    $selectquarter->addItem('ไตรมาสที่ 1 (1 ต.ค. - 31 ธ.ค.)','1');
    $selectquarter->addItem('ไตรมาสที่ 2 (1 ม.ค. - 31 มี.ค.)','2');
    $selectquarter->addItem('ไตรมาสที่ 3 (1 เม.ย. - 30 มิ.ย.)','3');
    $selectquarter->addItem('ไตรมาสที่ 4 (1 ก.ค. - 30 ก.ย.)','4');
	$button = new buttonok('ค้นหา','','btn btn-primary btntrsok','submit');
	$buttonprintpdf = new buttonok('ค้นหา','','btn btn-default trspdf','submit');

     ?>
<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="margin-top:16px;">
	<div class='row'>
		<div class='col-md-12 printdisplaynone'>
			<h4>รายงานแจ้งจำนวนยานพาหนะของสวนสัตว์</h4>
		</div>
<?php echo $form->open('form_reg','myform','','',''); ?>
        <div class='col-md-12 printdisplaynone'>
            <div class='row'>
                <div class='col-md-1 printdisplaynone'></div>
                <div class='col-md-2 azchoice border border-dark'>
                    <div class='row'>
						<div class='col-md-12 azhead'>
                    		<h4>สวนสัตว์</h4>
                    	</div>
                        <div class='col-md-12' style="padding-left:15px;padding-right:15px;padding-top:8px;"">
                        	<label>
                            	<input type="checkbox" name="check_list[]" id='check_list' value="11">
                                	สวนสัตว์ดุสิต
                           	</label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="12">
                                  	สวนสัตว์เปิดเขาเขียว
                            </label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="13">
									สวนสัตว์เชียงใหม่
                            </label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="14">
									สวนสัตว์นครราชสีมา
                            </label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="15">
									สวนสัตว์สงขลา
                            </label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="16">
									สวนสัตว์อุบลราชธานี
                            </label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="17">
									สวนสัตว์ขอนแก่น
                            </label>
                            <label>
                                <input type="checkbox" name="check_list[]" id='check_list' value="18">
									โครงการคชอาณาจักร จังหวัดสุรินทร์
                            </label>
                        </div>
                        <div class='col-md-12'>
							<div class="row">
								<input type="button" class='btn btn-success' style="margin-left:10px;margin-right:5px;" value="ทุกสวนสัตว์" onClick="checkAll('check_list')">
								<input type="button" class='btn btn-danger' value="ยกเลิก" onClick="uncheckAll('check_list')">
							</div>
						</div>
					</div>
				</div>
                <div class='col-md-8 azchoice border border-dark' style="margin-left: 10px;float:left;">
                    <div class='row'>
                        <div class='col-md-12 azhead' style="float: left;">
							<h4>ค้นหา</h4>
                    	</div>
                        <div class='col-md-12' style="margin-top: 4%;" style="float: left;">
                            <div class='row'>
                                <div class='col-md-1' style="float: left;"></div>
                                <div class='btn-group col-md-10' data-toggle='buttons' style="float: left;">
                                    <label class="btn btn-success active" style="width:20%">
                                        <input type="radio" name="search" value="1" onChange="swapConfig(this)" id="searchday" autocomplete="off" checked>วัน
                                    </label>
                                    <label class="btn btn-success" style="width:20%">
                                        <input type="radio" name="search" value="2" onChange="swapConfig(this)" id="searchdaytwo" autocomplete="off">ระหว่างวันที่
                                    </label>
                                    <label class="btn btn-success" style="width:20%">
                                        <input type="radio" name="search" value="3" onChange="swapConfig(this)" id="searchmonth" autocomplete="off">เดือน
                                    </label>
                                    <label class="btn btn-success" style="width:20%">
                                        <input type="radio" name="search" value="4" onChange="swapConfig(this)" id="searchquarter" autocomplete="off">ไตรมาส
                                    </label>
                                    <label class="btn btn-success" style="width:20%">
                                        <input type="radio" name="search" value="5" onChange="swapConfig(this)" id="searchyear" autocomplete="off">ปี
                                    </label>
                                </div>
                                <div class='col-md-1 printdisplaynone' style="float: left;"></div>
							</div>
						</div>
						<div class='col-md-12' style="margin-top: 30px;">
<!-- ชุดวัน -->
							<div id="searchdaySettings">
								<div class='col-md-3' style="float: left;"></div>
								<div class="date-form dayinbox col-md-6" style="float: left;">
									<div class="form-horizontal">
										<div class="control-group">
											<div class="controls">
												<div class="input-group">
													<?php echo $textday;?>
												</div>
											</div>
										</div>
								   </div>
								</div>
								<div class='col-md-3'style="float: left;"></div>
							</div>
 <!--  ชุดระหว่างวัน		 -->
							<div id="searchdaytwoSettings" style="display:none">
								<div class='col-md-1' style="float: left;"></div>
								<div class='date-form dayinbox col-md-4' style="float: left;">
									<div class="form-horizontal">
										<div class="control-group">
											<div class="controls">
												<div class="input-group">
													<?php echo $texttwoday;?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-md-2' style="float: left;padding-top: 8px;"><center><b><- ระหว่าง -></b></center></div>
								<div class="date-form dayinbox col-md-4" style="float: left;">
									<div class="form-horizontal">
										<div class="control-group">
											<div class="controls">
												<div class="input-group">
													<?php echo $texttwoday2;?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='col-md-1' style="float: left;"></div>
							</div>
 <!-- ชุดเดือน -->
							<div id="searchmonthSettings"  style="display:none">
								<div class='col-md-2' style="float: left;"></div>
								<div class='col-md-2' style="float: left;padding-top: 8px;"><center><?php echo $lbmonth;?></center></div>
								<div class='col-md-2' style="float: left;"><?php echo $selectmonth;?></div>
								<div class='col-md-2' style="float: left;padding-top: 8px;"><center><?php echo $lbyear;?></center></div>
								<div class='col-md-2' style="float: left;"><?php echo $txtyearmonth;?></div>
								<div class='col-md-2' style="float: left;"></div>
							</div>
<!--   ไตรมาส -->
							<div id="searchquarterSettings" style="display:none">
								<div class='col-md-2' style="float: left;"></div>
								<div class='col-md-4' style="float: left;"><?php echo $selectquarter;?></div>
								<div class='col-md-2' style="float: left;padding-top: 8px;"><center><?php echo $lbyear;?></center></div>
								<div class='col-md-2' style="float: left;"><?php echo $txtyearqua;?></div>
								<div class='col-md-2' style="float: left;"></div>
							</div>
<!--   ชุดปี -->
							<div id="searchyearSettings" style="display:none">
								<div class='col-md-4' style="float: left;"></div>
								<div class='col-md-2' style="float: left;padding-top: 8px;"><center><?php echo $lbyear;?></center></div>
								<div class='col-md-2' style="float: left;"><?php echo $txtyearonly;?></div>
								<div class='col-md-4' style="float: left;"></div>
							</div>
						</div>
						<div class='col-md-12' style="margin-top: 30px;">
							<div class='col-md-5' style="float: left;"></div>
							<div class='col-md-2' style="float: left;"><center><?php echo $button; ?></center></div>
							<div class='col-md-5' style="float: left;"></div>
						</div>
					</div>
				</div>
				<div class='col-md-1'></div>
			</div>
		</div>

<?php echo $form->close();

	if (isset($_POST['submit'])) {

        isset($_POST['search'])?$search  = $_POST['search']:$search='';
        isset($_POST['date'])?$date  = $_POST['date']:$date='';
        isset($_POST['date2_1'])?$date2_1  = $_POST['date2_1']:$date2_1='';
        isset($_POST['date2_2'])?$date2_2  = $_POST['date2_2']:$date2_2='';
        isset($_POST['month'])?$month = $_POST['month']:$month='';
        isset($_POST['quarter'])?$qua  = $_POST['quarter']:$qua='';
        isset($_POST['yearqua'])?$yearqua  = $_POST['yearqua']:$yearqua='';
        isset($_POST['yearonly'])?$yearonly  = $_POST['yearonly']:$yearonly='';
        isset($_POST['yearmonth'])?$yearmonth  = $_POST['yearmonth']:$yearmonth='';
    $yearthai = $yearqua-543;
    $yearthaiez = $yearthai-1;
    if($date){
        $qua = "touristreport_date BETWEEN '$date' AND  '$date' AND ";
    }else if($date2_1 && $date2_2){
        $qua = "touristreport_date BETWEEN '$date2_1' AND  '$date2_2' AND ";
    }else if($month){
         if($yearmonth){
            $yearchange = $yearmonth-543;
            $qua = "touristreport_date BETWEEN '$yearchange-$month-01' AND  '$yearchange-$month-31' AND ";
        }else{
            $yearmonth = date("Y");
            $qua = "touristreport_date BETWEEN '$yearmonth-$month-01' AND  '$yearmonth-$month-31' AND ";
        }
    }else if($qua){
        switch ($qua){
            case 1:
                $qua="touristreport_date BETWEEN '$yearthaiez-10-01' AND '$yearthaiez-12-31' AND ";
                $textqua = "ไตรมาสที่ 1 (1 ต.ค. - 31 ธ.ค.)";
                $yearqua = $yearthaiez+543;
            break;
            case 2:
                $qua="touristreport_date BETWEEN '$yearthai-01-01' AND '$yearthai-3-31' AND ";
                $textqua = "ไตรมาสที่ 2 (1 ม.ค. - 31 มี.ค.)";
            break;
            case 3:
                $qua="touristreport_date BETWEEN '$yearthai-04-01' AND  '$yearthai-06-30' AND ";
                $textqua = "ไตรมาสที่ 3 (1 เม.ย. - 30 มิ.ย.)";
            break;
            case 4:
                $qua="touristreport_date BETWEEN '$yearthai-07-01' AND  '$yearthai-09-30' AND ";
                $textqua = "ไตรมาสที่ 4 (1 ก.ค. - 30 ก.ย.)";
            break;
        }
    }else if($yearonly){
        $yearthaichange = $yearonly-543;
        $qua = "touristreport_date BETWEEN '$yearthaichange-01-01' AND  '$yearthaichange-12-31' AND ";
    }else{
        $date = date("Y-m-d");
        $qua = "touristreport_date BETWEEN '$date' AND  '$date' AND ";
    }
        $eng_date=strtotime($date);
        $eng_date2_1=strtotime($date2_1);
        $eng_date2_2=strtotime($date2_2);
        $thai_date = thai_date($eng_date);
        $thai_date2_1= thai_date($eng_date2_1);
        $thai_date2_2 = thai_date($eng_date2_2);
       $space = "";
        if(isset($_POST['check_list'])){
            foreach($_POST['check_list'] as $c){
                if(!empty($c)){
                    $sqlplus.= $space."{$c}";
                    $space = ",";//Change  to OR after 1st WHERE
                    }
        }
        }else{
            $sqlplus = "11,12,13,14,15,16,17";
        }
    if($search == 1){ ?>
    <div class='col-md-12' style="float: left;">
        <div class='col-md-12'><h3>รายงานมลพิษยานพาหนะประจำ<?php echo $thai_date; ?></h3>
    <?php
    }else if($search == 2){ ?>
    <div class='col-md-12' style="float: left;">
        <div class='col-md-12'><h3>รายงานมลพิษยานพาหนะระหว่างวันที่<?php echo $thai_date2_1; ?> ถึง <?php echo $thai_date2_2; ?></h3>
<?php
    }else if($search == 3){
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
    } ?>
        <div class='col-md-12' style="float: left;">
			<div class='col-md-12'>
				<h3>รายงานจำนวนยานพาหนะเดือน <?php echo $monthtxt; ?> พ.ศ. <?php echo $yearmonth; ?></h3>
    <?php }else if($search == 4){ ?>
	    <div class='col-md-12' style="float: left;">
			<div class='col-md-12'>
				<h3>รายงานจำนวนยานพาหนะประจำ <?php echo $textqua; ?> พ.ศ. <?php echo $yearqua; ?></h3>
	<?php }else if($search == 5){ ?>
	    <div class='col-md-12' style="float: left;">
			<div class='col-md-12'>
				<h3>รายงานจำนวนยานพาหนะประจำปี <?php echo $yearonly; ?></h3><!-- //แสดงวันที่ -->
    <?php }else{ ?>
        <div class='col-md-12' style="float: left;">
			<div class='col-md-12'>
				<h3>รายงานจำนวนยานพาหนะ <?php echo $thai_date;?></h3>
	<?php }

 $trs = $db->specifytable('zoo_name,
    SUM(touristreport_vehicle_bus) AS bus,
    SUM(touristreport_vehicle_car) AS car,
    SUM(touristreport_vehicle_mtc) AS mtc,

    SUM(COALESCE(touristreport_vehicle_bus,0)+
    COALESCE(touristreport_vehicle_car,0)+
    COALESCE(touristreport_vehicle_mtc,0)) AS total'
    ,'touristreport,zoo',"touristreport.touristreport_zoo_zoo_id = zoo.zoo_id AND $qua touristreport_zoo_zoo_id IN($sqlplus) GROUP BY touristreport_zoo_zoo_id ORDER BY zoo_no ASC")->execute();

    $trsfinal = $db->specifytable('*,
    SUM(touristreport_vehicle_bus) AS bus,
    SUM(touristreport_vehicle_car) AS car,
    SUM(touristreport_vehicle_mtc) AS mtc'
    ,'touristreport,zoo',"touristreport.touristreport_zoo_zoo_id = zoo.zoo_id AND $qua touristreport_zoo_zoo_id IN($sqlplus)")->executeAssoc();

            $columns = array(
                             'zoo_name',
                             'bus',
                             'car',
                             'mtc'
                            );

			$grid = new gridView();
			$grid->pr = 'touristreport_id';
			$grid->header = array('<center>สวนสัตว์</center>','<center>รถบัส</center>','<center>รถยนต์</center>','<center>รถจักรยานยนต์</center>',
			                      );
			$grid->width = array('20%','20%','20%','20%');
			$grid->name = 'table';
// 			$grid->special = 4;
			$grid->system = 'touristreportmain';
			$grid->footer = array(
			                      '<b><center>รวม</b></center>',
			                      '<b><center>'.number_format($trsfinal['bus']).'</b></center>',
			                      '<b><center>'.number_format($trsfinal['car']).'</b></center>',
                                  '<b><center>'.number_format($trsfinal['mtc']).'</b></center>');
			$grid->renderFromDB($columns,$trs);
}?>
			</div>
		</div>
    </div>
</div>
<script>
   $.fn.datepicker.dates['th'] = {
                                days: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์", "อาทิตย์"],
                                daysShort: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                                daysMin: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                                months: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                monthsShort: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                today: "วันนี้"
};
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
