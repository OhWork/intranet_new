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
    $datestarthos = DateThai($show['hrctf_datestarthos']);
    $datenow = DateThai(date("d-m-Y"));
?>

<!-- เขียนต่อจากนี้ -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
		<!--บรรทัดที่ 1-->
		<table align="left">
    		<tr>
				<td style="font-size: 14px;padding-left:170px;">คำขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 2-->
<!--
		<table>
    		<tr>
				<td style="font-size:14px;padding-left:165px;">โปรดทำเครื่องหมาย</td>
				<td style="font-size:14px;"><img width="20" height="20" src="images/circle_t.png"/></td>
				<td style="font-size:14px;">ลงในช่อง</td>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;">พร้อมทั้งกรอกรายการ</td>
			</tr>
		</table>
-->
		<table style="margin-bottom:16px">
    		<tr>
				<td style="font-size:14px;padding-left:255px;">.............................................</td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table style="margin-bottom:16px">
    		<tr>
				<td style="font-size:14px;">1. เสนอ</td>
				<td style="font-size:14px;">ผู้อำนวยการองค์การสวนสัตว์</td>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ข้าพเจ้า <?php echo $show['hrctf_name'];?>
				ตำแหน่ง <?php echo $show['hrctf_position'];?> 
				สังกัด <?php echo $show['zoo_name'];?> มีความประสงค์จะขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือ ของ<?php if($show['hrctf_familytype'] == 1){ 
    				        echo "ข้าพเจ้า",$show['hrctf_name'];
    				    }else if($show['hrctf_familytype'] == 2){
        				    echo "คู่สมรส ชื่อ",$show['hrctf_name'];
    				    }else if($show['hrctf_familytype'] == 3){
        				    echo "บิดา ชื่อ",$show['hrctf_name'];
    				    }else if($show['hrctf_familytype'] == 4){
        				    echo "มารดา ชื่อ",$show['hrctf_name'];
    				    }else if($show['hrctf_familytype'] == 5){
        				    echo "บุตร ชื่อ",$show['hrctf_name'];
    				    }
    				?> ซึ่งได้รับการรักษาพยาบาลจากสถานพยาบาล<?php echo $show['hrctf_hosname']; ?> จังหวัด<?php echo $show['hrctf_hosprovince']; ?> ตั้งแต่วันที่ <?php echo thainumDigit($datestarthos); ?>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		
<!--
		<table>
    		<tr>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;width:320px;">ข้าพเจ้า <?php echo $show['hrctf_name'];?></td>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;">คู่สมรส ชื่อ </td>
			</tr>
		</table>
		<table>
    		<tr>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;width:320px;">บิดาชื่อ </td>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;">มารดา ชื่อ </td>
			</tr>
		</table>
		<table>
    		<tr>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;width:320px;">บุตร </td>
				<td style="font-size:14px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;">ยังไม่บรรลุนิติภาวะ<?php echo $show['hrctf_name'];?></td>
			</tr>
		</table>
		<table>
    		<tr>
				<td style="font-size:14px;padding-left:350px;"><img width="25" height="25" src="images/circle.png"/></td>
				<td style="font-size:14px;">เป็นบุตรไร้ความสามารถหรือเสมอไร้ความสามารถ</td>
			</tr>
		</table>
-->
		<table>
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				ข้าพเจ้าขอรับรองว่า ข้าพเจ้ามีสิทธิได้รับเงินช่วยเหลือเกี่ยวกับการรักษาพยาบาลตามระเบียบการช่วยเหลือพนักงานเกี่ยวกับการรักษาพยาบาลสำหรับบุคคลที่เข้ารับการรักษาพยาบาลดังกล่าวเต็มจำนวน
			</tr>
		</table>
		<table style="margin-bottom:64px">
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				ข้าพเจ้าขอสัญญาว่า หากองค์การสวนสัตว์จ่ายเงินค่าใช้จ่ายในการรักษาพยาบาลเป็นจำนวนมากกว่าสิทธิที่ข้าพเจ้าจะพึงได้รับ ข้าพเจ้าจะชดใช้เงินคืนภายใน ๑๐ วัน นับแต่วันที่ได้รับทราบ ถ้าหากข้าพเจ้าไม่ชดใช้เงินคืนภายในกำหนดดังกล่าว ข้าพเจ้ายินยอมให้ทางองค์การสวนสัตว์หักเงินเดือนหรือเงินอื่นที่ ข้าพเจ้าพึ่งได้รับจากทางองค์การสวนสัตว์ชดใช้จนครบถ้วน
			</tr>
		</table>
		<table>
			<tr>
				<td style="font-size:14px;padding-left:350px;">ลงชื่อ </td>
				<td style="font-size:14px;"><?php echo $show['hrctf_name']; ?></td>
			</tr>
		</table>
		<table>	
    		<tr>
				<td style="font-size:14px;padding-left:377px;">(</td>
				<td style="font-size:14px;"><?php echo $show['hrctf_name']; ?></td>
				<td style="font-size:14px;">)</td>
			</tr>
		</table>
		<table style="margin-bottom:32px">
			<tr>
				<td style="font-size:14px;padding-left:350px;">วันที่ </td>
				<td style="font-size:14px;"><?php echo thainumDigit($datenow); ?></td>
			</tr>
		</table>
<!--
		<table style="margin-bottom:16px">
    		<tr>
				<td style="font-size:14px;">2. เสนอ</td>
				<td style="font-size:14px;">..............................................</td>
		</table>
		<table>
    		<tr>
				<td style="font-size:14px;line-height:24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				ขอรับรองว่า พนักงานผู้นี้มีสิทธิได้รับการช่วยเหลือเกี่ยวกับการรักษาพยาบาลเต็มจำนวน สมควรออกหนังสือรับรองได้
			</tr>
		</table>
		<table>
			<tr>
				<td style="font-size:14px;padding-left:350px;">ลงชื่อ </td>
				<td style="font-size:14px;">.............................................</td>
			</tr>
		</table>
		<table>	
    		<tr>
				<td style="font-size:14px;padding-left:377px;">(</td>
				<td style="font-size:14px;">.............................................</td>
				<td style="font-size:14px;">)</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="font-size:14px;padding-left:350px;">ตำแหน่ง </td>
				<td style="font-size:14px;">.........................................</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="font-size:14px;padding-left:350px;">วันที่ </td>
				<td style="font-size:14px;">...............................................</td>
			</tr>
		</table>
		<table style="margin-bottom:16px">
    		<tr>
				<td style="font-size:14px;">....................................................................................................................................................................................</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="font-size:12px;"><u>หมายเหตุ</u></td>
				<td style="font-size:12px;padding-left:32px;">1. เสนอ ผู้บังคับบัญชาหรือผู้เบิกเงินบำนาญหรือเบี้ยหวัด</td>
			</tr>
			<tr>
				<td style="font-size:12px;"></td>
				<td style="font-size:12px;padding-left:32px;">2. เสนอ ผู้มีอำนาจออกหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</td>
			</tr>
		</table>
-->
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
