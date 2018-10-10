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
    <body font="th-saraban">
		<!--บรรทัดที่ 1-->
		<table align="left">
    		<tr>
                <td><img style='width:90px;' src='images/Logo/ZPO.png'></td>
				<td style="font-size: 24px;padding-left:170px;"><b>บันทึกข้อความ</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table>
    		<tr>
				<td style="font-size:14px;"><b>หน่วยงาน</b></td>
				<td style="font-size:14px;">องค์การสวนสัตว์  สำนักบริหารทรัพยากรบุคคล ฝ่ายสวัสดิการและแรงงานสัมพันธ์</td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td style="font-size:14px;">ที่</td>
				<td style="font-size:14px;">ทส ๑๑๑๙ /</td>
				<td style="width:290px;"></td>
				<td style="font-size:14px;">วันที่</td>
				<td style="font-size:14px;"><!--ใส่โค๊ตตรงนี้--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table style="border-bottom: solid 1px #000000;margin-bottom:20px;">
    		<tr>
				<td style="font-size:14px;padding-right:360px;">เรื่อง หนังสือรับรองเงินเดือนพนักงานองค์การสวนสัตว์</td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table style="margin-bottom:20px;">
    		<tr>
				<td style="font-size:14px;"><b>เรียน ผู้อำนวยการองค์การสวนสัตว์</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ตามที่ 
				<?php echo $show['hrctf_name'];?> <?php echo $show['hrctf_position'];?>
				 สังกัด <?php echo $show['zoo_name'];?> ได้ยื่นความประสงค์ขอหนังสือรับรองเงินเดือนพนักงานองค์การสวนสัตว์จำนวน ๑ ฉบับ เพื่อประกอบการกู้เงินจากสถาบันการเงิน</td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table style="margin-bottom:30px">
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; สำนักบริหารทรัพยากรบุคคล ฝ่ายสวัสดิการและแรงงานสัมพันธ์ ได้ดำเนินการตรวจสอบและจัดทำหนังสือรับ
				รองเงินเดือนพนักงานองค์การสวนสัตว์ <?php echo $show['hrctf_name'];?> เพื่อพิจารณาลงนามด้วยแล้ว</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table  style="margin-bottom:100px">
    		<tr>
				<td style="font-size:14px;line-height:24px;letter-spacing:nomal;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; จึงเรียนมาเพื่อโปรดพิจารณา</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table style="margin-bottom:300px">
    		<tr>
				<td style="font-size:14px;padding-left:350px;">(</td>
				<td style="font-size:14px;">.............................................</td>
				<td style="font-size:14px;">)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td style="font-size:10px;padding-left:580px;">&nbsp;&nbsp;คณิศร / บุคลากร &nbsp;๔</td>
			</tr>
		</table>
		<table>
    		<tr>
				<td style="font-size:10px;padding-left:580px;">........... / รก.หนฝ.สร.</td>
			</tr>
		</table>
		<table>
    		<tr>
				<td style="font-size:10px;padding-left:580px;">........... / ผช.ผอ.สบท.</td>
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