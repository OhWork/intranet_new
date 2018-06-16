<script type='text/javascript'>
        $(document).ready(function(){
            $('#table').DataTable({
                "ordering": false,
                "lengthMenu": false,
                "searching": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
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
   if (!empty($_SESSION['user_name'])):
	include_once 'database/db_tools.php';
	include_once 'connect.php';
    date_default_timezone_set('Asia/Bangkok');
	$user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
		 $zoo = $_GET['zoo'];
    $form = new form();
    $lbyear = new label('ปี (พ.ศ.)');
    $lbmonth = new label('เดือน');
    $lbday = new label('วันที่');
    $lbday = new label('ปี');
    $txtday = new textfieldcalendarreadonly('date','date-picker-1','','date-picker form-control datetimepicker','input-group-addon','date-picker-1');
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
	$button = new buttonok('ค้นหา','','btn btn-primary stzbutton','submit');
     ?>
        <div class='row'>
            <div class='col-md-12 printdisplaynone'>
				<div class='col-md-12' style="margin-top: 10px;">
				    <h1>รายงานจำนวนผู้เข้าชม <?php echo @$zoo_name ?></h1>
				</div>
        <?php   echo $form->open('','','','',''); ?>
        <div class='col-md-12'>
            <div class='row'>
                <div class='col-md-12' style="margin-bottom: 10px;">
					<div class='row'>
						<div class='col-md-3'></div>
						<div class='btn-group col-md-6' data-toggle='buttons' style="margin-top: 20px;">
							<label class="btn btn-success active" style="width:50%">
								<input type="radio" name="search" value="1" onChange="swapConfig(this)" id="searchday" autocomplete="off" checked>วัน
							</label>
							<label class="btn btn-success" style="width:50%">
								<input type="radio" name="search" value="2" onChange="swapConfig(this)" id="searchmonth" autocomplete="off">เดือน
							</label>
						</div>
						<div class='col-md-3'></div>
					</div>
				</div>
                <div class='col-md-12'>
                    <div id="searchdaySettings">
                        <div class='col-md-4' style="float: left;">
                        </div>
             			<div class="date-form dayinbox col-md-4 form-horizontal control-group controls" style="float: left;">
                            <div class="input-group"><?php echo $txtday;?></div>
                        </div>
                         <div class='col-md-4'style="float: left;">
                         </div>
                    </div>
                    <div id="searchmonthSettings"  style="display:none;">
                        <div class='col-md-2' style="float: left;">
                        </div>
                        <div class='col-md-8' style="float: left;">
                            <div class='row'>
                                <div class='col-md-2' style="float: left;">
                                </div>
                                <div class='col-md-1' style="padding:  8 0 0 25;">
                                    <?php echo $lbmonth;?>
                                </div>
                                <div class='col-md-3'>
                                    <?php echo $selectmonth;?>
                                </div>
                                 <div class='col-md-1' style="padding:  8 0 0 15;">
                                    <?php echo $lbyear;?>
                                </div>
                                <div class='col-md-3'>
                                    <?php echo $txtyear;?>
                                </div>
                                <div class='col-md-2' style="float: left;">
                                </div>
                            </div>
                        </div>
                        <div class='col-md-2' style="float: left;">
                        </div>
                    </div>
                </div>
            </div>


        <div class='col-md-12'style="margin-top: 10px;"><center><?php echo $button ?></center>
			</div>
			</div>
			</div>
<?php	        echo $form->close();
	if (isset($_POST['submit'])) {
    //ปี
isset($_POST['date'])?$date  = $_POST['date']:$date='';
isset($_POST['month'])?$month  = $_POST['month']:$month='';
isset($_POST['year'])?$year  = $_POST['year']:$year='';
if($date){
    $qua = "touristreport_date BETWEEN '$date' AND  '$date'";
    }else if($month){
        if($year){
            $yearchange = $year-543;
            $qua = "touristreport_date BETWEEN '$yearchange-$month-01' AND  '$yearchange-$month-31'";
            echo "<div class='col-md-12 trswh'>";
        }else{
            $year = date("Y");
            $yearchange = $year-543;
            $qua = "touristreport_date BETWEEN '$yearchange-$month-01' AND  '$yearchange-$month-31'";
            echo "<div class='col-md-12 trswh'>";
        }

}else{
    $date = date("Y-m");
    $qua = "touristreport_date BETWEEN '$date-01' AND  '$date-31'";
    echo "<div class='col-md-12 trswh'>";
}
    $trs = $db->specifytable('*,
    COALESCE(touristreport_adult_ch,0)+
    COALESCE(touristreport_adult_pm,0)+
    COALESCE(touristreport_child_ch,0)+
    COALESCE(touristreport_child_pm,0)+
    COALESCE(touristreport_special_ch,0)+
    COALESCE(touristreport_foreigner_adult_ch,0)+
    COALESCE(touristreport_foreigner_adult_pm,0)+
    COALESCE(touristreport_foreigner_child_ch,0)+
    COALESCE(touristreport_foreigner_child_pm,0)+
    COALESCE(touristreport_safari_adult_ch)+
    COALESCE(touristreport_safari_child_ch) AS charge,

    COALESCE(touristreport_adult_free)+
    COALESCE(touristreport_child_free)+
    COALESCE(touristreport_child_pj)+
    COALESCE(touristreport_project_ch)+
    COALESCE(touristreport_special_free)+
    COALESCE(touristreport_foreigner_adult_free)+
    COALESCE(touristreport_foreigner_child_free) AS free,

    COALESCE(touristreport_adult_ch,0)+
    COALESCE(touristreport_adult_pm,0)+
    COALESCE(touristreport_adult_free,0)+
    COALESCE(touristreport_child_ch,0)+
    COALESCE(touristreport_child_pm,0)+
    COALESCE(touristreport_child_free,0)+
    COALESCE(touristreport_child_pj)+
    COALESCE(touristreport_special_ch)+
    COALESCE(touristreport_special_free)+
    COALESCE(touristreport_foreigner_adult_ch)+
    COALESCE(touristreport_foreigner_adult_pm)+
    COALESCE(touristreport_foreigner_adult_free)+
    COALESCE(touristreport_foreigner_child_ch)+
    COALESCE(touristreport_foreigner_child_pm)+
    COALESCE(touristreport_foreigner_child_free)+
    COALESCE(touristreport_project_ch)+
    COALESCE(touristreport_safari_adult_ch)+
    COALESCE(touristreport_safari_child_ch) AS total'
    ,'touristreport',"touristreport_zoo_zoo_id = $zoo AND $qua ORDER BY touristreport_date ASC")->execute();

            $columns = array(
                             'touristreport_date',
                             'touristreport_adult_ch',
                             'touristreport_adult_pm',
                             'touristreport_adult_free',
                             'touristreport_child_ch',
                             'touristreport_child_pm',
                             'touristreport_child_free',
                             'touristreport_child_pj',
                             'touristreport_project_ch',
                             'touristreport_special_ch',
                             'touristreport_special_free',
                             'touristreport_foreigner_adult_ch',
                             'touristreport_foreigner_adult_pm',
                             'touristreport_foreigner_adult_free',
                             'touristreport_foreigner_child_ch',
                             'touristreport_foreigner_child_pm',
                             'touristreport_foreigner_child_free',
                             'touristreport_safari_adult_ch',
                             'touristreport_safari_child_ch',
                             'charge',
                             'free',
                             'total'
                            );

			$grid = new gridView();
			$grid->pr = 'touristreport_id';
			$grid->header = array('<center>เสียค่าบัตร</center>',
			                      '<center>บัตรส่วนลดโปรโมชั่น</center>',
			                      '<center>ยกเว้น/หมู่คณะไม่เสียบัตร</center>',
			                      '<center>เสียค่าบัตร</center>',
			                      '<center>บัตรส่วนลดโปรโมชั่น</center>',
			                      '<center>ยกเว้น/หมู่คณะไม่เสียค่าบัตร</center>',
			                      '<center>ในโครงการไม่เสียค่าบัตร</center>',
			                      '<center>เสียค่าบัตร</center>',
			                      '<center>ยกเว้น/ไม่เสียค่าบัตร</center>',
			                      '<center>เสียค่าบัตร</center>',
			                      '<center>บัตรส่วนลด</center>',
			                      '<center>ไม่เสียค่าบัตร</center>',
			                      '<center>เสียค่าบัตร</center>',
			                      '<center>บัตรส่วนลด</center>',
			                      '<center>ไม่เสียค่าบัตร</center>',
			                      '<center>ผู้ใหญ่</center>',
			                      '<center>เด็ก</center>');
			$grid->width = array('4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%','4%');
			$grid->edit = 'admin_index.php?url=admin_trs_index.php&url2=trs_add_trs.php';
			$grid->name = 'table';
			$grid->edittxt = 'แก้ไข';
			$grid->special = 5;
			$grid->system = 'touristreport';
			$grid->renderFromDB($columns,$trs);
}
?>
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
<?php endif;?>
