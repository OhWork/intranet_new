<?php
header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
    include "database/db_tools.php";
	include "connect.php";
if(isset($_GET['gData']) && $_GET['gData']|=""){
	$id = $_GET['gData'];
	$result = $db->findByPK44('eventconfer','headncf','zoo','conferroom','headncf_headncf_id','headncf_id','subzoo_zoo_zoo_id','zoo_id','confer_confer_id','conferroom_id','confer_confer_id',$id)->execute();
 while($rs=$result->fetch_object()){
        $bgColor= "#BDE4F4";
        $textColor= "#00204A";
        $status = null;
        if(($rs->eventconfer_status=='Y')){
            $statusconfer = " อนุมัติ";
            
            if($rs->eventconfer_status_online == 'Y'){
            	$statusconferonline = " อนุมัติ";
            }
            else if($rs->eventconfer_status_online == 'W'){
            	$statusconferonline = " รออนุมัติ";
            }
            else if($rs->eventconfer_status_online == 'N'){
            	$statusconferonline = " ไม่อนุมัติ";
            }

        }else if($rs->eventconfer_status=='N'){
            $statusconfer = " ไม่อนุมัติ ";
            if($rs->eventconfer_status_online == 'Y'){
            	$statusconferonline = " ";
            }
            else if($rs->eventconfer_status_online == 'W'){
            	$statusconferonline = " ";
            }
            else if($rs->eventconfer_status_online == 'N'){
            	$statusconferonline = " ";
            }
        }else if($rs->eventconfer_status=='W'){
            $statusconfer = " รอการอนุมัติ";
            if($rs->eventconfer_status_online == 'Y'){
            	$statusconferonline = " ";
            }
            else if($rs->eventconfer_status_online == 'W'){
            	$statusconferonline = " ";
            }
            else if($rs->eventconfer_status_online == 'N'){
            	$statusconferonline = " ";
            }
        }
        else if($rs->eventconfer_status == 'C'){
            $statusconfer = " ยกเลิก";
            if($rs->eventconfer_status_online == 'Y'){
            	$statusconferonline = " ";
            }
            else if($rs->eventconfer_status_online == 'W'){
            	$statusconferonline = " ";
            }
            else if($rs->eventconfer_status_online == 'N'){
            	$statusconferonline = " ";
            }
        }
        //เงื่อนไขจุดสี
        if($rs->eventconfer_status=='Y' && $rs->eventconfer_status_online == 'Y'){
            	$eventcolor = "#51c900";
            }
            else if($rs->eventconfer_status=='Y' && $rs->eventconfer_status_online == 'N'){
            	$eventcolor = "#51c900";
            }
            else if($rs->eventconfer_status=='Y' && $rs->eventconfer_status_online == 'Y'){
            	$eventcolor = "#51c900";
            }else if($rs->eventconfer_status=='W' && $rs->eventconfer_status_online == 'W'){
            	$eventcolor = "#f2f218";
            }
            else if($rs->eventconfer_status=='Y' && $rs->eventconfer_status_online == 'W'){
            	$eventcolor = "#f2f218";
            }
            else if($rs->eventconfer_status=='C'){
            	$eventcolor = "#f0911d";
            }
            else if($rs->eventconfer_status=='N'){
            	$eventcolor = "#f0211d";
            }
        if($rs->headncf_name != 'ประชุมภายใน' && $rs->headncf_name != 'ประชุมภายนอก'){
	        $rs->eventconfer_story = '-';
        }
        $json_data[]=array(
            "id"=>$rs->eventconfer_id,
            "title"=>$rs->headncf_name,
            "end"=>$rs->eventconfer_end,
            "start"=>$rs->eventconfer_start,
            'status_confer'=> $rs->eventconfer_status,
            'status_online'=> $rs->eventconfer_status_online,
            "description"=> "<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>ชื่อประธาน</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->eventconfer_psname."</p></center></div>
								</div>
                            </div>
                            <div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>ตำแหน่ง</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->eventconfer_psclass."</p></center></div>
								</div>
                            </div>
                            <div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>ประเภทเรื่อง</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->headncf_name."</p></center></div>
								</div>
                            </div>
                             <div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>เรื่อง</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->eventconfer_story."</p></center></div>
								</div>
                            </div>
                            <div class='col-md-12'>
								<div class='row '>
									<div class='col-md-4'><p style='color:green;'>เวลาเริ่มประชุม</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->eventconfer_start."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:red;'>เวลาเลิกประชุม</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->eventconfer_end."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p>ชื่อผู้จอง</p></div>
									<div class='col-md-8' style='text-align: center;'><p>".$rs->eventconfer_namers."</p></center></div>
								</div>
							</div>
							<input type='hidden' id ='event_id' value=".$rs->eventconfer_id.">"
							,
			 "statusfootermodal"=> "<div class='col-md-12'>
										<div class='row'>
											<div class='col-md-12' style='padding-top:10px;padding-left:0;padding-right:0;'>
												<div class='row'>
													<div id='confer' class='col-md-5' style='padding-right:0;padding-top:4px;'>
														<div class='row'>
															<p id='txtconfer' class='col-md-8' style='text-align:left;padding-right:0;'>สถานะห้องประชุม :</p>
															<p id='statusconferrence' class='col-md-4' style='text-align:left;padding-left:0;padding-right:0;'><u><b>".$statusconfer."</b></u></p>
														</div>
													</div>
													<div class='col-md-7' style='padding-left:0;padding-right:0;'>
														<p id='comment' class='col-md-12' style='text-align:left;padding-left:0;padding-right:0;padding-top:4px;'>เนื่องจาก : ".$rs->eventconfer_comment."</p>
														<div class='col-md-12 reportconferzpo' style='text-align: center;'>
															<a class='btn btn-info' id='zpo' style='padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;float:right;' href='cf_report.php?id=".$rs->eventconfer_id."'>พิมพ์ใบจองห้องประชุม</a>
														</div>
														<div class='col-md-12 reportconfersongkla' style='text-align: center;'>
															<a class='btn btn-info' id='songkla'style='padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;float:right;' href='cf_report_songkra.php?id=".$rs->eventconfer_id."'>พิมพ์ใบจองห้องประชุม</a>
														</div>
													</div>
												</div>
											</div>
											<div class='col-md-12' style='padding-top:10px;padding-left:0;padding-right:0;'>
												<div class='row'>
													<div class='col-md-6' style='padding-right:0;padding-top:4px;'>
														<div class='row'>
															<p id='txtconferonline' class='col-md-8' style='text-align:left;padding-right:0;'>สถานะระบบห้องประชุม :</p>
															<p id='statusconferrenceonline' class='col-md-4' style='text-align:left;padding-left:0;padding-right:0;'><u><b>".$statusconferonline."</b></u></p>
														</div>
													</div>
													<div class='col-md-6 reportconferonline'>
														<a class='btn btn-info' style='padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;float:right;'href='cf_report_conference.php?id=".$rs->eventconfer_id."'>พิมพ์ใบจองห้องประชุม</a>
													</div>
												</div>
											</div>
										</div>
									</div>"
									,
             "color"=> $bgColor,
             "textColor" => $textColor,
            "borderColor" => $eventcolor,
             "zoo_name" =>$rs->zoo_name,
             "zoo_zoo_id" =>$rs->zoo_zoo_id,

        );
    }
}
$json_data=(isset($json_data))?$json_data:NULL;
$json= json_encode($json_data);
if(isset($_GET['callback']) && $_GET['callback']!=""){
echo $_GET['callback']."(".$json.");";
}else{
echo $json;
}
?>
