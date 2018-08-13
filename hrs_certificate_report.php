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
		<table style="margin-bottom:10px;">
    		<tr>
				<td style="padding-left:60px;font-size:14px;">หนังสือฉบับนี้เพื่อรับรองว่า นายราชพร เชิขวัญมา<!--ใส่โค๊ตตรงนี้ พนักงาน--> ปัจจุบันปฏิบัติงานในตำแหน่ง เจ้าหน้าที่ตรวจสอบ3<!--ใส่โค๊ตตรงนี้ ตำแหน่ง--></td>
			</tr>
			<tr>
				<td style="font-size:14px;">สังกัด สำนักตรวจสอบ<!--ใส่โค๊ตตรงนี้ สังกัด--> องค์การสวนสัตว์ กระทรวงทรัพยาการธรรมชาติและสิ่งแวดล้อม ได้เข้าทำงานเมื่อวันที่
				</td>
			</tr>
			<tr>
				<td style="font-size:14px;"><!--ใส่โค๊ตตรงนี้ วันที่-->ปัจจุบันอัตราเงินเดือน <!--ใส่โค๊ตตรงนี้ เงินเดือน--> บาท <!--ใส่โค๊ตตรงนี้ เงินเป็นตัวหนังสือ--></td>
			</tr>
		</table>
		<table style="margin-left:60px;margin-bottom:100px;">
    		<tr>
				<td style="font-size:14px;">ให้ไว้ ณ วันที่ <!--ใส่โค๊ตตรงนี้ วันที่--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table style="margin-left:280px;">
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table style="margin-left:280px;">
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