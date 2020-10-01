<?php
	ob_start();
    include_once 'database/db_tools.php';
    include_once 'connect.php';
	require_once 'vendor/autoload.php';
	error_reporting(0);

    $id = $_GET['id'];
$rs = $db->findByPK33DESC('reguser','subzoo','zoo','reguser.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','reguser_id',$id,'reguser_date')->executeAssoc();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body style="width:800px;margin:auto;">
					<!--บรรทัดที่ 1-->
					<table align="right" style="width:100%;">
    					<tr>
        					<td align="right">แบบฟอร์ม ทส...</td>
    					</tr>
					</table>
					<table style="width:100%;">
    					<tr>
                            <td align="center"><img style='width:90px;' src='images/logo/ZPOT.png'></td>
    					</tr>
					</table>
					<!--บรรทัดที่ 2-->
					<table style="width:100%;">
    				    <tr>
							<td align="center">แบบฟอร์ม การขอชื่อผู้ใช้และรหัสผ่านสำหรับใช้งานระบบเทคโนโลยีสารสนเทศ</td>
    				    </tr>
    				    <tr>
							<td align="center">สำนักดิจิทัลและสารสนเทศ โทร ๐๒-๕๘๗๐๐๕๕ , ภายใน ๒๑๒</td>
						</tr>
					</table>
					<table style="width:100%;height:10px;">
						<tr>
							<td style="border-bottom: dotted 1px #000000;"></td>
						</tr>
					</table>
					<table style="width:100%;">
						<tr>
							<td style="width:60px;"><b><u>ส่วนที่ ๑</u></b></td>
							<td style="width:457px;"><b>สำหรับผู้ขอใช้บริการ</b></td>
                            <td style="width:60px;">วันที่แจ้ง</td>
                            <td style="width:100px;border-bottom: dotted 1px #000000;"><!--ใส่CODEตรงนี้--></td>
					</table>
					<table tabindex="50" style="width:100%;">
						<tr>
							<td style="width:50px;"></b></td>
                                                                                                                <td>ด้วยข้าพเจ้า มีความประสงค์ที่จะใช้บริการระบบเครือข่ายองค์การสวนสัตว์ จึงขอมี User account สำหรับใช้บริการระบบฯ และ</td>
						</tr>
   					</table>
					<table style="width:100%;">
						<tr>
							<td>จะปฏิบัติตามระเบียบข้อกำหนด และประกาศนโยบายและแนวปฏิบัติในการรักษาความมั่นคงปลอดภัยด้านสารสนเทศขององค์การสวนสัตว์</td>
						</tr>
   					</table>
					<table style="width:100%;">
						<tr>
							<td>ในพระบรมราชูปถัมภ์ ทุกประการ</td>
						</tr>
   					</table>
					<table style="width:100%;">
						<tr>
							<td style="width:150px;">ข้าพเจ้า(นาย/นาง/นางสาว)</td>
							<td style="width:250px;border-bottom: dotted 1px #000000;"><?php echo $rs['reguser_name_th']; ?></td>
                            <td style="width:50px;">ตำแหน่ง</td>
                            <td style="width:205px;border-bottom: dotted 1px #000000;"><?php echo $rs['reguser_position']; ?></td>
						</tr>
					</table>
					<table style="width:100%;">
						<tr>
							<td style="width:100px;">ชื่อภาษาอังกฤษ</td>
							<td style="width:650px;border-bottom: dotted 1px #000000;"><?php echo $rs['reguser_name_en']; ?></td>
						</tr>
					</table>
                                                                                <table style="width:100%;">
						<tr>
							<td style="width:100px;">รหัสบัตรประชาชน</td>
						</tr>
					</table>
					<table>
    						<tr>
							    <td>สำนัก/สถาบัน</td>
                                                                                                                    <td style="width:200px;border-bottom: dotted 1px #000000;"><?php echo $rs['zoo_name']; ?></td>
                                                                                                                    <td>ฝ่าย</td>
                                                                                                                    <td style="width:200px;border-bottom: dotted 1px #000000;"><?php echo $rs['subzoo_name']; ?></td>
                                                                                                                                                    <td>เบอร์ติดต่อ</td>
                                                                                                                    <td style="width:120px;border-bottom: dotted 1px #000000;"><!--ใส่CODEตรงนี้--></td>
    						</tr>
					</table>
                                        <table>
    						<tr>
							    <td>สวนสัตว์</td>
                                                                                                                    <td style="width:224px;border-bottom: dotted 1px #000000;"><?php echo $rs['zoo_name']; ?></td>
                                                                                                                    <td>ฝ่าย</td>
                                                                                                                    <td style="width:200px;border-bottom: dotted 1px #000000;"><?php echo $rs['subzoo_name']; ?></td>
                                                                                                                                                    <td>เบอร์ติดต่อ</td>
                                                                                                                    <td style="width:120px;border-bottom: dotted 1px #000000;"><!--ใส่CODEตรงนี้--></td>
    						</tr>
					</table>
					
					<table style="width:100%;">
						<tr>
							<td>ระบบงานที่ขอใช้ ดังนี้</td>
						</tr>
   					</table>
					<table style="width:100%;font-size: 14px;">
						<tr>
                                                                                <td style="padding-left: 40px;width:300px;">
						<?php
							if($rs['reguser_internet_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  ระบบ Internet องค์การสวนสัตว์" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." ระบบ Internet องค์การสวนสัตว์";
							}
						?>
					</td>
                                                                                   <td style="width:150px;">
						<?php
							if($rs['reguser_intranet_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  Zpo data center" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." Zpo data center";
							}
						?>
					</td>
                                                                                   <td style="width:150px;">
						<?php
							if($rs['reguser_eproject_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  ระบบ E-project" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." ระบบ E-project";
							}
						?>
					</td>
                                                                                   <td style="width:200px;">
						<?php
							if($rs['reguser_animal_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  ระบบทะเบียนสัตว์" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." ระบบทะเบียนสัตว์";
							}
						?>
					</td>
                                                                                </tr>
                                                                                </table>
                                                                                <table style="width:100%;font-size: 14px;">
                                                                                <tr>
                                                                                    
                                                                                   <td style="padding-left: 42px;width:250px;">
						<?php
							if($rs['reguser_hrsys_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  ระบบบริหารงานบุคคล" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." ระบบบริหารงานบุคคล";
							}
						?>
					</td>
                                                                                   <td style="width:200px;">
						<?php
							if($rs['reguser_website_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  www.zoothailand.org" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." www.zoothailand.org";
							}
						?>
					</td>
                                                                                   <td style="width:350px;">
						<?php
							if($rs['reguser_esarabun_use']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  ระบบสารบรรณอิเล็กทรอนิกส์(สรอ.)" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." ระบบสารบรรณอิเล็กทรอนิกส์(สรอ.)";
							}
						?>
					</td>
                                                                                </table>
                                                                                <table style="width:100%;font-size: 14px;">
                                                                                <tr>
                                                                                   <td style="padding-left: 39px;width:350px;">
						<?php
							if($rs['reguser_userpasslost']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  Username และ Password ในกรณีทำหายระบบ" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." Username และ Password ในกรณีทำหายระบบ";
							}
						?>
					</td>
                                                                                <td style="width:400px;border-bottom: dotted 1px #000000;"></td>
                                                                                </table>
                                                                                <table style="width:100%;font-size: 14px;">
                                                                                <tr>
                                                                                        <td style="padding-left: 39px;width:100px;">
						<?php
							if($rs['reguser_other']==1){
								echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  อื่นๆ" ;
							}
							else{
								echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." อื่นๆ";
							}
						?>
					</td>
                                                                                <td style="width:650px;border-bottom: dotted 1px #000000;"></td>
						</tr>
   					</table>
					<table style="width:100%;font-size: 14px;">
						<tr>
							<td style="width:120px;">เหตุผลการใช้งาน</td>
							<td style="width:630px;border-bottom: dotted 1px #000000;"><?php echo $rs['reguser_reason_detail']; ?></td>
						</tr>
					</table>
					<table style="width:100%;">
						<tr>
							<td style="width:100px;">***ช่องทางในการรับ*** Username และ Password</td>
							<td style="width:50px;">
                                                                                                                        <?php
                                                                                                                                if($rs['reguser_other']==1){
                                                                                                                                        echo "<img src='images/icons/checked.png' / style='width:18px; height: 18px;'/>"." "."  email" ;
                                                                                                                                }
                                                                                                                                else{
                                                                                                                                        echo "<img src='images/icons/unchecked.png' style='width:15px; height: 15px;'>"." "." email";
                                                                                                                                }
                                                                                                                        ?>
                                                                                                                </td>
                                                                                                                <td style="width:300px;border-bottom: dotted 1px #000000;"></td>
						</tr>
					</table>
					<table style="width:100%;">
						<tr>
							<td>***หมายเหตุ*** กรณีที่ไม่ใช่พนักงานหรือลูกจ้าง ขององค์การสวนสัตว์ ผู้ขอ User account จะต้องแนบสำเนาบัตรประจำตัวพร้อมลงนาม</td>
						</tr>
   					</table>
					<table style="width:100%;">
						<tr>
							<td>รับรองสำเนาถูกต้องมาพร้อมด้วยแล้ว</td>
						</tr>
   					</table>
					<table>
    					    <tr>
								<td>ลงชื่อ</td>
								<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>(ผู้ขอใช้บริการ)</td>
								<td style="padding-left:150px;">ลงชื่อ</td>
								<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>(ผู้บังคับบัญชา)</td>
    					    </tr>
					    </table>
					    <table>
    					    <tr>
								<td style="padding-left:25px;">(</td>
								<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>)</td>
								<td style="padding-left:245px;">(</td>
    							<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>)</td>
				            </tr>
					    </table>
					    <table>
    					    <tr>
								<td>ตำแหน่ง</td>
								<td style="width:220px;border-bottom: dotted 1px #000000;"></td>
								<td style="padding-left:145px;">ตำแหน่ง</td>
								<td style="width:220px;border-bottom: dotted 1px #000000;"></td>
							</tr>
					    </table>
					    <table>
    					    <tr>
								<td>วันที่</td>
    							<td style="width:240px;border-bottom: dotted 1px #000000;"></td>
    							<td style="padding-left:145px;">วันที่</td>
    							<td style="width:240px;border-bottom: dotted 1px #000000;"></td>
							</tr>
					    </table>
						<table style="width:100%;height:10px;">
							<tr>
								<td style="border-bottom: solid 1px #000000;"></td>
							</tr>
						</table>
						<table style="width:100%;">
							<tr>
								<td style="width:60px;"><b><u>ส่วนที่ ๒</u></b></td>
								<td style="width:457px;"><b>สำหรับเจ้าหน้าที่สำหรับเทคโนโลยีสารสนเทศ</b></td>
								<td style="width:60px;">วันที่แจ้ง</td>
								<td style="width:100px;border-bottom: dotted 1px #000000;"><!--ใส่CODEตรงนี้--></td>
							</tr>
						</table>
						<table style="width:100%;">
							<tr>
								<td style="width:42px;"></b></td>
								<td>ได้ดำเนินการสร้างชื่อผู้ใช้และรหัสผ่านเพื่อใช้งานระบบฯ ตามที่ท่านร้องขอเรียบร้อยแล้ว และแจ้งให้ผู้ขอรับบริการทาง</td>
							</tr>
						</table>
						<table style="width:100%;">
							<tr>
								<td style="border-bottom: dotted 1px #000000;height:20px;"></td>
							</tr>
						</table>
						<table style="width:100%;">
							<tr>
								<td style="border-bottom: dotted 1px #000000;height:25px;"></td>
							</tr>
						</table>
						<table style="margin-top:20px;">
    					    <tr>
								<td>ลงชื่อ</td>
								<td style="width:150px;border-bottom: dotted 1px #000000;"><?php echo $rs['reguser_name_th']; ?></td>
								<td>(ผู้ขอใช้บริการ)</td>
								<td style="padding-left:150px;">ลงชื่อ</td>
								<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>(ผู้บังคับบัญชา)</td>
    					    </tr>
					    </table>
					    <table>
    					    <tr>
								<td style="padding-left:25px;">(</td>
								<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>)</td>
								<td style="padding-left:245px;">(</td>
    							<td style="width:150px;border-bottom: dotted 1px #000000;"></td>
								<td>)</td>
				            </tr>
					    </table>
					    <table>
    					    <tr>
								<td>ตำแหน่ง</td>
								<td style="width:220px;border-bottom: dotted 1px #000000;"></td>
								<td style="padding-left:145px;">ตำแหน่ง</td>
								<td style="width:220px;border-bottom: dotted 1px #000000;"><?php echo $rs['reguser_position']; ?></td>
							</tr>
					    </table>
					    <table>
    					    <tr>
								<td>วันที่</td>
    							<td style="width:240px;border-bottom: dotted 1px #000000;"></td>
    							<td style="padding-left:145px;">วันที่</td>
    							<td style="width:240px;border-bottom: dotted 1px #000000;"></td>
							</tr>
					    </table>
						<table style="width:100%;height:10px;">
							<tr>
								<td></td>
							</tr>
						</table>
						<table align="right">
								<tr>
									<td style="border: solid 1px #000;padding-left: 5px;padding-right: 5px;">FM-IT-03/3</u></td>
								</tr>
						</table>
						
    </body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
try {
  $pdf = new \Mpdf\Mpdf([
    'tempDir' => __DIR__ . '/../tmp', // uses the current directory's parent "tmp" subfolder
    'setAutoTopMargin' => 'stretch',
    'setAutoBottomMargin' => 'stretch'
    ,'mode' => 'th']);
} catch (\Mpdf\MpdfException $e) {
    print "Creating an mPDF object failed with" . $e->getMessage();
}
$stylesheet .= file_get_contents('CSS/pdf.css');
$pdf->WriteHTML($stylesheet,1);
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output();
?>