<?php
	ob_start();
    include_once 'database/db_tools.php';
    include_once 'connect.php';
	require_once 'vendor/autoload.php';
	error_reporting(0);

	$id = $_GET['id'];

	$rs = $db->findByPK44('eventconfer','subzoo','zoo','headncf','subzoo_subzoo_id','subzoo_id','subzoo_zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','eventconfer_id',$id)->executeAssoc();
	$datestart = $rs['eventconfer_start'];
	$datestartshow = substr($datestart, 0,10);
	$timestart = $rs['eventconfer_start'];
	$timestartshow = substr($timestart, 11);
	$dateend = $rs['eventconfer_end'];
	$dateendshow = substr($dateend, 0,10);
	$timeend = $rs['eventconfer_end'];
	$timeendshow = substr($timeend, 11);
	$nb = $rs['eventconfer_nb'];
	?>
<html>
	<head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	</head>
    <body style="margin-top:0;">
	    <table style="margin:auto;">
			<!--บรรทัดที่ 1-->
				<tr>
					<td><img src="images/Logo/ZPO.png" alt="ZPO" width="62" height="62" /></td>
				</tr>
		</table>
		<table style="margin:auto;">
			<!--บรรทัดที่ 1-->
				<tr>
					<td>องค์การสวนสัตว์ สำนักบริหารกลาง</td>
				</tr>
		</table>
		<table style="margin:auto;">
				<tr>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:600px;"></td>
				</tr>
		</table>
		<table style="margin:auto;">
			<!--บรรทัดที่ 2-->
				<tr>
					<td style="height:21px;">แบบฟอร์มการขอใช้ห้องประชุม สำนักงานองค์การสวนสัตว์</td>
				</tr>
		</table>
		<table style="margin-left:500px;">
			<!--บรรทัดที่ 3-->
				<tr>
					<td style="height:21px;">วันที่</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:150px;"><center><?php echo $rs['eventconfer_date']; ?></center></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 4-->
				<tr>
					<td style="height:21px;width:130px;">1. <u>ชื่อผู้ขอใช้ห้องประชุม</u></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:542px;padding-left:8px;"><?php echo $rs['eventconfer_uname'];?></td>
				</tr>
		</table>
		<table style="margin-left:20px;">
			<!--บรรทัดที่ 5-->
				<tr>
					<td style="height:25px;width:60px;"> ตำแหน่ง</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:295px;padding-left:8px;"><?php echo $rs['eventconfer_uclass'];?></td>
					<td style="height:25px;width:30px;">ฝ่าย</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:295px;padding-left:8px;"><?php echo $rs['subzoo_name'];?></td>
				</tr>
		</table>
		<table style="margin-left:20px;">
				<tr>
					<td style="height:25px;width:40px;"> สังกัด</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:630px;padding-left:8px;"><?php echo $rs['zoo_name'];?></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 6-->
				<tr>
					<td style="height:25px;width:100px;">2. <u>เรื่องที่ประชุม</u></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:570px;padding-left:8px;"><?php echo $rs['headncf_name']." ".$rs['eventconfer_story'];?></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 7-->
				<tr>
					<td style="height:25px;width:100px;">3. <u>วันที่ประชุม</u></td>
					<td>เริ่มวันที่</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:200px;"><center><?php echo $datestartshow;?></center></td>
					<td>เวลาเริ่ม</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:100px;"><center><?php echo $timestartshow;?></td></center><td>น.</td>
<!--
					<td>น. เวลาเลิก</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:100px;"><!--ใส่CODEตรงนี้</td>
					<td>น.</td> -->
				</tr>
				<tr>
					<td style="padding-left: 15px;height:25px;"></td>
					<td>ถึงวันที่</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:200px;"><center><?php echo $dateendshow;?></center></td>
<!--
					<td>เวลาเริ่ม</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:100px;"><!--ใส่CODEตรงนี้</td>-->

					<td>เวลาเลิก</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:100px;"><center><?php echo $timeendshow;?></center></td>
					<td>น.</td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 7-->
				<tr>
					<td style="height:25px;width:100px;">4. <u>ผู้เข้าร่วมประชุม</u></td>
					<td>จำนวนรวม</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:40px;"><center><?php echo $rs['eventconfer_join'];?></center></td>
					<td>คน</td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 7-->
				<tr>
					<td style="height:25px;width:110px;">5. <u>ประธานที่ประชุม</u></td>
					<td style="height:25px;width:80px;">- ชื่อ-นามสกุล</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:480px;padding-left:8px;"><?php echo $rs['eventconfer_psname'];?></td>
				</tr>
				<tr>
					<td></td>
					<td>- ตำแหน่ง</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:480px;padding-left:8px;"><?php echo $rs['eventconfer_psclass'];?></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 8 -->
				<tr>
					<td style="height:25px;width:110px;">6. <u>ต้องการอุปกรณ์</u></td>
				</tr>
		</table>
		<table style="margin-left:120px;">
				<tr>
					<td>
						<?php
							if($rs['eventconfer_lcd'] == 1){
								echo "<img src='images/icons/checked.png' style='width:20px; height: 20px;'>";
								echo " เครื่องฉายภาพ";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " เครื่องฉายภาพ";

							}
						?>
					</td>
				</tr>
<!--
				<tr>
					<td>
						<?php
							if($rs['eventconfer_nb'] == 1){
								echo "<img src='images/icons/checked.png' style='width:20px; height: 20px;'>";
								echo " โน๊ตบุ๊ค";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " โน๊ตบุ๊ค";

							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?
							if($rs['eventconfer_pointer'] == 1){
								echo "<img src='images/icons/checked.png' style='width:20px; height: 20px;'>";
								echo " Pointer";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " Pointer";

							}
						?>
					</td>
				</tr>
-->
				<tr>
					<td>
						<?php
							if($rs['eventconfer_cooldrink'] == 1){
								echo "<img src='images/icons/checked.png' alt='checked' width='20' height='20' />";
								echo " กระติกน้ำแข็ง";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " กระติกน้ำแข็ง";

							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_hotdrink'] == 1){
								echo "<img src='images/icons/checked.png' style='width:20px; height: 20px;'>";
								echo " กระติกน้ำร้อน";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " กระติกน้ำร้อน";

							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_coffeegroup'] == 1){
								echo "<img src='images/icons/checked.png' style='width:20px; height: 20px;'>";
								echo " ชุดกาแฟ/แก้วน้ำ ";
								echo $rs['eventconfer_coffeegroup_amount']." ชุด";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " ชุดกาแฟ/แก้วน้ำ";

							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_dishgroup'] == 1){
								echo "<img src='images/icons/checked.png' style='width:20px; height: 20px;'>";
								echo " จาน/ถ้วย ";
								echo $rs['eventconfer_dishgroup_amount']." ชุด";
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " จาน/ถ้วย";

							}
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php
							if($rs['eventconfer_lbtri'] == 1){
								echo "<img src='images/icons/checked.png'/ style='width:20px; height: 20px;'>";
								echo " ป้ายสามเหลี่ยม ";
								echo $rs['eventconfer_lbtri_amount']." ชุด";

							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:20px; height: 20px;'>";
								echo " ป้ายสามเหลี่ยม";

							}
						?>
					</td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 9-->
				<tr>
					<td style="height:25px;width:150px;">7. <u>ผู้ประสานงานการประชุม</u></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:300px;padding-left:8px;"><?php echo $rs['eventconfer_namers'];?></td>
					<td style="height:25px;width:65px;">โทร/แฟกซ์</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:150px;"><center><?php echo $rs['eventconfer_tel'];?></center></td>
				</tr>
		</table>
		<table style="margin-top:10px;border-left: solid 1px #000;border-top: solid 1px #000;border-right: solid 1px #000;">
			<!--บรรทัดที่ 10-->
				<tr>
					<td style="width:340px; height:25px;border-right: solid 1px #000;padding-left: 10px;">8. <b><u>ผู้ขอใช้ห้องประชุม / ผู้แทน</u></b></td>
					<td style="width:340px;padding-left: 10px;padding-right: 10px;">9. <b><u>ผู้บังคับบัญชา</u></b></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000; margin-top:-6px;">
				<tr>
					<td style="height:25px;width:50px;padding-left: 10.5px;">ลงชื่อ</td>
					<td style="width:240px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="width:57px;border-right: solid 1px #000;"></td>
					<td style="height:25px;width:50px;padding-left:10px;">ลงชื่อ</td>
					<td style="width:240px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:57.5px;"></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000; margin-top:-6px;">
				<tr>
					<td style="height:25px;width:70px;padding-left: 10.5px;">ตำแหน่ง</td>
					<td style="width:210px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:58.5px;border-right: solid 1px #000;"></td>
					<td style="height:25px;width:70px;padding-left:10px;">ตำแหน่ง</td>
					<td style="width:210px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:59px;"></td>
				</tr>
		</table>
		<table style="border-left: solid 1px #000;border-right: solid 1px #000; margin-top:-6px;">
				<tr>
					<td style="height:25px;width:39.6px;padding-left: 10px;">วันที่</td>
					<td style="width:238px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:60px;border-right: solid 1px #000;"></td>
					<td style="height:25px;width:40.5px;padding-left:10px;">วันที่</td>
					<td style="width:238px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:59.5px;"></td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;border-bottom: solid 1px #000; margin-top:-6px;">
				<tr style="margin-top:10px;">
						<td style="width:349.7px;height:7px; border-right: solid 1px #000;"></td>
					<td style="width:350px;height:7px;"></td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;">
			<!--บรรทัดที่ 14-->
				<tr>
					<td style="height:25px;width:350x;padding-left: 10px;">10. <u>ฝ่ายประชุมและพิธีการ สำนักบริหารกลาง</u></td>
					<td style="height:25px;width:240px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:90px;padding-left: 10px;padding-right: 20px;">ดำเนินการ</td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;">
			<!--บรรทัดที่ 15-->
				<tr>
					<td style="height:25px;width:679px;padding-left:10px;"><img src="images/icons/unchecked.png" / style="width:18px; height: 18px;"> ดำเนินการได้ตามคำขอ</td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;">
			<!--บรรทัดที่ 16-->
				<tr>
					<td style="height:25px;width:355px;padding-left:10px;"><img src="images/icons/unchecked.png" / style="width:18px; height: 18px;"> ไม่สามารถดำเนินการได้ตามที่ขอ(ห้องไม่ว่าง)</td>
					<td style="height:25px;width:40px;">ลงชื่อ</td>
					<td style="width:230px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"><!--ใส่CODEตรงนี้--></td>
					<td style="height:25px;width:70px;"></td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;">
			<!--บรรทัดที่ 17-->
				<tr>
					<td style="height:25px;width:147px;padding-left:10px;"><img src="images/icons/unchecked.png" / style="width:18px; height: 18px;"> อุปกรณ์ที่ไม่พร้อม คือ</td>
					<td style="width:185px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"></td>
					<td style="height:25px;width:80px;padding-left:23px;">ตำแหน่ง</td>
					<td style="width:210px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"></td>
					<td style="height:25px;width:70px;"></td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;">
			<!--บรรทัดที่ 18-->
				<tr>
					<td style="height:25px;width:327px;border-bottom: 1.5px;padding-left:10px;border-bottom-style: dotted;border-bottom-color: #000000;"></td>
					<td style="height:25px;width:60px;padding-left:20px;">วันที่</td>
					<td style="width:220px;border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;"></td>
					<td style="height:25px;width:70px;"></td>
				</tr>
		</table>
		<table style="border-right: solid 1px #000;border-left: solid 1px #000;border-bottom: solid 1px #000;">
				<tr>
					<td style="width:700px;height:5px;padding-left: 10px;"></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 19-->
				<tr>
					<td style="padding-left: 8px;"><u>หมายเหตุ</u></td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 20px;">1. ฝ่ายประชุมและพิธีการ จะอำนวยความสะดวกอุปกรณ์ตามรายละเอียดที่ต้องการ โดยหน่วยงานเจ้าของเรื่องเป็นผู้จัดเตรียม บริการ</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 37px;">กาแฟ/ของว่าง/อาหารกลางวัน/นำ้ดื่ม/ป้ายชื่อ และพนักงาน</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 20px;">2. หากต้องการคอมพิวเตอร์โน๊ตบุ๊ค ให้หน่วยงานเจ้าของเรื่องเป็นผู้จัดเตรียมมา</td>
				</tr>
		</table>
		<table>
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="padding-left: 20px;">3. กรุณาประสานงานก่อนล่วงหน้าอย่างน้อย 3 วัน โดยส่งเรื่องถึงฝ่ายประชุมและพิธีการ สำนักบริหารกลาง และติดตามผลได้ที่</td>
				</tr>
				<tr>
					<td style="padding-left: 31px;"> คุณรุ่งทิวา,คุณฐิติมา <u>โทรศัพท์ภายใน ต่อ 125 IP Phone 1015</u></td>
				</tr>
		</table>
		<table style="margin-left: 570px;">
			<!--บรรทัดที่ 20-->
				<tr>
					<td style="border: solid 1px #000;padding-left: 5px;padding-right: 5px;">FM-AD-04 / 01</u></td>
				</tr>
		</table>
    </body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$pdf = new \Mpdf\Mpdf(['mode' => 'th']);
$stylesheet .= file_get_contents('CSS/pdf.css');
$pdf->WriteHTML($stylesheet,1);
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>
