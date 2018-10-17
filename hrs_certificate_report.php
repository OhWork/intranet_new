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
    $datestartwork = DateThai($show['hrctf_datestartwork']);
    $datenow = DateThai(date("d-m-Y"));
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body font="th-saraban">
		<!--บรรทัดที่ 1-->
		<table style="margin-bottom:20px;">
    		<tr>
                <td style="font-size:24px;padding-left:295px;"><img style='width:90px;' src='images/Logo/ZPO.png'></td>
			</tr>
			<tr>
				<td style="font-size:24px;padding-left:230px;"><b>คำขอหนังสือรับรอง</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td style="font-size:14px;"><b>เรียน ผู้อำนวยการองค์การสวนสัตว์</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๑. ข้าพเจ้า
				<?php echo $show['hrctf_name'];?> <?php echo thainumDigit($show['hrctf_position']);?>
				 สังกัด <?php echo $show['zoo_name'];?> ได้รับการบรรจุเป็นพนักงานเมื่อวันที่ <?php echo thainumDigit($datestartwork);?> อัตราเงินเดือนปัจจุบัน <?php echo thainumDigit($show['hrctf_salary']);?> บาท</td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table style="margin-bottom:30px;">
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ๒. วัตถุประสงค์เพื่อ<?php echo $show['typectf_name'];?>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table style="margin-bottom:30px;">
    		<tr>
				<td style="font-size:14px;line-height:24px;letter-spacing:nomal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวข้างต้นเป็นความจริงทุกประการ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table>
    		<tr>
				<td style="font-size:14px;padding-left:340px;">ลงชื่อ</td>
				<td style="font-size:14px;"><?php echo $show['hrctf_name'];?></td>
				<td style="font-size:14px;">ผู้ขอ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table>
			<tr>
				<td style="font-size:14px;padding-left:368px;">(</td>
				<td style="font-size:14px;"><?php echo $show['hrctf_name'];?></td>
				<td style="font-size:14px;">)</td>
			</tr>
		</table>
		<table>
    		<tr>
				<td style="font-size:14px;padding-left:340px;">วันที่ <?php echo thainumDigit($datenow); ?></td>
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