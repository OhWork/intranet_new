<?php
	ob_start();
    include_once 'database/db_tools.php';
    include_once 'connect.php';
	require_once 'vendor/autoload.php';
	error_reporting(0);
	?>
<html>
	<head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	</head>
    <body style="margin-top:0;">
		<table style="margin-left:500px;">
				<tr>
					<td style="font-size:12px;border:1px solid #000000;padding:5px;">ฝ่ายบริหารงานทั่วไป<br>โทร.074 598840</td>
				</tr>
		</table>
		<table>
				<tr>
					<td><img src="images/logo/ZPOT.png" alt="ZPO" width="62" height="62" /></td>
					<td style="font-size:16px;padding-left:210px;padding-top:40px;">สวนสัตว์สงขลา</td>
				</tr>
				<tr>
					<td></td>
					<td style="font-size:16px;padding-left:160px;">แบบฟอร์มการขอใช้ห้องประชุม</td>
				</tr>
		</table>
		<table style="margin-left:400px;margin-top:20px;">
				<tr>
					<td style="font-size:12px;">วันที่</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:250px;"><center><?php echo $rs['eventconfer_date']; ?></center></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
				<tr>
					<td style="font-size:12px;width:130px;">1. <u>ชื่อผู้ขอใช้ห้องประชุม</u></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:542px;padding-left:8px;"><?php echo $rs['eventconfer_uname'];?></td>
				</tr>
		</table>
		<table style="margin-left:20px;">
				<tr>
					<td style="font-size:12px;width:60px;"> ตำแหน่ง</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:295px;padding-left:8px;"><?php echo $rs['eventconfer_uclass'];?></td>
					<td style="font-size:12px;width:30px;">ฝ่าย</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:295px;padding-left:8px;"><?php echo $rs['subzoo_name'];?></td>
				</tr>
		</table>
		<table style="margin-left:20px;">
				<tr>
					<td style="font-size:12px;width:40px;"> สังกัด</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:630px;padding-left:8px;"><?php echo $rs['zoo_name'];?></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 6-->
				<tr>
					<td style="font-size:12px;width:100px;">2. <u>เรื่องที่ประชุม</u></td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:570px;padding-left:8px;"><?php echo $rs['headncf_name']." ".$rs['eventconfer_story'];?></td>
				</tr>
		</table>
		<table style="margin-left:7.5px;">
			<!--บรรทัดที่ 7-->
				<tr>
					<td style="font-size:12px;width:100px;">3. <u>วันที่ประชุม</u></td>
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
					<td style="font-size:12px;padding-left: 15px;"></td>
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
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:300px;padding-left:8px;"><?php echo $rs['eventconferroom_namers'];?></td>
					<td style="height:25px;width:65px;">โทร/แฟกซ์</td>
					<td style="border-bottom: 1.5px;border-bottom-style: dotted;border-bottom-color: #000000;width:150px;"><center><?php echo $rs['eventconfer_tel'];?></center></td>
				</tr>
		</table>
		<table style="margin-top:10px;border-left: solid 1px #000;border-top: solid 1px #000;border-right: solid 1px #000;">
			<!--บรรทัดที่ 10-->
				<tr>
					<td style="width:340px; height:25px;border-right: solid 1px #000;padding-left: 10px;"><b><u>ผู้ขอใช้ห้องประชุม / ผู้แทน</u></b></td>
					<td style="width:340px;padding-left: 10px;padding-right: 10px;"><b><u>ผู้บังคับบัญชา</u></b></td>
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
					<td style="height:25px;width:350x;padding-left: 10px;"><b><u>ฝ่ายประชุมและพิธีการ สำนักบริหารกลาง</u></b></td>
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
