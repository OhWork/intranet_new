<?php

	$form = new form();
	$story = new textfield('eventconfer_story','story','form-control','','');
	$name = new textfield('eventconfer_namers','','form-control','','');
	$tel = new textfield('eventconfer_tel','tel','form-control','','');
    $tel->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
	$uname = new textfield('eventconfer_uname','','form-control','','');
	$uclass = new textfield('eventconfer_uclass','','form-control','','');
	$join = new textfield('eventconfer_join','max','form-control','','');
	$join->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
	$patanname = new textfield('eventconfer_psname','','form-control','','');
	$patanclass = new textfield('eventconfer_psclass','','form-control','','');
	$newmisc = new textfielddisabled('eventconfer_coffeegroup_amount','newmisc','form-control col-md-12 adddaytextpad','','disabled');
	$newmisc->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
	$newmisc2 = new textfielddisabled('eventconfer_dishgroup_amount','newmisc2','form-control col-md-12 adddaytextpad','','disabled');
	$newmisc2->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";
	$newmisc3 = new textfielddisabled('eventconfer_lbtri_amount','newmisc3','form-control col-md-12 adddaytextpad','','disabled');
	$newmisc3->functions ="onkeypress='CheckNum()' onClick='this.setSelectionRange(0, this.value.length)'";

	// 'name','class','id','value','checked'//

	$nolcd = new radio('eventconfer_lcd','form-check-input','cancle_lcd','0','checked','');
 	$oklcd = new radio('eventconfer_lcd','form-check-input','ok_lcd','1','','');
	$lbnolcd = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_lcd');
	$lboklcd = new labeladdday('form-check-label drinkcard-cc adaok','ok_lcd');

	$nonotebook = new radio('eventconfer_nb','form-check-input','cancle_note','0','checked','');
	$oknotebook = new radio('eventconfer_nb','form-check-input','ok_note','1','','');
	$lbnonotebook = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_note');
	$lboknotebook = new labeladdday('form-check-label drinkcard-cc adaok','ok_note');

	$nopointer = new radio('eventconfer_pointer','form-check-input','cancle_pointer','0','checked','');
	$okpointer = new radio('eventconfer_pointer','form-check-input','ok_pointer','1','','');
	$lbnopointer = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_pointer');
	$lbokpointer = new labeladdday('form-check-label drinkcard-cc adaok','ok_pointer');

	$nocooldrink = new radio('eventconfer_cooldrink','form-check-input','cancle_cooldrink','0','checked','');
	$okcooldrink = new radio('eventconfer_cooldrink','form-check-input','ok_cooldrink','1','','');
	$lbnocooldrink = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_cooldrink');
	$lbokcooldrink = new labeladdday('form-check-label drinkcard-cc adaok','ok_cooldrink');

	$nohotdrink = new radio('eventconfer_hotdrink','form-check-input','cancle_hotdrink','0','checked','');
	$okhotdrink = new radio('eventconfer_hotdrink','form-check-input','ok_hotdrink','1','','');
	$lbnohotdrink = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_hotdrink');
	$lbokhotdrink = new labeladdday('form-check-label drinkcard-cc adaok','ok_hotdrink');

	$nocoffeegroup = new radio('eventconfer_coffeegroup','form-check-input','cancle_coffeegroup','0','checked','');
	$okcoffeegroup = new radio('eventconfer_coffeegroup','form-check-input','ok_coffeegroup','1','','');
	$lbnocoffeegroup = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_coffeegroup');
	$lbokcoffeegroup = new labeladdday('form-check-label drinkcard-cc adaok','ok_coffeegroup');

	$nodishgroup = new radio('eventconfer_dishgroup','form-check-input','cancle_dishgroup','0','checked','');
	$okdishgroup = new radio('eventconfer_dishgroup','form-check-input','ok_dishgroup','1','','');
	$lbnodishgroup = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_dishgroup');
	$lbokdishgroup = new labeladdday('form-check-label drinkcard-cc adaok','ok_dishgroup');

	$notri = new radio('eventconfer_lbtri','form-check-input','cancle_lbtri','0','checked','');
	$oktri = new radio('eventconfer_lbtri','form-check-input','ok_lbtri','1','','');
	$lbnotri = new labeladdday('form-check-label drinkcard-cc adacancle','cancle_lbtri');
	$lboktri = new labeladdday('form-check-label drinkcard-cc adaok','ok_lbtri');

	$novdocon = new radio('vdocon','form-check-input vdocon','vdocon_can','0','checked','');
	$okvdocon = new radio('vdocon','form-check-input vdocon','vdocon_ok','1','','');
	$lbnovdocon = new labeladdday('form-check-label drinkcard-cc adacancle','vdocon_can');
	$lbokvdocon = new labeladdday('form-check-label drinkcard-cc adaok','vdocon_ok');


	$lbvdocon = new label('ระบบการประชุมทางไกล');
	$lbtri = new label('ป้ายสามเหลี่ยม (จำนวน)');
	$lbnum = new label('ชุด');
	$lbdish = new label('จาน/ถ้วย(อาหารกลางวัน/ช้อน)');
	$lbcoffee = new label('ชุดกาแฟ/แก้วน้ำ/ จำนวน');
	$lbdrinkhot = new label('กระติกน้ำร้อน');
	$lbdrinkcold = new label('กระติกน้ำแข็ง');
	$lbpointer = new label('Pointer');
	$lbnotebook = new label('NoteBook');
	$lblcd = new label('เครื่องฉายภาพ(LCD)');
	$lbvdocon = new label('ระบบการประชุมทางไกล');
	$lbstory = new label('เรื่อง');
	$lbstorytype = new label('ประเภทเรื่อง');
	$lbclass = new label('ตำแหน่ง');
	$lbname1 = new label('ชื่อผู้ขอใช้ห้องประชุม');
	$lbfay = new label('ฝ่าย');
	$lbdate = new label('วันเริ่มประชุม');
	$lbdate2 = new label('วันเลิกประชุม');
	$lbpatan = new label('ประธานที่ประชุม (โปรดระบุชื่อ - สกุล)');
	$lboffice = new label('สังกัด/ฝ่าย');
	$lbjoin = new label('ผู้เข้าร่วมประชุม (โปรดระบุจำนวน)');
    $lblocation = new label('สถานที่');
    $lbname = new label('ชื่อผู้จอง ');
    $lbtel = new label('เบอร์โทรศัพท์ ');
	$selectconfer = new selectFromDB();
	$selectconfer->name = 'confer_confer_id';
	$selectconfer->idtf = 'confer_idtf';
	$selectconfer->lists = 'โปรดระบุห้องประชุม';
    $selectheadncf = new selectFromDB();
    $selectheadncf->name = 'headncf_headncf_id';
	$selectheadncf->idtf = 'headncf_id';
    //$selectheadncf->lists = 'โปรดระบุหัวข้อห้องประชุม';
 	$selectdivision = new selectMenu();
 	$selectdivision->name = 'eventconfer_division';
    $selectdivision->addItem('-----โปรดระบุสำนัก หรือ ฝ่าย-----','');
    $selectdivision->addItem('สำนักบริหารกลาง','สำนักบริหารกลาง');
    $selectdivision->addItem('สำนักพัฒนาธุรกิจ','สำนักพัฒนาธุรกิจ');
    $selectdivision->addItem('สำนักกฏหมาย','สำนักกฏหมาย');
    $selectdivision->addItem('สำนักการเงินและทรัพย์สิน','สำนักการเงินและทรัพย์สิน');
    $selectdivision->addItem('สำนักยุทธศาสตร์และแผน','สำนักยุทธศาสตร์และแผน');
    $selectdivision->addItem('สำนักอนุรักษ์และวิจัย','สำนักอนุรักษ์และวิจัย');
    $selectdivision->addItem('กองทรัพยากรบุคคล','กองทรัพยากรบุคคล');
    $selectdivision->addItem('สำนักเทคโนโลยีสารสนเทศ','สำนักเทคโนโลยีสารสนเทศ');
    $selectdivision->addItem('ฝ่ายบริหารงานทั่วไป','ฝ่ายบริหารงานทั่วไป');
    $selectdivision->addItem('ฝ่ายพัฒนาธุรกิจและประชาสัมพันธ์','ฝ่ายพัฒนาธุรกิจและประชาสัมพันธ์');
    $selectdivision->addItem('ฝ่ายการศึกษา','ฝ่ายการศึกษา');
    $selectdivision->addItem('ฝ่ายบำรุงสัตว์','ฝ่ายบำรุงสัตว์');
    $selectdivision->addItem('ฝ่ายพัฒนาสวนสัตว์','ฝ่ายพัฒนาสวนสัตว์');
    $selectdivision->addItem('ฝ่ายอนุรักษ์วิจัยและสุขภาพสัตว์','ฝ่ายอนุรักษ์วิจัยและสุขภาพสัตว์');
	$button = new buttonok('บันทึก','btnSubmit','btn btn-success col-md-12','');
	if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK('conferroom','confer_id',$id)->executeRow();
	$conferroom = $r['confer_name'];
	}
	?>
	<script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
// 			frmMain.ddlAmphur.length = 0  (ไม่ใช้)

			//*** Insert null Default Value ***//
			var myOption = new Option('โปรดระบุ','');
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption;

			<?
			$intRows = 0;
			$rs = $db->findPK1ASC('subzoo','subzoo_enable',1,'subzoo_no')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["zoo_zoo_id"];?>;
				strValue = "<?=$objResult["subzoo_id"];?>";
				strItem = "<?=$objResult["subzoo_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])
					frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption
				}
			<?
			}
			?>
		}
		function setDefault()
		{
			<?php
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$r2 = $db->findByPK('user','user_id',$id)->executeRow();
				$strZoo = $r2['subzoo_zoo_zoo_id'];
				$strSubzoo = $r2['subzoo_subzoo_id'];
			?>

				<?php
				/*** Default Zoo  ***/
				if($strZoo != "")
				{
				?>
					var objZoo=document.frmMain.ddlZoo;
					for (x=0;x<objZoo.length;x++)
					{
						if (objZoo.options[x].value=="<?=$strZoo?>")
						{
							objZoo.options[x].selected = true;
							break;
						}
					}

					ListSubzoo(<?=$strZoo;?>)
				<?php
				}
				?>

				<?php
				/*** Default Subzoo  ***/
				if($strSubzoo != "")
				{
				?>
					var objSubZoo=document.frmMain.ddlSubzoo;
					for (x=0;x<objSubZoo.length;x++)
					{
						if (objSubZoo.options[x].value=="<?=$strSubzoo?>")
						{
							objSubZoo.options[x].selected = true;
							break;
						}
					}
				<?php
				}
				?>
}
	</script>
    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
        <div class="row">
	        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<h1><?php echo $conferroom; ?></h1>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class="row">
					<div class='col-md-6'>
						<div class='row'>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 picbackground' id="room1">
								<div id='myCarousel' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer1_1.JPG' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer1_2.JPG' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer1_3.JPG' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room2">
								<div id='myCarousel2' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel2" data-slide-to="1"></li>
										<li data-target="#myCarousel2" data-slide-to="2"></li>
										<li data-target="#myCarousel2" data-slide-to="3"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer2_1.JPG' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer2_2.JPG' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer2_3.JPG' alt="Third slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer2_4.JPG' alt="Four slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room3">
								<div id='myCarousel3' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel3" data-slide-to="1"></li>
										<li data-target="#myCarousel3" data-slide-to="2"></li>
										<li data-target="#myCarousel3" data-slide-to="3"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer3_1.JPG' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer3_2.JPG' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer3_3.JPG' alt="Third slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/zpo/confer3_4.JPG' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room4">
								<div id='myCarousel4' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel4" data-slide-to="1"></li>
										<li data-target="#myCarousel4" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/no_pic.png' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room5">
								<div id='myCarousel5' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel5" data-slide-to="1"></li>
										<li data-target="#myCarousel5" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/no_pic.png' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room6">
								<div id='myCarousel6' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel6" data-slide-to="1"></li>
										<li data-target="#myCarousel6" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/no_pic.png' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room7">
								<div id='myCarousel7' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel7" data-slide-to="1"></li>
										<li data-target="#myCarousel7" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/no_pic.png' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room8">
								<div id='myCarousel8' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel8" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel8" data-slide-to="1"></li>
										<li data-target="#myCarousel8" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_1_1.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_1_2.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_1_3.jpg' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room9">
								<div id='myCarousel9' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel9" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel9" data-slide-to="1"></li>
										<li data-target="#myCarousel9" data-slide-to="2"></li>
										<li data-target="#myCarousel9" data-slide-to="3"></li>
										<li data-target="#myCarousel9" data-slide-to="4"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_2_1.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_2_2.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_2_3.jpg' alt="Third slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_2_4.jpg' alt="Third slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/korach/korach_confer_2_5.jpg' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room10">
								<div id='myCarousel10' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel10" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel10" data-slide-to="1"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/khonkean/khonkean_confer_1_1.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/khonkean/khonkean_confer_1_2.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room11">
								<div id='myCarousel11' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel11" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel11" data-slide-to="1"></li>
										<li data-target="#myCarousel11" data-slide-to="2"></li>
										<li data-target="#myCarousel11" data-slide-to="3"></li>
										<li data-target="#myCarousel11" data-slide-to="4"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/changmai/conferren_changmai_1_1.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/changmai/conferren_changmai_1_2.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/changmai/conferren_changmai_1_3.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/changmai/conferren_changmai_1_4.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/changmai/conferren_changmai_1_5.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room12">
								<div id='myCarousel12' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel12" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel12" data-slide-to="1"></li>
										<li data-target="#myCarousel12" data-slide-to="2"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/no_pic.png' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/no_pic.png' alt="Third slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room13">
								<div id='myCarousel13' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel13" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel13" data-slide-to="1"></li>
										<li data-target="#myCarousel13" data-slide-to="2"></li>
										<li data-target="#myCarousel13" data-slide-to="3"></li>
										<li data-target="#myCarousel13" data-slide-to="4"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/songkhla/songkhla1_1.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/songkhla/songkhla1_2.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/songkhla/songkhla1_3.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/songkhla/songkhla1_4.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/songkhla/songkhla1_5.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room15">
								<div id='myCarousel15' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel15" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel15" data-slide-to="1"></li>
										<li data-target="#myCarousel15" data-slide-to="2"></li>
										<li data-target="#myCarousel15" data-slide-to="3"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_1_1.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_1_2.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_1_3.jpg' alt="First slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_1_4.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room16">
								<div id='myCarousel16' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel16" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel16" data-slide-to="1"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/ubon/ubon_confer_1_1.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/ubon/ubon_confer_1_2.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room17">
								<div id='myCarousel17' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel17" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel17" data-slide-to="1"></li>
										<li data-target="#myCarousel17" data-slide-to="2"></li>
										<li data-target="#myCarousel17" data-slide-to="3"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/surin/surin_confer_1_1.jpg' alt="First slide">																		</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/surin/surin_confer_1_2.jpg' alt="Second slide">
										</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/surin/surin_confer_1_3.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/surin/surin_confer_1_4.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room18">
								<div id='myCarousel18' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel18" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel18" data-slide-to="1"></li>
									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/ubon/ubon_confer_2_1.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/ubon/ubon_confer_2_2.jpg' alt="Second slide">
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-12 picbackground' id="room19">
								<div id='myCarousel19' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
										<li data-target="#myCarousel19" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel19" data-slide-to="1"></li>
										<li data-target="#myCarousel19" data-slide-to="2"></li>
										<li data-target="#myCarousel19" data-slide-to="3"></li>
										<li data-target="#myCarousel19" data-slide-to="4"></li>
										<li data-target="#myCarousel19" data-slide-to="5"></li>
										<li data-target="#myCarousel19" data-slide-to="6"></li>
									</ol>
								<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_1.jpg' alt="First slide">																		</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_2.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_3.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_4.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_5.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_6.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_3_7.jpg' alt="First slide">																			</div>
									</div>
								</div>

							</div>
							<div class='col-md-12 picbackground' id="room20">
								<div id='myCarousel20' class='carousel slide' data-ride='carousel'>
									<ol class="carousel-indicators">
									<li data-target="#myCarousel20" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel20" data-slide-to="1"></li>
										<li data-target="#myCarousel20" data-slide-to="2"></li>
										<li data-target="#myCarousel20" data-slide-to="3"></li>

									</ol>
									<div class='carousel-inner slidewarpper' role='listbox'>
										<div class='carousel-item active'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_2_1.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_2_2.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_2_3.jpg' alt="First slide">																			</div>
										<div class='carousel-item'>
											<img class="d-block w-100" src='images/conferroom/kkoz/kkoz_confer_2_4.jpg' alt="First slide">																			</div>
									</div>
								</div>
							</div>
							<div class='col-md-12  mt-3'>
								<div class='row'>
									<div class='text-danger col-md-1'><label class="col-md-12 ml-1">1. </label></div>
									<div class='text-danger col-md-11'>
										ฝ่ายประชุมและพิธีการ จะอำนวยความสะดวกอุปกรณ์ตามรายละเอียดที่ต้องการ โดยหน่วยงานเจ้าของเรื่องเป็นผู้จัดเตรียม กาแฟ/ของว่าง/อาหารกลางวัน/นำ้ดื่ม/ป้ายชื่อ และพนักงานบริการ
									</div>
									<div class='text-danger col-md-1'><label class="col-md-12 ml-1">2. </label></div>
									<div class='text-danger col-md-11'>
										 หากต้องการคอมพิวเตอร์โน๊ตบุ๊ค ให้หน่วยงานเจ้าของเรื่องเป็นผู้จัดเตรียมมา
									</div>
									<div class='text-danger col-md-1'><label class="col-md-12 ml-1">3. </label></div>
									<div class='text-danger col-md-11'>
										 กรุณาประสานงานก่อนล่วงหน้าอย่างน้อย 3 วัน โดยส่งเรื่องถึงฝ่ายประชุมและพิธีการ สำนักบริหารกลาง และติดตามผลได้ที่ คุณรุ่งทิวา,คุณฐิติมา <u>โทรศัพท์ภายใน ต่อ 125 IP Phone 1015</u>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class='col-md-6'>
<?php echo $form->open('form_reg','frmMain','','cf_insert_day.php',''); ?>
						<div class='row'>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbname1; ?></div>
									<div class='col-md-8'><?php echo $uname; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbclass; ?></div>
									<div class='col-md-8'><?php echo $uclass; ?></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class="col-md-4" style="padding-right: 0;padding-left: 0;padding-top:7px;"><label>สำนัก/สวน</label></div>
									<div class='col-md-8 form-group has-feedback'>
                                    <select class='form-control css-require' id="ddlZoo" name="subzoo_zoo_zoo_id" onchange="ListSubzoo(this.value)">
                                        <option selected value="">-----โปรดระบุ-----</option>
                							<?php
                								$rs = $db->orderASC('zoo','zoo_id')->execute();
                								while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
                								{
                							?>
                								<option value="<?=$objResult["zoo_id"];?>"><?=$objResult["zoo_name"];?></option>
                							<?php
												}
                								?>
        							</select>
									</div>
								</div>
							</div>
            				<div class='col-md-12'>
            					<div class="row">
            						<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><label>ฝ่าย</label></div>
            						<div class='col-md-8 form-group has-feedback'>
            							<select class='form-control css-require' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
            						</div>
            					</div>
            				</div>

						   <div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbstorytype; ?></div>
									<div class='col-md-8'>
										<?php echo $selectheadncf->selectFromTBinDB('headncf','headncf_id','headncf_name','headncf_enable','1',''); ?>
									</div>
								</div>
							</div>
							<div class='col-md-12 story' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4'style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbstory; ?></div>
									<div class='col-md-8 showrequired'><?php echo $story; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4'style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbpatan; ?></div>
									<div class='col-md-8'><?php echo $patanname; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbclass; ?></div>
									<div class='col-md-8'><?php echo $patanclass; ?></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"<?php echo $lbdate; ?></div>
									<div class='date-form dayinbox col-md-8 form-horizontal control-group controls input-group'>
									<div class='input-group date' id ="datetimepicker1">
						                <input type='text' class="form-control datetimepicker " name="eventconfer_start" id='date1' readonly/>
						                <span class="input-group-addon">
										    <span class="glyphicon glyphicon-calendar"></span>
										</span>
						            </div>
									</div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbdate2 ?></div>
									<div class='date-form dayinbox col-md-8 form-horizontal control-group controls input-group'>
										<div class='input-group date' id ="datetimepicker2">
							                <input type='text' class="form-control datetimepicker" name="eventconfer_end" id='date2' readonly/>
							                <span class="input-group-addon datetimepicker-addon">
										    	<span class="glyphicon glyphicon-calendar"></span>
											</span>
							            </div>
									</div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"></div>
									<div class='col-md-8'><div id="msg" class="col-md-12 form-group" style="text-align:center;padding-top:10px;"></div></div>
								</div>
							</div>
							<div class='col-md-12' style="margin-bottom: 16px;">
								<div class='row'>
									<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbjoin; ?></div>
									<div class='col-md-2 showrequired'><?php echo $join; ?></div>
									<div class='col-md-2 text-danger mt-1'><b><u><?php echo $r['confer_people'].' คน'; ?></u></b></div>
								</div>
							</div>
							<div class="form-check col-md-12 mt-3">
								<div class="row">
									<div class='col-md-12'>
										<div class="row">
											<div class="cc-selector">
												<?php echo $nolcd;?>
												<?php echo $lbnolcd; ?>
												<?php echo $oklcd; ?>
												<?php echo $lboklcd; ?>
											</div>
											<div style="padding-top:4px;padding-left:8px;">
												<?php echo $lblcd;?>
											</div>
										</div>
									</div>
<!--
									<div class='col-md-12' style="margin-bottom: 5px;">
										<div class="row">
											<div class="cc-selector">
												<?php echo $nonotebook;?>
												<?php echo $lbnonotebook; ?>
												<?php echo $oknotebook; ?>
												<?php echo $lboknotebook; ?>
											</div>
											<?php echo $lbnotebook;?>
											</div>
									</div>
									<div class='col-md-12' style="margin-bottom: 5px;">
										<div class="row">
											<div class="cc-selector">
												<?php echo $nopointer;?>
												<?php echo $lbnopointer; ?>
												<?php echo $okpointer; ?>
												<?php echo $lbokpointer; ?>
											</div>
											<?php echo $lbpointer;?>
										</div>
									</div>
-->
									<div class='col-md-12' style="margin-bottom: 5px;">
										<div class="row">
											<div class="cc-selector">
												<?php echo $nocooldrink;?>
												<?php echo $lbnocooldrink; ?>
												<?php echo $okcooldrink; ?>
												<?php echo $lbokcooldrink; ?>
											</div>
											<div style="padding-top:4px;padding-left:8px;">
												<?php echo $lbdrinkcold;?>
											</div>
										</div>
									</div>
									<div class='col-md-12'>
										<div class="row">
											<div class="cc-selector">
												<?php echo $nohotdrink;?>
												<?php echo $lbnohotdrink; ?>
												<?php echo $okhotdrink; ?>
												<?php echo $lbokhotdrink; ?>
											</div>
											<div style="padding-top:4px;padding-left:8px;">
												<?php echo $lbdrinkhot;?>
											</div>
										</div>
									</div>
									<div class='col-md-12' style="margin-bottom: 5px;">
										<div class="row">
											<div class="cc-selector">
												<?php echo $nocoffeegroup;?>
												<?php echo $lbnocoffeegroup; ?>
												<?php echo $okcoffeegroup; ?>
												<?php echo $lbokcoffeegroup; ?>
											</div>
											<div style="width:500px;padding-top:4px;padding-left:8px;">
												<div class="col-md-12" style="padding-left:0px;">
													<div class="row">
														<div class="col-md-5">
															<?php echo $lbcoffee;?>
														</div>
														<div class="col-md-2" style="padding-left:0px;">
															<?php echo $newmisc;?>
														</div>
														<div class="col-md1" style="padding-left:0px;">
															<?php echo $lbnum;?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='col-md-12' style="margin-bottom: 5px;">
										<div class="row">
											<div class="cc-selector">
												<?php echo $nodishgroup;?>
												<?php echo $lbnodishgroup; ?>
												<?php echo $okdishgroup; ?>
												<?php echo $lbokdishgroup; ?>
											</div>
											<div style="width:500px;padding-top:4px;padding-left:8px;">
												<div class="col-md-12" style="padding-left:0px;">
													<div class="row">
														<div class="col-md-6">
															<?php echo $lbdish;?>
														</div>
														<div class="col-md-2" style="padding-left:0px;">
															<?php echo $newmisc2;?>
														</div>
														<div class="col-md1" style="padding-left:0px;">
															<?php echo $lbnum;?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='col-md-12' style="margin-bottom: 5px;">
										<div class="row">
											<div class="cc-selector">
												<?php echo $notri;?>
												<?php echo $lbnotri; ?>
												<?php echo $oktri; ?>
												<?php echo $lboktri; ?>
												</div>
											<div style="width:500px;padding-top:4px;padding-left:8px;">
												<div class="col-md-12" style="padding-left:0px;">
													<div class="row">
														<div class="col-md-5">
															<?php echo $lbtri;?>
														</div>
														<div class="col-md-2" style="padding-left:0px;">
															<?php echo $newmisc3;?>
														</div>
														<div class="col-md1" style="padding-left:0px;">
															<?php echo $lbnum;?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class='col-md-12 checkvdocon' style="margin-bottom: 16px;">
										<div class='row'>
										<div class="cc-selector">
												<?php echo $novdocon; ?>
												<?php echo $lbnovdocon; ?>
												<?php echo $okvdocon;   ?>
												<?php echo $lbokvdocon; ?>
											</div>
											<div style="padding-top:4px;padding-left:8px;">
												<? echo $lbvdocon; ?>
											</div>
											<div class='col-md-12 inzoo'>
												<div class='row'>
													<span class="col-md-2"></span>
													<span class='col-md-10 text-danger font-weight-bold mt-3'>**โปรดเลือกสวนที่เข้าร่วมประชุม**</span>
													<div class='col-md-6 mt-3'>
														<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='iszpo' name='eventconfer_status_iszpo' value='1'>
																<label for='iszpo'>สำนักตรวจสอบ</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='cazpo' name='eventconfer_status_cazpo' value='1'>
																<label for='cazpo'>สำนักบริหารกลาง</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='fpzpo' name='eventconfer_status_fpzpo' value='1'>
																<label for='fpzpo'>สำนักการเงินและทรัพย์สิน</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='spzpo' name='eventconfer_status_spzpo' value='1'>
																<label for='spzpo'>สำนักยุทธศาสตร์และแผน</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='lzpo' name='eventconfer_status_lzpo' value='1'>
																<label for='lzpo'>สำนักกฎหมาย</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='crzpo' name='eventconfer_status_crzpo' value='1'>
																<label for='crzpo'>สำนักอนุรักษ์ และ วิจัย</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='bdzpo' name='eventconfer_status_bdzpo' value='1'>
																<label for='bdzpo'>สำนักพัฒนาธุรกิจ</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='itzpo' name='eventconfer_status_itzpo' value='1'>
																<label for='itzpo'>สำนักเทคโนโลยีสารสนเทศ</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='hrzpo' name='eventconfer_status_hrzpo' value='1'>
																<label for='hrzpo'>สำนักบริหารทรัพยากรบุคคล</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='zmizpo' name='eventconfer_status_zmizpo' value='1'>
																<label for='zmizpo'>สถาบันบริหารจัดการสวนสัตว์</label>
															</div>

													</div>
													<div class='col-md-6 mt-3' id='zoo'>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='dusit' name='eventconfer_status_ds' value='1'>
																<label for='dusit'>สวนสัตว์ดุสิต</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='khaokeaw' name='eventconfer_status_kkoz' value='1'>
																<label for='khaokeaw'>สวนสัตว์เปิดเขาเขียว</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='changmai' name='eventconfer_status_cm' value='1'>
																<label for='changmai'>สวนสัตว์เชียงใหม่</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='korach' name='eventconfer_status_nm' value='1'>
																<label for='korach'>สวนสัตว์นครราชสีมา</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='songkhla' name ='eventconfer_status_sk' value='1'>
																<label for='songkhla'>สวนสัตว์สงขลา</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='ubon' name ='eventconfer_status_ub' value='1'>
																<label for='ubon'>สวนสัตว์อุบลราชธานี</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='khonkean' name ='eventconfer_status_kk' value='1'>
																<label for='khonkean'>สวนสัตว์ขอนแก่น</label>
															</div>
															<div class='col-md-12'>
																<input type='checkbox' class='form-check-input' id='sr' name ='eventconfer_status_sr' value='1'>
																<label for='sr'>โครงการคชอาณาจักร์</label>
															</div>
														</div>
													</div>
												</div>
											</label>
										</div>
									</div>
									<div class='col-md-12' style="margin-bottom: 16px;">
										<div class='row'>
											<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbname; ?></div>
											<div class='col-md-8'><?php echo $name; ?></div>
										</div>
									</div>
									<div class='col-md-12' style="margin-bottom: 16px;">
										<div class='row'>
											<div class='col-md-4' style="padding-right: 0;padding-left: 0;padding-top:7px;"><?php echo $lbtel; ?></div>
											<div class='col-md-8 showrequired'><?php echo $tel; ?></div>
										</div>
									</div>
									<input type='hidden' id='status_event' name='eventconfer_status' value='W'/>
									<input type='hidden' id='confer_id' name='confer_confer_id' value="<?php echo $id;?>">
									<input type='hidden' id='status_online' name='eventconfer_status_online' value="W">
									<div class='col-md-12'>
											<div class='row'>
												<div class='col-md-8'></div>
												<div class='col-md-2'>
													<?php echo $button; ?>
												</div>
												<div class='col-md-2'>
													<button type="button" class="btn btn-danger col-md-12" data-dismiss="modal">ยกเลิก</button>
												</div>
											</div>
									</div>
<?php 	echo $form->close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
	 $(function () {
        $('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD H:mm',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD H:mm',
            useCurrent: false,
            ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
            locale:moment.locale('th'),
            stepping: 30
        });
        $("#datetimepicker1").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        });
    });

   	function checkdate(){
		 $("#msg").html();
		 $('#msg').hide();
		$.ajax({
            url: "cf_checkday.php",
            data: {datestart : $('#date1').val() , dateend : $('#date2').val(), conferid : $('#confer_id').val()},
            type: "POST",
            success: function(data) {
	           	$('#msg').show();
                if(data > '0') {
                    $("#btnSubmit").attr("disabled", true);
                     $("#msg").html('<span class="text-danger">วันที่นี้ถูกจองแล้ว</span>');
					console.log('1234');

                } else {
	                $("#msg").html('<span class="text-success">วันที่นี้สามารถจองได้</span>');
                    $("#btnSubmit").attr("disabled", false);
                }

            }
        });

	}
// Function Check Vdoconferren
		function checkvdoconfer(){
		 $("#msg").html();
		 $('#msg').hide();
		$.ajax({
            url: "cf_checkconfer.php",
            data: {datestart : $('#date1').val() ,
	               dateend : $('#date2').val(),
	               conferid : $('#confer_id').val()
/*
	               iszpo : $('#iszpo:checked').val(),
	               cazpo: $('#cazpo:checked').val(),
	               fpzpo: $('#fpzpo:checked').val(),
	               spzpo: $('#spzpo:checked').val(),
	               lzpo: $('#lzpo:checked').val(),
	               crzpo: $('#crzpo:checked').val(),
	               bdzpo: $('#bdzpo:checked').val(),
	               itzpo: $('#itzpo:checked').val(),
	               hrzpo: $('#hrzpo:checked').val(),
	               zmizpo: $('#zmizpo:checked').val(),
	               dusit: $('#dusit:checked').val(),
	               khaokeaw: $('#khaokeaw:checked').val(),
	               changmai: $('#changmai:checked').val(),
	               korach: $('#korach:checked').val(),
	               songkhla: $('#songkhla:checked').val(),
	               ubon: $('#ubon:checked').val(),
	               khonkean: $('#khonkean:checked').val(),
	               sr: $('#sr:checked').val()
*/},
            type: "POST",
            success: function(data) {
                if(data > '0') {
	                $('#msg').show();
                    $("#btnSubmit").attr("disabled", true);

                } else {
	                $(".checkvdocon").show();
                    $("#btnSubmit").attr("disabled", false);
                }

            }
        });

	}
// End Check Vdoconferren

	$("#btnSubmit").attr("disabled", true);
	$("#datetimepicker2").on('dp.change',function(){
		checkdate();
	});
	$(document).ready(function() {
	 $('.inzoo').hide();
        $('input[name=vdocon]').on("change",function(){
	        var checkvdo = $('input[name=vdocon]:checked').val();
			console.log(checkvdo);
			if(checkvdo == 1){
				//$('.inzoo').animate({height: 'toggle'});
				$('.inzoo').slideDown(300);
        	}else{
	        	$('.inzoo').slideUp(300);
        	}
        });
		$('#headncf_id').select2({
		 	placeholder: "กรุณาเลือกหัวข้อการประชุม",
		 	allowClear: true
		});
$("#form_reg").validate({
		rules: {
			eventconfer_join: {
				required: true,
				number: true,
			},
			eventconfer_tel: {
				required: true,
				number: true,
			},
			eventconfer_story: {
				required: true,
			},


		},
		messages: {
			eventconfer_join:'*กรุณากรอกจำนวนผู้เข้าใช้เป็นตัวเลข*',
			eventconfer_tel:'*กรุณากรอกเบอร์โทรศํพท์ใช้เป็นตัวเลข*',
			number:'*กรุณากรอกจำนวนของใช้ที่ต้องการใช้เป็นตัวเลข*',
			eventconfer_story : '*กรุณากรอกเรื่องการประชุม*',
		},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".showrequired" ).addClass( "text-danger" ).removeClass( "text-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".showrequired" ).addClass( "text-success" ).removeClass( " text-danger" );
				}	});


    });
    var coffee = $('input[name=eventconfer_coffeegroup]');
    var dish = $('input[name=eventconfer_dishgroup]');
    var lbtri = $('input[name=eventconfer_lbtri]');
  		coffee.change(function(){
	  		var checkcoffe = $('input[name=eventconfer_coffeegroup]:checked').val();
	  		if(checkcoffe == 1 ){
           $("#newmisc").prop("disabled", !$(this).is(':checked'));
           }
           else{
	           $("#newmisc").attr("disabled", true);
           }
        });
        dish.change(function(){
	        var checkdish = $('input[name=eventconfer_dishgroup]:checked').val();
	        if(checkdish == 1){
           $("#newmisc2").prop("disabled", !$(this).is(':checked'));
           }
           else{
	             $("#newmisc2").attr("disabled", true);
           }
        });
		lbtri.change(function(){
			var checklbtri = $('input[name=eventconfer_lbtri]:checked').val();
			if(checklbtri == 1){
           $("#newmisc3").prop("disabled", !$(this).is(':checked'));
           }
           else{
	           $("#newmisc3").attr("disabled", true);
           }
        });
        var idconfer = $('#confer_id').val();
         console.log(idconfer);
		if(idconfer == 1){
			$('#room1').show();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
		}
		else if(idconfer == 2){
			$('#room2').show();
			$('#room1').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
		}
		else if(idconfer == 3){
			$('#room3').show();
			$('#room1').hide();
			$('#room2').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('.vdocon').hide();
		}
		else if(idconfer == 4){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room4').show();
		}
		else if(idconfer == 5){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room4').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room5').show();
		}
		else if(idconfer == 6){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room6').show();
		}
		else if(idconfer == 7){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room7').show();
		}
		else if(idconfer == 8){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room8').show();
		}
		else if(idconfer == 9){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('.vdocon').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room9').show();
		}
		else if(idconfer == 10){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room10').show();
		}
		else if(idconfer == 11){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room11').show();
		}
		else if(idconfer == 12){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room12').show();

		}
		else if(idconfer == 13){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room13').show();

		}
		else if(idconfer == 15){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room15').show();

		}
		else if(idconfer == 16){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room16').show();

		}
		else if(idconfer == 17){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room17').show();

		}
		else if(idconfer == 18){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room19').hide();
			$('#room20').hide();
			$('#room18').show();

		}
		else if(idconfer == 19){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room20').hide();
			$('#room19').show();

		}
		else if(idconfer == 20){
			$('#room1').hide();
			$('#room2').hide();
			$('#room3').hide();
			$('#room4').hide();
			$('#room5').hide();
			$('#room5').hide();
			$('#room6').hide();
			$('#room7').hide();
			$('#room8').hide();
			$('#room9').hide();
			$('#room10').hide();
			$('#room11').hide();
			$('#room12').hide();
			$('#room13').hide();
			$('#room15').hide();
			$('#room16').hide();
			$('#room17').hide();
			$('#room18').hide();
			$('#room19').hide();
			$('#room20').show();

		}

    //ตรวจค่าตัวเลข
    function CheckNum(){
		if (event.keyCode < 48 || event.keyCode > 57){
		      event.returnValue = false;
	    	}
	}
	$(function(){
    var max_length=2; // กำหนดจำนวนตัวอักษร
    $("#max").keyup(function(){ // เมื่อ textarea id เท่ากับ data  มี event keyup
            var this_length = max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
            if(this_length <= 0){
                $(this).val($(this).val().substr(0,2)); // แสดงตามจำนวนตัวอักษรที่กำหนด
            }
    });
});
$(function(){
    var max_length=2; // กำหนดจำนวนตัวอักษร
    $(".adddaytextpad").keyup(function(){ // เมื่อ textarea id เท่ากับ data  มี event keyup
            var this_length = max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
            if(this_length <= 0){
                $(this).val($(this).val().substr(0,2)); // แสดงตามจำนวนตัวอักษรที่กำหนด
            }
    });
});
$(function(){
    var max_length=10; // กำหนดจำนวนตัวอักษร
    $(".adddaytextpad").keyup(function(){ // เมื่อ textarea id เท่ากับ data  มี event keyup
            var this_length = max_length-$(this).val().length; // หาจำนวนตัวอักษรที่เหลือ
            if(this_length <= 0){
                $(this).val($(this).val().substr(0,10)); // แสดงตามจำนวนตัวอักษรที่กำหนด
            }
    });
});
$('.story').hide();
$('#headncf_id').on("change",function(e) {
	var check =  $("#headncf_id>option:selected").html();
	console.log(check);
	if(check.match("ประชุมภายใน") || check.match("ประชุมภายนอก")){
		$('.story').show("slow");
		}
	else {
		$('.story').hide("slow");
		$('#story').val("-");
		console.log($('.story').val());
	}
	});

// ohyea
</script>