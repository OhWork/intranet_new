<?php
header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
    include "../database/db_tools.php";
	include "../connect.php";
if(isset($_GET['gData']) && $_GET['gData']|=""){
	$result = $db->findByPK43('eventconfer','confer','zoo','headncf','confer_confer_id','confer_id','zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','zoo_type','1')->execute();
 while($rs=$result->fetch_object()){
        $bgColor=null;
        $status = null;
        if($rs->eventconfer_status=='Y'){
	        $status = "อนุมัติ";
            if($rs->confer_confer_id=='1'){
                $bgColor="#0FC9E7";
            }else if($rs->confer_confer_id=='2'){
                $bgColor="#3186B2";
            }else if($rs->confer_confer_id=='3'){
                $bgColor="#4756CA";
            }
        }else if($rs->eventconfer_status=='N'){
	        $status = "ไม่อนุมัติ";
            if($rs->confer_confer_id=='1'){
                $bgColor="#0FC9E7";
            }else if($rs->confer_confer_id=='2'){
                $bgColor="#3186B2";
            }else if($rs->confer_confer_id=='3'){
                $bgColor="#4756CA";
            }
        }elseif($rs->eventconfer_status=='W'){
	      	 $status = "รอการอนุมัติ";
            if($rs->confer_confer_id=='1'){
                $bgColor="#0FC9E7 ";
            }else if($rs->confer_confer_id=='2'){
                $bgColor="#3186B2";
            }else if($rs->confer_confer_id=='3'){
                $bgColor="#4756CA";
            }
        }
        $json_data[]=array(
            "id"=>$rs->eventconfer_id,
            "title"=>$rs->eventconfer_story,
            "start"=>$rs->eventconfer_start,
            "end"=>$rs->eventconfer_end,
            'statuss'=> $rs->eventconfer_status,
            "description"=> "<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>ชื่อประธาน</p></div>
									<div class='col-md-8' style='text-align: center;'><p'>".$rs->eventconfer_psname."</p></center></div>
								</div>
                            </div>
                            <div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>ตำแหน่ง</p></div>
									<div class='col-md-8' style='text-align: center;'><p'>".$rs->eventconfer_psclass."</p></center></div>
                                </div>
                            </div>
                                <div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>เรื่อง</p></div>
									<div class='col-md-8' style='text-align: center;'><p'>".$rs->headncf_name."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:green;'>เวลาเริ่มประชุม</p></div>
									<div class='col-md-8' style='text-align: center;'><p'>".$rs->eventconfer_start."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p style='color:red;'>เวลาเลิกประชุม</p></div>
									<div class='col-md-8' style='text-align: center;'><p'>".$rs->eventconfer_end."</p></center></div>
								</div>
							</div>
							<div class='col-md-12'>
								<div class='row'>
									<div class='col-md-4'><p>ชื่อผู้จอง</p></div>
									<div class='col-md-8' style='text-align: center;'><p'>".$rs->eventconfer_namers."</p></center></div>
								</div>
							</div>",
             "url"=> "cf_report.php?id=".$rs->eventconfer_id,
             "url2"=> "cf_report_conference.php?id=".$rs->eventconfer_id,
             "color"=> $bgColor,
             "stat" => $status
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
