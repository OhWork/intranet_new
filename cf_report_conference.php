<?php
	ob_start();
    include_once 'database/db_tools.php';
    include_once 'connect.php';
	require_once 'vendor/autoload.php';
	error_reporting(0);

	$id = $_GET['id'];

	$rs = $db->findByPK55('eventconfer','conferroom','subzoo','zoo','headncf','confer_confer_id','conferroom_id','subzoo_subzoo_id','subzoo_id','subzoo_zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','eventconfer_id',$id)->executeAssoc();
	$datestart = $rs['eventconfer_start'];
	$datestartshow = substr($datestart, 0,10);
	$timestart = $rs['eventconfer_start'];
	$timestartshow = substr($timestart, 11);
	$dateend = $rs['eventconfer_end'];
	$dateendshow = substr($dateend, 0,10);
	$timeend = $rs['eventconfer_end'];
	$timeendshow = substr($timeend, 11);
	$dateshow = substr($datestart,8,2);
	$montshow = substr($datestart,5,2);
	$yearshow = substr($datestart,0,4);
	  switch($montshow){
        case 01: $monthtxt = "มกราคม"; break;
        case 02: $monthtxt = "กุมภาพันธ์"; break;
        case 03: $monthtxt = "มีนาคม"; break;
        case 04: $monthtxt = "เมษายน"; break;
        case 05: $monthtxt = "พฤษภาคม"; break;
        case 06: $monthtxt = "มิถุนายน"; break;
        case 07: $monthtxt = "กรกฏาคม"; break;
        case '08': $monthtxt = "สิงหาคม"; break;
        case '09': $monthtxt = "กันยายน"; break;
        case 10: $monthtxt = "ตุลาคม"; break;
        case 11: $monthtxt = "พฤศจิกายน"; break;
        case 12: $monthtxt = "ธันวาคม"; break;
    }
    $dayOfWeek = date("l", strtotime($datestart));
    switch($dayOfWeek){
        case 'Monday': $daytxt = "จันทร์"; break;
        case 'Tuesday': $daytxt = "อังคาร"; break;
		case 'Wednesday': $daytxt = "พุธ"; break;
		case 'Thursday': $daytxt = "พฤหัส"; break;
		case 'Friday': $daytxt = "ศุกร์"; break;
		case 'Saturday': $daytxt = "เสาร์"; break;
		case 'Sunday': $daytxt = "อาทิตย์"; break;
	}
    ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>
    <body style="margin:0; margin-top:-20px;">
		<table style="">
			<!--บรรทัดที่ 1-->
				<tr>
					<td><img src='images/Logo/ZPO.png'/ style="width:75px; height: 75px;"></td>
					<td style="padding-top: 37px;">แบบฟอร์มการขอใช้ระบบประชุมทางไกลองค์การสวนสัตว์ (Video Conference)</td>
					<td>ที่............/................</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 2-->
				<tr>
					<td><b>เรื่อง ขอความร่วมมือจัดประชุม Video Conference</b></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 3-->
				<tr>
					<td><b>เรียน ผู้อำนวยการองค์การสวนสัตว์</b></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 4-->
				<tr>
					<td>สำนัก/สวนสัตว์</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:400px;padding-left:8px;"><?php echo $rs['zoo_name'];?></td>
					<td>ขอให้จัดประชุม Video Conference</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 5-->
				<tr>
					<td><b>หัวข้อการประชุม</b></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:270px;padding-left:8px;"><?php echo $rs['headncf_name']." ".$rs['eventconfer_story'];?></td>
					<td><b>วาระ</b></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:280px;padding-left:8px;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 5-->
				<tr>
					<td><b>ประธานที่ประชุม</b></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:150px;padding-left:8px;"><?php echo $rs['eventconfer_psname'];?></td>
					<td><b>ตำแหน่ง</b></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:155px;padding-left:8px;"><?php echo $rs['eventconfer_psclass'];?></td>
					<td><b>ห้องประชุม</b></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:160px;padding-left:8px;"><?php echo $rs['conferroom_name'];?></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 6-->
				<tr>
					<td>วัน</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:50px;"><center><?php echo $daytxt;?></center></td>
					<td>ที่</td>
					<td style="width:45px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><center><?php echo $dateshow;?></center></td>
					<td>เดือน</td>
					<td style="width:80px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><center><?php echo $monthtxt;?></center></td>
					<td>พ.ศ.</td>
					<td style="width:70px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><center><?php echo $yearshow;?></center></td>
					<td>เวลาเริ่ม</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:110px;"><center><?php echo $timestartshow; ?></center></td>
					<td>น. เวลาเลิก</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:110px;"><center><?php echo $timeendshow;?></center></td>
					<td>น.</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 7-->
				<tr>
					<td><b>ผู้เข้าร่วมประชุม</b> ประกอบด้วย</td>
				</tr>
		</table>
		<table  style="margin-left: 150px;">
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_iszpo'] == 1){
							echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "."สำนักตวจสอบ" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักตรวจสอบ";
							}
						?>
					</td>
					<td style="padding-left: 50px;">
						<?php
						//	if($rs['eventconfer_status_ds'] == 1){
						//		echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "."สวนสัตว์ดุสิต";
						//	}
						//else{
						//		echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สวนสัตว์ดุสิต";
						//	}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_cazpo']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สำนักบริหารกลาง" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักบริหารกลาง";
							}
						?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_kkoz']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สวนสัตว์เปิดเขาเขียว" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "."สวนสัตว์เปิดเขาเขียว";
							}
							?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_fpzpo']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สำนักการเงินและทรัพย์สิน" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักการเงินและทรัพย์สิน";
							}
							?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_cm']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สวนสัตว์เชียงใหม่" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สวนสัตว์เชียงใหม่";
							}
							?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_spzpo']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สำนักยุทธศาสตร์และแผน" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักยุทธศาสตร์และแผน";
							}
							?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_nm']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สวนสัตว์นครราชสีมา" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สวนสัตว์นครราชสีมา";
							}
							?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_lzpo']==1){
								echo "<img src='images/icons/checked.png' style='width:18px; height: 18px;'/>"." "." สำนักกฏหมาย" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักกฏหมาย";
							}
						?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_sk']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "." สวนสัตว์สงขลา" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สวนสัตว์สงขลา";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_crzpo']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "." สำนักอนุรักษ์ และ วิจัย" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักอนุรักษ์ และ วิจัย";
							}
						?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_ub']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  สวนสัตว์อุบลราชธานี" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สวนสัตว์อุบลราชธานี";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_bdzpo']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  สำนักพัฒนาธุรกิจ" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักพัฒนาธุรกิจ";
							}
						?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_kk']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  สวนสัตว์ขอนแก่น" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สวนสัตว์ขอนแก่น";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_itzpo']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  สำนักเทคโนโลยีสารสนเทศ" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักเทคโนโลยีสารสนเทศ";
							}
						?>
					</td>
					<td style="padding-left: 50px;">
						<?php
							if($rs['eventconfer_status_sr']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  โครงการคชอาณาจักร จ.สุรินทร์" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." โครงการคชอาณาจักร จ.สุรินทร์";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_hrzpo']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  สำนักบริหารทรัพยากรบุคคล" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สำนักบริหารทรัพยากรบุคคล";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_status_zmizpo']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  สถาบันบริหารจัดการสวนสัตว์" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." สถาบันบริหารจัดการสวนสัตว์";
							}
						?>
					</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 9-->
				<tr>
					<td><b>ผู้ประสานงาน</b></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:270px;padding-left:8px;"><?php echo $rs['eventconfer_namers'];?></td>
					<td>เบอร์โทร</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:270px;"><center><?php echo $rs['eventconfer_tel'];?></center></td>
				</tr>
		</table>
		<table style="margin-left:150px;">
			<!--บรรทัดที่ 9-->
				<tr>
					<td>จึงเรียนมาเพื่อโปรดพิจารณา</td>
				</tr>
		</table>
		<table style="margin-left:450px;">
			<!--บรรทัดที่ 9-->
				<tr>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:200px;height:23px;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="margin-left:430px;">
			<!--บรรทัดที่ 9-->
				<tr>
					<td>(</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:260px;height:23px;"><!--ใส่CODEตรงนี้--></td>
					<td>)</td>
				</tr>
		</table>
		<table style="margin-left:370px;">
			<!--บรรทัดที่ 9-->
				<tr>
					<td>ตำแหน่ง</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:260px;height:23px;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="margin-top:10px;border-left: solid 1px #000;border-top: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
			<!--บรรทัดที่ 10-->
				<tr>
					<td style="width:300px; height:21px;border-right: solid 1px #000;border-spacing: 0;"><b>(๑) ผู้อำนวยการสำนัก / ผู้อำนวยการสวนสัตว์</b></td>
					<td><b>(๒) ผู้อำนวยการองค์การสวนสัตว์/รองผู้อำนวยการองค์การสวนสัตว์</b></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="width:300px;padding-left: 10px; border-right: solid 1px #000;border-spacing: 0;"><b>(ผู้ขอใช้งานระบบ Video Conference)</b></td>
					<td style="padding-left: 100px;"><img src="images/icons/unchecked.png" / style="width:20px; height: 20px;"> อนุมัติ</td>
					<td style="padding-left: 50px;padding-right: 92.5px;"><img src="images/icons/unchecked.png" / style="width:20px; height: 20px;"> ไม่อนุมัติ</td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="height:10px;width:300px;border-bottom: 1.5px;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:10px;width:366.4px;border-bottom: 1.5px;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="padding-left: 9.7px;">ลงชื่อ</td>
					<td style="width:262px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left:50px;">ลงชื่อ</td>
					<td style="width:288px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: -1px;">
				<tr>
					<td style="padding-left: 9.5px;">ตำแหน่ง</td>
					<td style="width:248.5px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left:50px;">ตำแหน่ง</td>
					<td style="width:275px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="padding-left: 10px;">วันที่</td>
					<td style="width:30px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">เดือน</td>
					<td style="width:100px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">พ.ศ.</td>
					<td style="width:65px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left:50px;">วันที่</td>
					<td style="width:30px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">เดือน</td>
					<td style="width:100px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 9.9px;">พ.ศ.</td>
					<td style="width:91.5px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="width:300px;height:7px; border-right: solid 1px #000;"></td>
					<td style="width:366.5px;height:7px;"></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
			<!--บรรทัดที่ 14-->
				<tr>
					<td style="width:300px;border-right: solid 1px #000;"><b>(๓) เจ้าหน้าที่สำนักเทคโนโลยีสารสนเทศ</b></td>
					<td style="width:366.5px;"><b>(๔) ผู้อำนวยการสำนักเทคโนโลยีสารสนเทศ</b></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="border-right: solid 1px #000;padding-left: 9.8px;padding-right: 157px;"><img src="images/icons/unchecked.png" / style="width:20px; height: 20px;"> ดำเนินการได้ตามที่ขอ</td>
					<td style="padding-right: 365.3px;"></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="border-right: solid 1px #000;padding-left: 9.7px;padding-right: 56.5px;"><img src="images/icons/unchecked.png" / style="width:20px; height: 20px;"> ไม่สามารถดำเนินการได้ตามที่ขอ เนื่องจาก</td>
					<td style="padding-right: 365.3px;"></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="height:15px;width:300px;border-bottom: dotted 1.5px #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:15px;padding-right: 365.5px;"></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0">
				<tr>
					<td style="padding-left: 10px;">ลงชื่อ</td>
					<td style="width:261px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left:50px;">ลงชื่อ</td>
					<td style="width:289.5px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="padding-left: 9.8px;">ตำแหน่ง</td>
					<td style="width:246.2px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left:50px;">ตำแหน่ง</td>
					<td style="width:274.5px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="padding-left: 10px;">วันที่</td>
					<td style="width:30px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">เดือน</td>
					<td style="width:100px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">พ.ศ.</td>
					<td style="width:64.5px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;border-right: solid 1px #000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left:50px;">วันที่</td>
					<td style="width:30px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">เดือน</td>
					<td style="width:100px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="padding-left: 10px;">พ.ศ.</td>
					<td style="width:92px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-spacing: 0;">
				<tr>
					<td style="width:300px;height:7px; border-right: solid 1px #000;"></td>
					<td style="width:366.5px;height:7px;"></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 19-->
				<tr>
					<td style="padding-left: 8px;"><u><b>**หมายเหตุ**</b></u></td>
				</tr>
		</table>
		<table style="margin-top: -5px;">
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 20px;">๑. เพื่อความถูกต้อง ผู้ขอใช้ระบบประชุมทางไกล (Video Conference) ต้องแจ้งผู้ประสานหน่วยงานที่จะเข้าร่วมประชุมด้วยตัวท่านเอง</td>
				</tr>
		</table>
		<table style="margin-top: -5px;">
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 20px;">๒. สำนักเทคโนโลยีสารสนเทศจะจัดเตรียมอุปกรณ์พร้อมติดตั้งระบบและประสานเจ้าหน้าที่ในการติดตั้งระบบของหน่วยงานเกี่ยวข้อง</td>
				</tr>
		</table>
		<table style="margin-top: -5px;">
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 20px;">๓. กรุณาประสานงาน<u>ล่วงหน้าไม่น้อยกว่า ๓ วันทำการ</u> เพื่อให้ IT จะได้เตรียมความพร้อม เมื่อส่งเรืองแล้ว ติดตามผลได้ที่ เบอร์โทรศัพท์ ๐๒-๕๘๗๐๐๕๕ IP Phone: ๒๑๒ email:it@zoothailand.org</td>
				</tr>
		</table>
		<table style="margin-left:580px;">
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="border: solid 1px #000;padding-left: 5px;padding-right: 5px;">FM - IT - 06 /1</u></td>
				</tr>
		</table>
    </body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
try {
  $pdf = new \Mpdf\Mpdf([
    'tempDir' => __DIR__ . '/../tmp', // uses the current directory's parent "tmp" subfolder
    'setAutoTopMargin' => 'stretch',
    'setAutoBottomMargin' => 'stretch'
    ,'mode' => 'th']);
} catch (\Mpdf\MpdfException $e) {
    print "Creating an mPDF object failed with" . $e->getMessage();
}
//$pdf = new \Mpdf\Mpdf(['mode' => 'th']);
$stylesheet .= file_get_contents('CSS/pdf.css');
$pdf->WriteHTML($stylesheet,1);
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>
?>
