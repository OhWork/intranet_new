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
		<!--บรรทัดที่ 1-->
		<table>
    		<tr>
        		<td>ที่ ทส.๑๑๐๑/</td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table>
    		<tr>
				<td><!-- ระบุวันที่ --></td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td>เรื่อง</td>
				<td>รับรองการมีสิทธิได้รับสวัสดิการค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td>เรียน</td>
				<td>ผู้อำนวยการ</td>
				<td><?php echo $show['hrctf_name']?></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td>ด้วย</td>
				<td><?php echo $show['hrctf_familyname']?></td>
				<td><?php if($show['hrctf_familytype'] == 2){
    				    echo "คู่สมรส"; 
    				}else if($show['hrctf_familytype'] == 3){
        				echo "บิดา"; 
    				}else if($show['hrctf_familytype'] == 4){
        				echo "มารดา"; 
    				}else if($show['hrctf_familytype'] == 5){
        				echo "บุตร"; 
    				}
				?></td>
				<td>ของ</td>
				<td><?php echo $show['hrctf_name']?></td>
				<td>พนักงานองค์การ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td>สวนสัตว์</td>
				<td>ตำแหน่ง</td>
				<td><?php echo $show['hrctf_position']?></td>
				<td>สังกัด</td>
				<td><?php echo $show['zoo_name']?></td>
				<td>องค์การสวนสัตว์ ได้เข้ารับการรักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td>ณ สถานพยาบาลแห่งนี้ ตั้งแต่วันที่</td>
				<td><?php echo DateThai($show['hrctf_datestarthos']);?></td>
				<td>ประเภทคนไข้ใน</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table>
    		<tr>
				<td>องค์การสวนสัตว์ เป็นหน่วยงานรัฐวิสาหกิจ สังกัดกระทรวงทรัพยากรธรรมชาติ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table>
    		<tr>
				<td>และสิ่งแวดล้อม ขอรับรองว่า</td>
				<td><?php echo $show['hrctf_familyname']?></td>
				<td>มีสิทธิได้รับสวัสดิการค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 9-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อโรงพยาบาล--></td>
				<td>เรียกเก็บเงินค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 10-->
		<table>
    		<tr>
				<td>ของ</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่เข้ารับการรับษา--></td>
				<td>ได้โดยตรงกับองค์การสวนสัตว์ ๗๑ ถนนพระราม ๕ เขตดุสิต</td>
			</tr>
		</table>
		<!--บรรทัดที่ 11-->
		<table>
    		<tr>
				<td>กรุงเทพมหานคร ๑๐๓๐๐ จักขอบคุณยิ่ง</td>
			</tr>
		</table>
		<!--บรรทัดที่ 12-->
		<table>
    		<tr>
				<td>จึงเรียนมาเพื่อโปรดพิจารณา</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td>ของแสดงความนับถึอ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง ผอ.--></td>
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
?>
