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

<!-- เขียนต่อจากนี้ -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
		<!--บรรทัดที่ 1-->
		<table align="left">
    		<tr>
                <td><img style='width:90px;' src='images/Logo/ZPO.png'></td>
			</tr>
		</table>
		<table>
    		<tr>
        		<td style="font-size: 24px;"><b>บันทึกข้อความ</b></td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table>
    		<tr>
				<td><b>หน่วยงาน</b></td>
				<td>องค์การสวนสัตว์  สำนักบริหารทรัพยากรบุคคล ฝ่ายสวัสดิการและแรงงานสัมพันธ์</td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td>ที่</td>
				<td>ทส ๑๑๑๙ /</td>
				<td>วันที่</td>
				<td><!--ใส่โค๊ตตรงนี้--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table style="border-bottom: solid 1px #000000;">
    		<tr>
				<td>เรื่อง</td>
				<td>รับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td><b>เรียน</b></td>
				<td><b>ผู้อำนวยการองค์การสวนสัตว์</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td>ด้วย</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อ--></td>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง--></td>
				<td>สังกัด</td>
				<td><!--ใส่โค๊ตตรงนี้ สังกัด--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td>มีความประสงค์ขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาลซึ่ง</td>
				<td><!--ใส่โค๊ตตรงนี้ ผู้ที่เข้ารับการรับษา--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ TYPE--></td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อ--></td>
				<td>จะเข้ารับการรักษาพยาบาลที่</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อสถานพยาบาล--></td>
				<td>ในวันที่</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่--></td>
				<td>นั้น</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table>
    		<tr>
				<td>สำนักบริหารทรัพยากรบุคคล ได้จัดทำหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาลบิดาของ </td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อ--></td>
				<td>เรียบร้อยแล้ว</td>
			</tr>
		</table>
		<!--บรรทัดที่ 9-->
		<table>
    		<tr>
				<td>จึงเรียนมาเพื่อโปรดพิจารณา หากเห็นชอบเพื่อโปรดลงนามในหนังสือรับรองที่แนบมาพร้อมนี้</td>
			</tr>
		</table>
		<!--บรรทัดที่ 10-->
		<table>
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.HR--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง ผอ.HR--></td>
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
