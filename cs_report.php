<?php
	ob_start();
    include_once 'database/db_tools.php';
    include_once 'connect.php';
	require_once __DIR__ . '/vendor/autoload.php';
	error_reporting(0);

    $id = $_GET['id'];
    $rs = $db->findByPK44('problem','typetools','subtypetools','subzoo',
        'problem.subtypetools_typetools_typetools_id','typetools.typetools_id',
        'problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id',
        'problem.subzoo_subzoo_id','subzoo.subzoo_id',
        'problem_id',$id)->execute();
    $show = mysqli_fetch_assoc($rs);
    //admin
    $adminfix = $show['problem_adminfix'];
    $admin = $db->findByPK('user','user_id',$adminfix)->executeAssoc();
    //zoo
    $zoomain = $show['subzoo_zoo_zoo_id'];
    $zoo = $db->findByPK('zoo','zoo_id',$zoomain)->executeAssoc();
    //subzoo
    $subzoomain = $show['subzoo_subzoo_id'];
    $subzoo = $db->findByPK('subzoo','subzoo_id',$subzoomain)->executeAssoc();

     //typetools
    $typetoolsmain = $show['subtypetools_typetools_typetools_id'];
    $typeptools = $db->findByPK('typetools','typetools_id',$typetoolsmain)->executeAssoc();
      //subtypetools
    $subtypetoolsmain = $show['subtypetools_subtypetools_id'];
    $subtypetools = $db->findByPK('subtypetools','subtypetools_id',$subtypetoolsmain)->executeAssoc();
	ob_start();
	?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
					<!--บรรทัดที่ 1-->
					<table align="right">
    					<tr>
        					<td>แบบฟอร์ม ทส.๑๑๐๙/......</td>
    					</tr>
					</table>
					<table align="center">
    					<tr>
                            <td><img style='width:90px;' src='images/logo/ZPOT.png'></td>

    					</tr>
					</table>
					<!--บรรทัดที่ 2-->
					<table class="reportunderline">
    				    <tr>
    					<td class='fp row'>
                            แบบฟอร์ม การขอใช้บริการติดตั้ง ซ่อมบำรุงเครื่องคอมพิวเตอร์ และตรวจสอบระบบงาน
    					</td>
    				    </tr>
    				    <tr>
    					<td class='fp row'>
    						สำนักดิจิทัลและสารสนเทศ  เบอร์โทรศัพท์ ๐๒-๕๘๗๐๐๕๕ IP Phone: ๒๑๒
    					</td>
					</tr>
					</table>
					<!--บรรทัดที่ 4-->
						<table>
							<tr>
    							<td class='widthbox row'><b><u>ส่วนที่ ๑</u></b></td>
								<td class="widthbox"><b>สำหรับผู้ขอใช้บริการ</b></td>
                                <td class='widthbox1 row'>วันที่แจ้งซ่อม</td>
                                <td class='reportunderline widthbox2 row'><!--ใส่CODEตรงนี้--><?php echo $show['problem_date'];?></td>
                            </tr>

						</table>
					<!--บรรทัดที่ 5-->
						<table>
						    <tr>
							    <td class="widthbox3 row">ข้าพเจ้า</td>
                                <td class="widthbox4 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $show['problem_name'];?></td>
                                <td class="widthbox5 row">ตำแหน่ง</td>
                                <td class="widthbox6 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo @$show['problem_position'];?></td>
							</tr>
						</table>
					<!--บรรทัดที่ 6-->
						<table>
    						<tr>
							    <td class="widthbox3 row">สำนัก/สวนสัตว์</td>
                                <td class="widthbox7 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $zoo['zoo_name'];?></td>
                                <td class="widthbox5 row">ฝ่าย</td>
                                <td class="widthbox8 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $subzoo['subzoo_name'];?></td>
    						</tr>
						</table>
						<table>
    						<tr>
                        	    <td class="widthbox3 row">งาน</td>
                                <td class="widthbox9 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $subzoo['subzoo_name'];?></td>
                                <td class="widthbox5 row">เบอร์ติดต่อ</td>
                                <td class="widthbox10 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $show['problem_tel'];?></td>
    						</tr>
						</table>
					<!--บรรทัดที่ 8-->
					    <table>
						     <tr><td class="widthbox3 row"><b>ขอแจ้งใช้บริการ</b></td></tr>
					    </table>
					<!--บรรทัดที่ 9-->
					    <table>
    						<tr>
							    <td class="widthbox3 row">ประเภท</td>
                                <td class="widthbox11 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $typeptools['typetools_name'];?></td>
                                <td class="widthbox5 row">ปัญหา</td>
                                <td class="widthbox12 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $subtypetools['subtypetools_name'];?></td>
							</tr>
						</table>
					<!--บรรทัดที่ 11-->
					    <table>
						    <tr>
    						    <td class="widthbox3 row">
        						    <u>อาการของเครื่องคอมพิวเตอร์ / ลักษณะปัญหาการใช้ระบบงาน</u>
        				        </td>
    				        </tr>
					    </table>
					    <?php if(!empty($show['problem_detail'])){?>
					    <table style="line-height: 150%;">
    						<tr><td class="widthbox13" style="vertical-align: top;"><?php echo $show['problem_detail'];?></td>
    						</tr>
					    </table>
					    <?php }else{?>
					    <table>
    						<tr><td class="widthbox13-1 row reportunderline"></td></tr>
    						<tr><td class="widthbox13-1 row reportunderline"></td></tr>
    						<tr><td class="widthbox13-1 row reportunderline"></td></tr>
					    </table>
					    <?php } ?>
					     <table>
						    <tr><td class="widthbox3 row"><b><u>***หมายเหตุ***</b></u></tr></td>
                            <tr><td class="widthbox3 row">๑. เพื่อความปลอดภัยของข้อมูล ผู้ขอใช้บริการต้องทำการสำรองข้อมูล ให้แล้วเสร็จก่อนนำเครื่องมาใช้บริการ</tr></td>
                            <tr><td class="widthbox3 row">๒. สำนักดิจิทัลและสารสนเทศ ไม่รับผิดชอบต่อความเสียหายของข้อมูลทุกกรณี</tr></td>
						</table>
					<!--บรรทัดที่ 13-->
					    <table>
    					    <tr>
								<td class="widthbox3 row">ลงชื่อ</td>
								<td class="widthbox14 reportunderline row"></td>
								<td class="widthbox3 row">(ผู้ขอใช้บริการ)</td>
								<td class="widthbox15 row">ลงชื่อ</td>
								<td class="widthbox14 reportunderline row"></td>
								<td class="widthbox3 row">(ผู้บังคับบัญชา)</td>
    					    </tr>
					    </table>
					    <table>
    					    <tr>
								<td class="widthbox16 row">(</td>
								<td class="widthbox14 reportunderline row"><?php echo $show['problem_name'];?></td>
								<td class="widthbox3 row">)</td>
								<td class="widthbox17 row">(</td>
    							<td class="widthbox14 reportunderline row"></td>
								<td class="widthbox3 row">)</td>
				            </tr>
					    </table>
					    <table>
    					    <tr>
								<td class="widthbox3 row">ตำแหน่ง</td>
								<td class="widthbox19 reportunderline row"></td>
								<td class="widthbox18 row">ตำแหน่ง</td>
								<td class="widthbox19 reportunderline row"></td>
							</tr>
					    </table>
					    <table>
    					    <tr>
								<td class="widthbox3 row">วันที่</td>
    							<td class="widthbox21 reportunderline row"></td>
    							<td class="widthbox20 row">วันที่</td>
    							<td class="widthbox21 reportunderline row"></td>
							</tr>
					    </table>
					    <table>
							<tr><td class="widthbox22"></td></tr>
					    </table>
					<!--บรรทัดที่14-->
                        <table>
							<tr>
    							<td class='widthbox row'><b><u>ส่วนที่ ๒ </u></b></td>
								<td class='widthbox3'><b>สำหรับเจ้าหน้าที่สำนักดิจิทัลและสารสนเทศ</b></td>
							    <td class='widthbox23 row'>วันที่รับเรื่อง</td>
                                <td class='reportunderline widthbox2-2 row'><!--ใส่CODEตรงนี้--><?php echo $show['problem_dateorder'];?></td>
							</tr>
				        </table>
					<!--บรรทัดที่15-->
                        <table>
						    <tr>
							    <td class="widthbox3 row">ชื่อผู้ดำเนินการ</td>
                                <td class="widthbox24 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $admin['user_name']." ".$admin['user_last'];?></td>
                                <td class="widthbox3 row">สถานที่ดำเนินการ</td>
                                <td class="widthbox6 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $show['problem_place'];?></td>
						    </tr>
				        </table>
					<!--บรรทัดที่ 16-->
					<table>
						    <tr>
							    <td class="widthbox3 row">หมายเลขเครื่อง(Serial No.)</td>
                                <td class="widthbox25 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $show['problem_serial'];?></td>
    							<td class="widthbox3 row">รหัสครุภัณฑ์</td>
    							<td class="widthbox25 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $show['problem_serialorganize'];?></td>
    							<td class="widthbox3 row">หมายเลข IP address</td>
    							<td class="widthbox27 reportunderline row"><!--ใส่CODEตรงนี้--><?php echo $show['problem_ip'];?></td>
						    </tr>
					</table>
					<!--บรรทัดที่ 17-->
  <?php if($show['problem_status']=='N'){?>
                    <table>
						    <tr>
							    <td class="widthbox3 row">สถานะ</td>
								<td class="widthbox29 reportunderline row"></td>
						    </tr>
                    </table>
                    <?php if(!empty($show['problem_detailcomplete'])){ ?>
                    <table style="line-height: 150%;">
						    <tr>
							    <td class="widthbox28 row">รายละเอียด</td>
                                <td class="widthbox29-3" style="vertical-align: top;"><?php echo $show['problem_detailcomplete'];?></td>
    						</tr>
                    </table>
					    <?php }else{ ?>
					    <table>
					    <tr>
    					    <td class="widthbox28 row">รายละเอียด</td>
					        <td class="widthbox29-1 reportunderline row"></td>
					    </tr>
					    </table>
					    <table style="margin-left: 70px; margin-bottom: 10px;">
    					    <tr><td class="widthbox29-2 row reportunderline"></td></tr>
    						<tr><td class="widthbox29-2 row reportunderline"></td></tr>
    						<tr><td class="widthbox29-2 row reportunderline"></td></tr>
					    </table>
					    <?php } ?>

    <?php } ?>
       				<!--บรรทัดที่ 18-->
   <?php if($show['problem_status']=='Y'){?>
					<table>
						    <tr>
							    <td class="widthbox31 row">สถานะ</td>
							    <td class="widthbox29 reportunderline row">ดำเนินการซ่อมแล้ว</td>
						</tr>
                    </table>
    				<?php if(!empty($show['problem_detailcomplete'])){?>
                    <table style="line-height: 150%;">
						    <tr>
							    <td class="widthbox28" style="vertical-align: top;">รายละเอียด</td>
                                <td class="widthbox29-3" style="vertical-align: top;"><?php echo $show['problem_detailcomplete'];?></td>
    						</tr>
                    </table>
					    <?php }else{ ?>
					    <table>
					    <tr>
    					    <td class="widthbox28 row">รายละเอียด</td>
					        <td class="widthbox29-1 reportunderline row"></td>
					    </tr>
					    </table>
					    <table style="margin-left: 70px; margin-bottom: 10px;">
    					    <tr><td class="widthbox29-2 row reportunderline"></td></tr>
    						<tr><td class="widthbox29-2 row reportunderline"></td></tr>
    						<tr><td class="widthbox29-2 row reportunderline"></td></tr>
					    </table>
					    <?php } ?>
					<!--บรรทัดที่ 19
					<table>
						    <tr>
							    <td class="widthbox3 row">รายละเอียด</td>
                            	<td class="widthbox28 reportunderline row"><?php echo $show['problem_detailcomplete'];?></td>
						    </tr>
						    <tr><td class="widthbox29 reportunderline row"></td></tr>
    						<tr><td class="widthbox29 reportunderline row"></td></tr>
    						<tr><td class="widthbox29 reportunderline row"></td></tr>
					</table>	-->
	<?php } ?>
	<?php if($show['problem_status'] =='S'){?>
					<table>
						    <tr>
							    <td class="widthbox3 row">สถานะ</td>
							    <td class="widthbox29 reportunderline row">ยังไม่แล้วเสร็จ</td>
						</tr>
                    </table>

    				<?php if(!empty($show['problem_detailwaitcomplete'])){?>
					<table style="line-height: 150%;">
						    <tr>
							    <td class="widthbox28" style="vertical-align: top;">รายละเอียด</td>
                                <td class="widthbox29-3" style="vertical-align: top;"><?php echo $show['problem_detailwaitcomplete'];?></td>
    						</tr>
					</table>
					    <?php }else{?>
					    <table>
    					    <tr>
    					    <td class="widthbox28 row">รายละเอียด</td>
					        <td class="widthbox29-1 reportunderline row"></td>
					    </tr>
					    </table>
					    <table style="margin-left: 70px; margin-bottom: 10px;">
    					    <tr><td class="widthbox29-2 row reportunderline"></td></tr>
    						<tr><td class="widthbox29-2 row reportunderline"></td></tr>
    						<tr><td class="widthbox29-2 row reportunderline"></td></tr>
					    </table>
					    <?php } ?>
					<!--<table style="line-height: 150%">
						    <tr>
                            	<td class="widthbox28"><div class="reportunderline"><?php echo $show['problem_detailwaitcomplete'];?></div></td>
						    </tr>
					</table>-->
	<?php } ?>
					<!--บรรทัดที่ สุดท้าย-->
					<table>
    					    <tr>
								<td class="widthbox3 row">ลงชื่อ</td>
								<td class="widthbox14 reportunderline row"></td>
								<td class="widthbox3 row">(ผู้ดำเนินการ)</td>
								<td class="widthbox15 row">ลงชื่อ</td>
								<td class="widthbox14 reportunderline row"></td>
								<td class="widthbox3 row">(ผู้บังคับบัญชา)</td>
    					    </tr>
					    </table>
					    <table>
    					    <tr>
								<td class="widthbox16 row">(</td>
								<td class="widthbox14 reportunderline row"><?php echo $admin['user_name']." ".$admin['user_last'];?></td>
								<td class="widthbox3 row">)</td>
								<td class="widthbox17 row">(</td>
    							<td class="widthbox14 reportunderline row"></td>
								<td class="widthbox3 row">)</td>
				            </tr>
					    </table>
					    <table>
    					    <tr>
								<td class="widthbox3 row">ตำแหน่ง</td>
								<td class="widthbox19 reportunderline row"></td>
								<td class="widthbox18 row">ตำแหน่ง</td>
								<td class="widthbox19 reportunderline row"></td>
							</tr>
					    </table>
					    <table>
    					    <tr>
								<td class="widthbox3 row">วันที่</td>
    							<td class="widthbox21 reportunderline row"></td>
    							<td class="widthbox20 row">วันที่</td>
    							<td class="widthbox21 reportunderline row"></td>
							</tr>
					    </table>

					    <table style="margin-left: 600px; margin-top: 30px;">
    					    <tr>
							 <td class="widthbox30 row"><p>FM-IT-01/00</p></td>
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
