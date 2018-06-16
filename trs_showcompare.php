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
		
	isset($_SESSION['sub_zoo_zoo_id'])?$user_zoo = $_SESSION['subzoo_zoo_zoo_id']:$user_zoo='';
    $form = new form();
    $lbyear = new label('ปี (พ.ศ.)');
    $lbmonth = new label('เดือน');
    $txtyearonly = new textfield('yearonly','','form-control css-require','','');
    $txtyearqua = new textfield('yearqua','','form-control css-require','','');
    $txtyearmonth = new textfield('yearmonth','','form-control css-require','','');
    $txtyear = new textfield('year','','form-control css-require','','');
    $radiozoo = new radioGroup();
    $radiozoo->name = 'zoo';
    $radiozoo->add('สวนสัตว์ดุสิต',11,'checked');
    $radiozoo->add('สวนสัตว์เปิดเขาเขียว',12,'');
    $radiozoo->add('สวนสัตว์เชียงใหม่',13,'');
    $radiozoo->add('สวนสัตว์นครราชสีมา',14,'');
    $radiozoo->add('สวนสัตว์สงขลา',15,'');
    $radiozoo->add('สวนสัตว์อุบลราชธานี',16,'');
    $radiozoo->add('สวนสัตว์ขอนแก่น',17,'');
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
	$buttonprintpdf = new buttonok('ค้นหา','','btn btn-default trspdf','');

     ?>
        <?php
			echo "<div class='sumcon'>";
			echo "<div class='col-md-12 trshead'>
				  <h1>รายงานจำนวนผู้เข้าชมของสวนสัตว์</h1>
				  </div>";
					echo $form->open('form_reg','myform','','','');
					?>
                    <div class='col-md-12 alzoo1' style='margin-bottom: 10px;'>
                   	<div class='row'>
                    <div class='col-md-1'></div>
                    	<div class='col-md-2 trswh' style="height:267.31px;,padding-bottom:18px;">
                        <div class='row'>
                        	<div class='col-md-12' style="border-bottom:solid 1px #666666;">
                    			<h4>เลือกสวนสัตว์</h4>
                    		</div>
                        	<div class='col-md-12' style="padding: 5 15 0 15;">
                            	<?php echo $radiozoo;?>
                            </div>
                            <div class='col-md-12'>
<!--
                                	<input type="button" class='btn btn-success' value="ทุกสวนสัตว์" onClick="checkAll('check_list')">
                                	<input type="button" class='btn btn-danger' value="ยกเลิก" onClick="uncheckAll('check_list')">
-->
                       </div>                                
                     </div>
                     </div>
                                    <div class='col-md-8 trswh' style="margin-left:10px;padding-bottom:13px;">
                                    <div class='row' style="margin-top:0;">
                                    <div class='col-md-12' style="border-bottom:solid 1px #666666;padding-bottom:2px;">
                    					<h4>เลือกสิ่งที่ต้องการค้นหา</h4>
                    				</div>
                                    <div class='col-md-12'>
                                    <div class='row'>
                                    	<div class='col-md-1'>
                                    	</div>
                                    	<div class='btn-group col-md-10' data-toggle='buttons'>
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
                                    	<div class='col-md-1'>
                                    </div>
                                    </div>

 <!-- ชุดเดือน -->
 <div class='col-md-12 trsin'>
                  <div id="searchmonthSettings">
                  <div class='col-md-2'>
                  </div>
                  	<div class='col-md-2 trsmonth'><?php echo $lbmonth;?>
                    </div>
                  	<div class='col-md-2 trsboxmonth'><?php echo $selectmonth;?>
                    </div>
                    <div class='col-md-2 trsmonth'><?php echo $lbyear;?>
                    </div>
                    <div class='col-md-2 trsboxmonth'><?php echo $txtyearmonth;?>
                    </div>
                  <div class='col-md-2'>
                  </div>
 			      </div>
<!--   ไตรมาส -->
                <div id="searchquarterSettings" style="display:none">
					<div class='col-md-2'></div>
						<div class='col-md-4 trsquater'><?php echo $selectquarter;?></div>
						<div class='col-md-2 trsquateryear'><?php echo $lbyear;?></div>
						<div class='col-md-2 trsboxquateryear'><?php echo $txtyearqua;?></div>
 					</div>
                    <div class='col-md-2'>
                    </div>
                </div>
 					<div id="searchyearSettings" style="display:none">
					<div class='col-md-4'>
                  	</div>
						<div class='col-md-2 trsquateryear'><?php echo $lbyear;?></div>
						<div class='col-md-2 trscartonyear'><?php echo $txtyearonly;?></div>
                  	<div class='col-md-4'>
                  	</div>
 			   </div>
                    
			<?php
			echo "<div class='col-md-12 trsbt'>
					<div class='col-md-5'></div>
					<div class='col-md-2'><center>".$button."</center></div>
					<div class='col-md-5'></div>
				  </div>
				  </div>
				  </div>
				  </div>
				  <div class='col-md-1'></div>
				  </div>
				  </div>";
			echo $form->close();
			
        isset($_POST['search'])?$search  = $_POST['search']:$search='';
        isset($_POST['zoo'])?$zoo  = $_POST['zoo']:$zoo='';		
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
            $quaplan = "plan_date BETWEEN '$yearchange-$month-01' AND  '$yearchange-$month-31' AND ";
        }else{
            $yearmonth = date("Y");
            $qua = "touristreport_date BETWEEN '$yearmonth-$month-01' AND  '$yearmonth-$month-31' AND ";
            $quaplan = "plan_date BETWEEN '$yearchange-$month-01' AND  '$yearchange-$month-31' AND ";
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
    

 $trsplan = $db->specifytable("
    SUM(plan_adult) AS plan_adult,
    SUM(plan_child) AS plan_child,
    SUM(plan_ch_pj) AS plan_ch_pj,
    SUM(plan_sp_ch) AS plan_sp_ch,
    SUM(plan_f_ch) AS plan_f_ch,
    SUM(plan_f_ad) AS plan_f_ad,
    SUM(plan_chsafari_adult) AS plan_chsafari_adult,
    SUM(plan_chsafari_child) AS plan_chsafari_child,
    SUM(plan_sfsafari_ad) AS plan_sfsafari_ad,
    SUM(plan_sfsafari_ch) AS plan_sfsafari_ch,
    SUM(plan_free) AS plan_free,

 SUM(COALESCE(plan_adult,0)+
    COALESCE(plan_child,0)+
    COALESCE(plan_ch_pj,0)+
    COALESCE(plan_sp_ch,0)+
    COALESCE(plan_f_ch,0)+
    COALESCE(plan_f_ad,0)+
    COALESCE(plan_chsafari_adult)+
    COALESCE(plan_chsafari_child)+
    COALESCE(plan_sfsafari_ad)+
    COALESCE(plan_sfsafari_ch)+
    COALESCE(plan_free)) AS plan_total_kkoz,
 
 SUM(COALESCE(plan_adult,0)+
    COALESCE(plan_child,0)+
    COALESCE(plan_ch_pj,0)+
    COALESCE(plan_sp_ch,0)+
    COALESCE(plan_f_ch,0)+
    COALESCE(plan_f_ad,0)+
    COALESCE(plan_chsafari_adult)+
    COALESCE(plan_chsafari_child)+
    COALESCE(plan_sfsafari_ad)+
    COALESCE(plan_sfsafari_ch)+
    COALESCE(plan_free)) AS plan_total",
    "plan,zoo","plan.plan_zoo_zoo_id = zoo.zoo_id AND $quaplan plan_zoo_zoo_id = $zoo")->executeAssoc();
 
 $trs = $db->specifytable("SUM(touristreport_adult_ch) AS adult_ch,
    SUM(touristreport_adult_free) AS adult_free,
    SUM(touristreport_child_ch) AS child_ch,
    SUM(touristreport_child_free) AS child_free,
    SUM(touristreport_child_pj) AS child_pj,
    SUM(touristreport_special_ch) AS sp_ch,
    SUM(touristreport_special_free) AS sp_free,
    SUM(touristreport_foreigner_adult) AS foreigner_adult,
    SUM(touristreport_foreigner_child) AS foreigner_child,
    SUM(touristreport_project_ch) AS charge_project,
    SUM(touristreport_project_free) AS free_project,
    SUM(touristreport_safari_adult_ch) AS charge_safari_adult,
    SUM(touristreport_safari_adult_free) AS free_safari_adult,
    SUM(touristreport_safari_child_ch) AS charge_safari_child,
    SUM(touristreport_safari_child_free) AS free_safari_child,
    SUM(touristreport_safari_foreigner_adult) AS safari_foreigner_adult,
    SUM(touristreport_safari_foreigner_child) AS safari_foreigner_child,
    
    SUM(COALESCE(touristreport_adult_ch,0)+
    COALESCE(touristreport_child_ch,0)+
    COALESCE(touristreport_special_ch,0)+
    COALESCE(touristreport_project_ch,0)+
    COALESCE(touristreport_foreigner_adult,0)+
    COALESCE(touristreport_foreigner_child,0)+
    COALESCE(touristreport_safari_adult_ch)+
    COALESCE(touristreport_safari_child_ch)+
    COALESCE(touristreport_safari_foreigner_child)+
    COALESCE(touristreport_safari_foreigner_adult)) AS charge,
    
    SUM(COALESCE(touristreport_adult_free)+
    COALESCE(touristreport_child_free)+
    COALESCE(touristreport_child_pj)+
    COALESCE(touristreport_project_free)+
    COALESCE(touristreport_special_free)+
    COALESCE(touristreport_safari_adult_free)+
    COALESCE(touristreport_safari_child_free)) AS free, 
    
    SUM(COALESCE(touristreport_adult_ch,0)+
    COALESCE(touristreport_child_ch,0)+
    COALESCE(touristreport_special_ch,0)+
    COALESCE(touristreport_project_ch,0)+
    COALESCE(touristreport_foreigner_adult,0)+
    COALESCE(touristreport_foreigner_child,0)+
    COALESCE(touristreport_safari_adult_ch)+
    COALESCE(touristreport_safari_child_ch)+
    COALESCE(touristreport_safari_foreigner_child)+
    COALESCE(touristreport_safari_foreigner_adult)+
    COALESCE(touristreport_adult_free)+
    COALESCE(touristreport_child_free)+
    COALESCE(touristreport_child_pj)+ 
    COALESCE(touristreport_project_free)+
    COALESCE(touristreport_special_free)+
    COALESCE(touristreport_safari_adult_free)+
    COALESCE(touristreport_safari_child_free)) AS total",
    "touristreport,zoo","touristreport.touristreport_zoo_zoo_id = zoo.zoo_id AND $qua touristreport_zoo_zoo_id IN($zoo) GROUP BY touristreport_zoo_zoo_id ORDER BY zoo_no ASC")->executeAssoc();
	if(!empty($trs)){    
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
    $zrs = $db->findByPK('zoo','zoo_id',$zoo)->executeAssoc();
    $zoo_name = $zrs['zoo_name'];
        echo "<div class='col-md-12'><div class='col-md-12 trswh'><h3>รายละเอียดตารางเปรียบเทียบจำนวนผู้เข้าชมประจำเดือนของ$zoo_name ".$monthtxt." พ.ศ. ".$yearmonth." </h3>";
    }else if($search == 2){
	echo "<div class='col-md-12'><div class='col-md-12 trswh'><h3>รายละเอียดตารางเปรียบเทียบจำนวนผู้เข้าชมประจำไตรมาศของ$zoo_name".$textqua." พ.ศ. ".$yearqua."</h3>";
	}else if($search == 3){
	echo "<div class='col-md-12'><div class='col-md-12 trswh'><h3>รายละเอียดตารางเปรียบเทียบจำนวนผู้เข้าชมประจำปีของ$zoo_name ".$yearonly."</h3>";//แสดงวันที่
}
    $adult = $trs['adult_ch'];// ผู้ใหญ่
    $free = $trs['adult_free']+$trs['child_free']+$trs['sp_free']; //ฟรีรวมกัน
    $freekkoz = $trs['adult_free']+$trs['child_free']+$trs['sp_free']+$trs['free_safari_adult']+$trs['free_safari_child'];
    $sum = $trs['adult_ch']+$trs['child_ch']+$trs['child_pj']+$trs['sp_ch']+$trs['foreigner_adult']+$trs['foreigner_child']+$free;
    $sumkkoz = $trs['adult_ch']+$trs['child_ch']+$trs['child_pj']+$trs['sp_ch']+$trs['foreigner_adult']+$trs['foreigner_child']+$trs['charge_safari_adult']+$trs['safari_foreigner_adult']+$trs['safari_foreigner_adult']+$trs['safari_foreigner_adult']+$freekkoz;
                  echo "<table class='table table-striped'>";
                  echo "<tr class='info'><td><h4><b>รายการ</b></h4></td><td style='text-align:center;'><h4><b>แผน</b></h4></td><td style='text-align:center;'><h4><b>ผล</b></h4></td></tr>";
                  echo "<tr><td style='padding-left:30px;'>ผู้ใหญ่</td><td style='text-align:center;'>".number_format($trsplan['plan_adult'])."</td><td style='text-align:center;'>";
                  
                  if($trs['adult_ch'] >= $trsplan['plan_adult']){
                        echo "<font color='green'>".number_format($trs['adult_ch'])."</font>";
                    }else if($trs['adult_ch'] < $trsplan['plan_adult']){
                        echo "<font color='red'>".number_format($trs['adult_ch'])."</font>";   
                    }
                  
                  echo "</td></tr>";
                  echo "<tr><td style='padding-left:30px;'>เด็ก</td><td style='text-align:center;'>".number_format($trsplan['plan_child'])."</td><td style='text-align:center;'>";
                                    
                  if($trs['child_ch'] >= $trsplan['plan_child']){
                        echo "<font color='green'>".number_format($trs['child_ch'])."</font>";
                    }else if($trs['adult_ch'] < $trsplan['plan_adult']){
                        echo "<font color='red'>".number_format($trs['child_ch'])."</font>";   
                    }
                  
                  echo "</td></tr>";
                  echo "<tr><td style='padding-left:30px;'>นักเรียนในโครงการ (ฟรี)</td><td style='text-align:center;'>".number_format($trsplan['plan_ch_pj'])."</td><td style='text-align:center;'>";

                  if($trs['child_pj'] >= $trsplan['plan_ch_pj']){
                        echo "<font color='green'>".number_format($trs['child_pj'])."</font>";
                    }else if($trs['child_pj'] < $trsplan['plan_adult']){
                        echo "<font color='red'>".number_format($trs['child_pj'])."</font>";   
                    }
                    
                  echo "</td></tr>";
                  echo "<tr><td style='padding-left:30px;'>นักเรียน/ครู/ทหาร/ตำรวจ</td><td style='text-align:center;'>".number_format($trsplan['plan_sp_ch'])."</td><td style='text-align:center;'>";
                  
                  if($trs['child_pj'] >= $trsplan['plan_sp_ch']){
                        echo "<font color='green'>".number_format($trs['sp_ch'])."</font>";
                    }else if($trs['child_pj'] < $trsplan['plan_sp_ch']){
                        echo "<font color='red'>".number_format($trs['sp_ch'])."</font>";   
                    }
                  
                  echo "</td></tr>";
                  echo "<tr><td style='padding-left:30px;'>ผู้ใหญ่ (ชาวต่างชาติ)</td><td style='text-align:center;'>".number_format($trsplan['plan_f_ad'])."</td><td style='text-align:center;'>";
                  if($trs['foreigner_adult'] >= $trsplan['plan_f_ad']){
                        echo "<font color='green'>".number_format($trs['foreigner_adult'])."</font>";
                    }else if($trs['foreigner_adult'] < $trsplan['plan_f_ad']){
                        echo "<font color='red'>".number_format($trs['foreigner_adult'])."</font>";   
                    }
                    
                  echo "</td></tr>";
                  echo "<tr><td style='padding-left:30px;'>เด็ก (ชาวต่างชาติ)</td><td style='text-align:center;'>".number_format($trsplan['plan_f_ch'])."</td><td style='text-align:center;'>";
                  
                  if($trs['foreigner_child'] >= $trsplan['plan_f_ad']){
                        echo "<font color='green'>".number_format($trs['foreigner_child'])."</font>";
                    }else if($trs['foreigner_child'] < $trsplan['plan_f_ch']){
                        echo "<font color='red'>".number_format($trs['foreigner_child'])."</font>";   
                    }
                    
                  echo "</td></tr>";
                  if($zoo == 12){
                      echo "<tr><td style='padding-left:30px;'>ผู้ใหญ่ (ไนท์ซาฟารี)</td><td style='text-align:center;'>".number_format($trsplan['plan_chsafari_adult'])."</td><td style='text-align:center;'>";
                     
                      if($trs['charge_safari_adult'] >= $trsplan['plan_chsafari_adult']){
                            echo "<font color='green'>".number_format($trs['charge_safari_adult'])."</font>";
                        }else if($trs['charge_safari_adult'] < $trsplan['plan_chsafari_adult']){
                            echo "<font color='red'>".number_format($trs['charge_safari_adult'])."</font>";   
                        }
                        
                      echo "</td></tr>";
                      echo "<tr><td style='padding-left:30px;'>เด็ก (ไนท์ซาฟารี)</td><td style='text-align:center;'>".number_format($trsplan['plan_chsafari_child'])."</td><td style='text-align:center;'>";
                      
                      if($trs['charge_safari_child'] >= $trsplan['plan_chsafari_child']){
                            echo "<font color='green'>".number_format($trs['charge_safari_child'])."</font>";
                        }else if($trs['charge_safari_child'] < $trsplan['plan_chsafari_child']){
                            echo "<font color='red'>".number_format($trs['charge_safari_child'])."</font>";   
                        }
                        
                      echo "</td></tr>";
                      echo "<tr><td style='padding-left:30px;'>ผู้ใหญ่-ชาวต่างชาติ (ไนท์ซาฟารี)</td><td style='text-align:center;'>".number_format($trsplan['plan_sfsafari_ad'])."</td><td style='text-align:center;'>";
                      
                      if($trs['safari_foreigner_adult'] >= $trsplan['plan_sfsafari_ad']){
                            echo "<font color='green'>".number_format($trs['safari_foreigner_adult'])."</font>";
                        }else if($trs['safari_foreigner_adult'] < $trsplan['plan_sfsafari_ad']){
                            echo "<font color='red'>".number_format($trs['safari_foreigner_adult'])."</font>";   
                        }
                        
                      echo "</td></tr>";
                      echo "<tr><td style='padding-left:30px;'>เด็ก-ชาวต่างชาติ (ไนท์ซาฟารี)</td><td style='text-align:center;'>".number_format($trsplan['plan_sfsafari_ch'])."</td><td style='text-align:center;'>";
                      
                      if($trs['safari_foreigner_child'] >= $trsplan['plan_sfsafari_ch']){
                            echo "<font color='green'>".number_format($trs['safari_foreigner_child'])."</font>";
                        }else if($trs['safari_foreigner_child'] < $trsplan['plan_sfsafari_ch']){
                            echo "<font color='red'>".number_format($trs['safari_foreigner_child'])."</font>";   
                        }
                      
                      echo "</td></tr>";
                      echo "<tr><td style='padding-left:30px;'>ยกเว้น</td><td style='text-align:center;'>".number_format($trsplan['plan_free'])."</td><td style='text-align:center;'>";
                      if($freekkoz >= $trsplan['plan_free']){
                            echo "<font color='green'>".number_format($freekkoz)."</font>";
                        }else if($freekkoz < $trsplan['plan_free']){
                            echo "<font color='red'>".number_format($freekkoz)."</font>";   
                        }
                        
                      echo "</td></tr>";
                      echo "<tr><td style='padding-left:30px;'><h4><b>รวม</b></h4></td><td style='padding-top:15px;text-align:center;'>".number_format($trsplan['total'])."</td><td style='padding-top:15px;text-align:center;'>";

                      if($sumkkoz >= $trsplan['total']){
                            echo "<font color='green'>".number_format($sumkkoz)."</font>";
                        }else if($sumkkoz < $trsplan['total']){
                            echo "<font color='red'>".number_format($sumkkoz)."</font>";   
                        }
                        
                      echo "</td></tr>";
                      echo "<tr><td style='padding-left:30px;'><h4><b>เทียบกับแผน +/- -ร้อยละ</b></h4></td><td>0</td></tr>";
                  }else{
                  echo "<tr><td style='padding-left:30px;'>ยกเว้น</td><td style='text-align:center;'>".number_format($trsplan['plan_free'])."</td><td style='text-align:center;'>";
                  if($free <= $trsplan['plan_free']){
                        echo "<font color='green'>".number_format($free)."</font>";
                    }else if($free > $trsplan['plan_free']){
                        echo "<font color='red'>".number_format($free)."</font>";   
                    }
                    
                  echo "</td></tr>";
                  echo "<tr><td style='padding-left:30px;'><h4><b>รวม</b></h4></td><td style='padding-top:15px;text-align:center;'>".number_format($trsplan['plan_total'])."</td><td style='padding-top:15px;text-align:center;'>";
                   if($sum >= $trsplan['plan_total']){
                        echo "<font color='green'>".number_format($sum)."</font>";
                    }else if($sum < $trsplan['plan_total']){
                        echo "<font color='red'>".number_format($sum)."</font>";   
                    }
                    
                  $total = ($sum-$trsplan['plan_total'])/$trsplan['plan_total']*100;
                  
                   echo "</td></tr>";
                   
                   echo "<tr><td style='padding-left:30px;'><h4><b>เทียบกับแผน +/- -ร้อยละ</b></h4></td><td colspan='2' style='padding-top:15px;text-align:center;'>".number_format($total)."%</td></tr></table>";
                  }
                  
                  }else{
                      echo "<div class='col-md-12'><div class='col-md-12 trswh'><h3>ไม่พบข้อมูล</h3>";
                  }
                  
?>				  

				</div>
                </div>
				<div class='col-md-12 totalrow5'>
				<div class='col-md-6 totalleft'>
				</div>
				</div>
<script>text
   $.fn.datepicker.dates['th'] = {
                                days: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์", "อาทิตย์"],
                                daysShort: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                                daysMin: ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                                months: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                                monthsShort: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                                today: "วันนี้"
};
   $(".date-picker").datepicker({
    format:'yyyy-mm-dd',
    autoclose:true
   });
</script>