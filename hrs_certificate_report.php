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
				<td>หนังสือรับรอง</td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td>หนังสือฉบับนี้เพื่อรับรองว่า</td>
				<td><!--ใส่โค๊ตตรงนี้ พนักงาน--></td>
				<td>ปัจจุบันปฏิบัติงานในตำแหน่ง</td>
			</tr>
		</table
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง--></td>
				<td>สังกัด</td>
				<td><!--ใส่โค๊ตตรงนี้ สังกัด--></td>
				<td>องค์การสวนสัคว์ กระทรวงทรัพยาการธรรมชาติ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td>และสิ่งแวดล้อม ได้เข้าทำงานเมื่อวันที่</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่--></td>
				<td>ปัจจุบันอัตราเงินเดือน</td>
				<td><!--ใส่โค๊ตตรงนี้ เงินเดือน--></td>
				<td>บาท</td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ เงินเป็นตัวหนังสือ--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td>ให้ไว้ ณ วันที่</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
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