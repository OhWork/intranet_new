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
        		<td>ที่ ทส.๑๑๐๑/</td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table style="margin-left:350px;margin-bottom:50px;">
    		<tr>
				<td>10 สิงหาคม 2561</td>
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
		<table style="margin-bottom:20px;">
    		<tr>
				<td>เรียน</td>
				<td>ผู้อำนวยการ</td>
				<td><?php echo $show['hrctf_name']?></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td style="padding-left:60px;"><p>ด้วย นายโชติเชาว์ ปาลคำ บิดา
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
					?> ของ <?php echo $show['hrctf_name']?> พนักงานองค์การสวนสัตว์ ตำแหน่ง <?php echo $show['hrctf_position']?> สังกัด <?php echo $show['zoo_name']?> 
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>องค์การสวนสัตว์  ได้เข้ารับการรักษาพยาบาล ณ สถานพยาบาลแห่งนี้ ตั้งแต่วันที่ <?php echo DateThai($show['hrctf_datestarthos']);?> ประเภทคนไข้ใน</p>
				</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table>
    		<tr>
				<td style="padding-left:60px;">องค์การสวนสัตว์ เป็นหน่วยงานรัฐวิสาหกิจ สังกัดกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อมขอรับรองว่า <?php echo $show['hrctf_familyname']?> 
				</td>
			</tr>
			<tr>
				<td>มีสิทธิได้รับสวัสดิการค่ารักษาพยาบาลตามระเบียบขององค์การสวยสัตว์ โดยค่าห้องรวมค่าอาหารเบิกได้วันละไม่เกิน <!--ใส่โค๊ตตรงนี้ค่าห้อง--> บาท จึงขอให้ <!--ใส่โค๊ตตรงนี้ ชื่อโรงพยาบาล--> เรียก
				</td>
			</tr>
			<tr>
				<td>เก็บเงินค่ารักษาพยาบาล ของ <!--ใส่โค๊ตตรงนี้ ชื่อผู้เข้ารับการรักษา-->ได้โดยตรงกับองค์การสวนสัตว์ ๗๑ ถนนพระราม ๕ เขตดุสิต กรุงเทพมหานคร ๑๐๓๐๐ จักขอบคุณยิ่ง
				</td>
			</tr>
		</table>
		<!--บรรทัดที่ 12-->
		<table>
    		<tr>
				<td style="padding-left:60px;">จึงเรียนมาเพื่อโปรดพิจารณา</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table style="margin-left:350px;margin-bottom:100px;">
    		<tr>
				<td>ของแสดงความนับถึอ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table style="margin-left:330px;">
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table style="margin-left:330px;">
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
