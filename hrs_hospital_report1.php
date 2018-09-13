<?php 
    ob_start();
    include_once 'database/db_tools.php';
    include_once 'connect.php';
    include_once 'form/main_change.php';
    require_once 'vendor/autoload.php';
	error_reporting(0);

    $id = $_GET['id'];
    $rs = $rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_id',$id)->execute();
    $show = mysqli_fetch_assoc($rs);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
		<table style="margin-bottom:200px;">
    		<tr>
        		<td></td>
    		</tr>
		</table>
		<!--บรรทัดที่ 1-->
		<table style="margin-bottom:50px;">
    		<tr>
        		<td style="font-size:14px;">ที่ ทส.๑๑๐๑/</td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table style="margin-left:350px;margin-bottom:50px;">
    		<tr>
				<td style="font-size:14px;"><!-- ระบุวันที่ --></td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td style="font-size:14px;">เรื่อง รับรองการมีสิทธิได้รับสวัสดิการค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table style="margin-bottom:20px;">
    		<tr>
				<td style="font-size:14px;">เรียน ผู้อำนวยการ<?php echo $show['hrctf_hosname'];?></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วย 
					<?php echo $show['hrctf_familyname']?>
					<?php if($show['hrctf_familytype'] == 2){
    				    echo "คู่สมรส"; 
    				}else if($show['hrctf_familytype'] == 3){
        				echo "บิดา"; 
    				}else if($show['hrctf_familytype'] == 4){
        				echo "มารดา"; 
    				}else if($show['hrctf_familytype'] == 5){
        				echo "บุตร"; 
    				}
					?> ของ <?php echo $show['hrctf_name'];?> พนักงานองค์การสวนสัตว์ ตำแหน่ง <?php echo $show['hrctf_position'];?> สังกัด <?php echo $show['zoo_name'];?> 
				องค์การสวนสัตว์  ได้เข้ารับการรักษาพยาบาล ณ สถานพยาบาลแห่งนี้ ในวันที่ <?php echo DateThai($show['hrctf_datestarthos']);?> ประเภทคนไข้ใน
				</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table style="margin-bottom:30px;">
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;องค์การสวนสัตว์ เป็นหน่วยงานรัฐวิสาหกิจ สังกัดกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม ขอรับรองว่า
				<?php echo $show['hrctf_familyname'];?> มีสิทธิได้รับสวัสดิการค่ารักษาพยาบาลตามระเบียบขององค์การสวนสัตว์ โดยค่าห้องรวมค่า
				อาหารเบิกได้วันละไม่เกิน <?php echo $show['hrctf_moneyroom'];?> บาท จึงขอให้ <?php echo $show['hrctf_hosname'];?> เรียก เก็บเงินค่ารักษาพยาบาล ของ 
				<?php echo $show['hrctf_familyname'];?> ได้โดยตรงกับองค์การสวนสัตว์ ๗๑ ถนนพระราม ๕ เขตดุสิต กรุงเทพมหานคร ๑๐๓๐๐ จักขอบคุณยิ่ง</td>
			</tr>
		</table>
		<!--บรรทัดที่ 12-->
		<table style="margin-bottom:30px;">
    		<tr>
				<td style="font-size:14px;letter-spacing:nomal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จึงเรียนมาเพื่อโปรดพิจารณา</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table style="margin-left:350px;margin-bottom:100px;">
    		<tr>
				<td style="font-size:14px;">ของแสดงความนับถึอ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table style="margin-left:290px;">
    		<tr>
				<td style="font-size:14px;">(</td>
				<td style="font-size:14px;">.............................................................</td>
				<td style="font-size:14px;">)</td>
			</tr>
		</table>
		<!--<table style="margin-left:330px;margin-bottom:10px;">
    		<tr>
				<td style="font-size:14px;">(</td>
				<td style="font-size:14px;">นายเบญจพล นาคประเสริฐ</td>
				<td style="font-size:14px;">)</td>
			</tr>
		</table>
		<table style="margin-left:333px;">
    		<tr>
				<td style="font-size:14px;">ผู้อำนวยการองค์การสวนสัตว์</td>
			</tr>
		</table>-->
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
