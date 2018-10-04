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
        		<td  style="font-size:14px;">ที่ ทส.๑๑๐๑/</td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table style="margin-left:280px;margin-bottom:50px;">
    		<tr>
				<td style="font-size:20px;"><b>หนังสือรับรอง</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table style="margin-bottom:30px;">
    		<tr>
				<td style="font-size:14px;line-height:28px;letter-spacing:nomal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; หนังสือฉบับนี้เพื่อรับรองว่า
				<?php echo $show['hrctf_name'];?> ปัจจุบันปฏิบัติงานในตำแหน่ง <?php echo thainumDigit($show['hrctf_position']);?> 
				สังกัด <?php echo $show['zoo_name'];?> องค์การสวนสัตว์ กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม ได้เข้าทำงานเมื่อวันที่ 
				<?php $datethai = DateThai($show['hrctf_datestartwork']); echo thainumDigit($datethai);?> 
				ปัจจุบันอัตราเงินเดือน <?php $salary = number_format($show['hrctf_salary']);
    				                        echo thainumDigit($salary);?> บาท <!--ใส่โค๊ตตรงนี้ เงินเป็นตัวหนังสือ--></td>
			</tr>
		</table>
		<table style="margin-bottom:100px;">
    		<tr>
				<td style="font-size:14px;letter-spacing:nomal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ให้ไว้ ณ วันที่ <!--ใส่โค๊ตตรงนี้ วันที่--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td style="font-size:14px;padding-left:280px;">(</td>
				<td style="font-size:14px;">.............................................</td>
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