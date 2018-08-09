<?php
include_once 'change2thaidate.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class gridView{
	public $name,$data,$delete,$edit,$view,$deletetxt,$edittxt,$printtxt,$viewtxt,$header,$width,$pr,$change,$changestatus,$sts,$sts_hrs,$span,$link,$special,$system;


	function __construct(){
		$this->deletetxt = 'ลบ';
		//$this->edittxt = 'อนุมัติ';
		$this->printtxt = '';
		$this->viewtxt = 'รายละเอียด';
		$this->header = array();
		$this->footer = array();
		$this->width = array();
	}

	function __toString(){
		$html = "";
		$header = "";
		$footer = "";
		$body = "";

/* ส่วนหัวข้อ */
		$size = count($this->header);
		for($i = 0; $i<$size; $i++){
			$headertxt = $this->header[$i];
			$headerwidth = $this->width[$i];

			$header.= "<td width='{$headerwidth}'>{$headertxt}</td>";
		}
/* ส่วนสรุป */
		$size = count($this->footer);
		for($i = 0; $i<$size; $i++){
			$footertxt = $this->footer[$i];
			$footerwidth = $this->footer[$i];

			$footer.= "<td width='{$footerwidth}'>{$footertxt}</td>";
		}
/* ส่วนของข้อมูล */
		$size = count($this->data);
		for($i=0; $i<$size; $i++){
			$row = $this->data[$i];
			$columncount = count($row);

			$body.="<tr>";
			for($j=0; $j<$columncount;$j++){
				$columntxt = $row[$j];
				$body.="<td>{$columntxt}</td>";
			}
			$body.="</tr>";
		}

/* รูปแบบ */
		$html = "
		<table id='{$this->name}' border='0' style='border=collapse: collapse;'>
			<thead class='headrow'>
				<tr>
					{$header}
				</tr>
			</thead>
			<tbody class='sizerow'>
				{$body}
			</tbody>
		</table>";
		return $html;
	}

	function renderFromDB($fields, $result){
		$html ="";
		$header ="";
		$footer ="";
		$body ="";

/* ส่วนหัว */
		$size = count($this->header);
		for($i=0; $i<$size;$i++){
			$headertxt = $this->header[$i];
			$headerwidth = $this->width[$i];

			$header.="<td width='{$headerwidth}'>{$headertxt}</td>";
		}
/* ส่วนสรุป */
		$size = count($this->footer);
		for($i = 0; $i<$size; $i++){
			$footertxt = $this->footer[$i];
			$footerwidth = $this->footer[$i];

			$footer.= "<td width='{$footerwidth}'>{$footertxt}</td>";
		}
		$columncount = count($fields);
			while(@$r = mysqli_fetch_array($result,MYSQLI_ASSOC)){

    			@$id = $r[$this->pr];

				$body.="<tr data-href=".$this->link."&id=".$id.">";

				for($i =0; $i<$columncount; $i++){
    				//ส่วนนี้อาจกระทบทั้งระบบ
    				$body.="<td><center>";
    				if($this->system){
    				if('touristreport'== $this->system){
     				   if($i >=1 && $students <=12){
                         $fieldIndex = $fields[$i];
                         $columntxt = $r[$fieldIndex];
                         $body.= number_format($columntxt);
     				   }
                       else{
                            $fieldIndex = $fields[$i];
                            $columntxt = $r[$fieldIndex];
                            $eng_date=strtotime($columntxt);
                            $thai_date = thai_date($eng_date);
                            $body.= $thai_date;
					   }
				    }

				    //ส่วนหน้าหลัก
				    if('touristreportmain'== $this->system){
     				   if($i >=1 && @$students <=12){
                         $fieldIndex = $fields[$i];
                         $columntxt = $r[$fieldIndex];
                         $body.= number_format($columntxt);
     				   }
                       else{
                            $fieldIndex = $fields[$i];
                            $columntxt = $r[$fieldIndex];
                            $body.= $columntxt;
					   }
				    }
				    }else{
    				    $fieldIndex = $fields[$i];
                            $columntxt = $r[$fieldIndex];
                            $body.= $columntxt;
				    }

				    $body.="</center></td>";
				}
                @$id = $r[$this->pr];
                @$status = $r[$this->sts];
                @$status_hrs = $r[$this->sts_hrs];
                @$status_plan = $r[$this->sts_plan];
			/* ส่วนตรวจสอบค่า */
            @$con = mysqli_connect("localhost","root","","intranet");
			@$sql = "SELECT * FROM problem WHERE problem_id = $id"; //ไว้แก้ เปลี่ยนสเตตัส
			@$sqlhrs = "SELECT * FROM hrctf WHERE hrctf_id = $id"; //ไว้แก้ เปลี่ยนสเตตัส
			@$sqlplan = "SELECT * FROM plan WHERE plan_id = $id"; //ไว้แก้ เปลี่ยนสเตตัส
			@$query= mysqli_query($con,$sql);
			@$queryhrs= mysqli_query($con,$sqlhrs);
			@$queryplan= mysqli_query($con,$sqlplan);
			if(!empty($query)){
			@$rs_c = mysqli_fetch_array($query,MYSQLI_ASSOC);
			}
			if(!empty($queryplan)){
			@$rs_plan = mysqli_fetch_array($queryplan,MYSQLI_ASSOC);
			}
			if(!empty($queryhrs)){
			@$rs_hrs = mysqli_fetch_array($queryhrs,MYSQLI_ASSOC);
			}
			if(@$status){
				 if(@$rs_c["problem_status"]=='Y')
				{
					$this->changestatus ='btn btn-success editok';
					$this->span ='glyphicon glyphicon-ok-sign';
					$this->changetxt = '&nbsp;ดำเนินการแก้ไขแล้ว';
				}
				else if(@$rs_c["problem_status"]=='N')
				{
					$this->changestatus ='btn btn-primary editwait';
					$this->span ='glyphicon glyphicon-info-sign';
					$this->changetxt = '&nbsp;รอการดำเนินการ';
				}
				else if(@$rs_c["problem_status"]=='S')
				{
					$this->changestatus ='btn btn-warning editok';
					$this->span ='glyphicon glyphicon-question-sign';
					$this->changetxt = '&nbsp;กำลังดำเนินการแก้ไข';
				}
			}
			if(@$status_hrs){
				 if(@$rs_hrs["hrctf_status"]=='Y')
				{
					$this->changestatus ='btn btn-success editok';
					$this->span ='glyphicon glyphicon-ok-sign';
					$this->changetxt = '&nbsp;อนุมัติเรียบร้อย';
				}
				else if(@$rs_hrs["hrctf_status"]=='N')
				{
					$this->changestatus ='btn btn-danger editwait';
					$this->span ='glyphicon glyphicon-info-sign';
					$this->changetxt = '&nbsp;ไม่อนุมัติ';
				}
				else if(@$rs_hrs["hrctf_status"]=='W')
				{
					$this->changestatus ='btn btn-primary editwait';
					$this->span ='glyphicon glyphicon-info-sign';
					$this->changetxt = '&nbsp;รับเรื่องและรอการดำเนินการ';
				}
				else if(@$rs_hrs["hrctf_status"]=='S')
				{
					$this->changestatus ='btn btn-light editok waitbox ';
					$this->span ='glyphicon glyphicon-question-sign';
					$this->changetxt = '&nbsp;ดำเนินการขอหนังสือรับรองแล้ว';
				}
			}
			if(@$status_plan){
				 if(@$rs_plan["plan_status"]=='1')
				{
					$this->changestatus ='btn btn-success editok';
					$this->span ='glyphicon glyphicon-ok-sign';
					$this->changetxt = '&nbsp;ใช้งาน';
				}
				else if(@$rs_plan["plan_status"]=='0')
				{
					$this->changestatus ='btn btn-danger editwait';
					$this->span ='glyphicon glyphicon-info-sign';
					$this->changetxt = '&nbsp;ไม่ใช้งาน';
				}
			}


			if($this->view !=""){
				$body .="
				<td>
				<button type='button' class='btn btn-info editdetial' data-toggle='modal' data-target='#Modal' data-whatever='{$id}'><div class='edittext'>{$this->viewtxt}</div></button></td>";
			}
/* 				add delete */
			if($this->delete !=""){
				$body.="
					<td>
						<a href='{$this->delete}?id={$id}' class='btn btn-danger deletebox' OnClick='return chkdel();' >{$this->deletetxt}</a>
					</td>";
			}
/* 				add edit */
			if($this->edit !=""){

				$body .="
				<td>
					<a href='{$this->edit}&id={$id}'class='btn btn-warning editbox'><div class='edittext'>{$this->edittxt}</div></a>
				</td>";
			}
			if($this->change !=""){

				$body .="
				<td>
					<a href='{$this->change}?id={$id}&&status={$status}'class='{$this->changestatus}'><span class='{$this->span}'></span>{$this->changetxt}</a>
				</td>";
			}



				$body.="</td>";
			}
			$html = "
				<table id='{$this->name}' class='table table-hover table-striped table-bordered edittable tablefp' border='0' border=collapse: collapse;' style='width:100%'>
					<thead class='headrow'>";
// 					ตัวแก้ไข
					if($this->special == 1){
    					$html .="
                        <tr>
    					    <td rowspan='3' width='16%' style='padding: 80 8 0 8;'><b><center>วันเดือนปี</center</b></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 30 8 0 8;'><b><center>ผู้ใหญ่</center</b></td>
							<td rowspan='2' colspan='3' width='12%' style='padding: 30 8 0 8;'><b><center>เด็ก/นักเรียน(อนุบาล-ปวช.)</b></center></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 20 8 0 8;'><b><center><b><center>นักศึกษา/ครู/ทหาร/ตำรวจ</b></center></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 20 8 0 8;'><b><center>นักท่องเที่ยวต่างชาติ</b></center></td>
							<td rowspan='2' colspan='2' width='8%'style='padding: 20 8 0 8;'><b><center>โครงการพิเศษ</b></center></td>
							<td colspan='6' width='24%' style='border-right-width:0px;'><b><center>ไนท์ซาฟารี</b></center></td>
							<td rowspan='3' width='4%' style='border-left-width:1px; padding: 80 30 0 30;'><b><center>เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='4%' style='padding: 50 8 0 8;'><b><center>ยกเว้น/หมู่คณะไม่เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='4%' style='padding: 80 30 0 30;'><b><center>รวมทั้งสิ้น</b></center></td>
							<td rowspan='3' width='4%' style='padding: 80 30 0 30;'><b><center>#</center</b></td>
    					</tr>
    					<tr>
    				        <td colspan='2' width='8%'><b><center>ผู้ใหญ่</b></center></td>
                            <td colspan='2' width='8%'><b><center>เด็ก</b></center></td>
                            <td colspan='2' width='8%'><b><center>ชาวต่างชาติ</b></center></td>

    					</tr>";
					}else if($this->special == 2){
    					$html .="
    					<tr>
    					    <td rowspan='3' width='6%' style='padding: 80 8 0 8;'><b><center>สวนสัตว์</center</b></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 25 8 0 8;'><b><center>ผู้ใหญ่</center</b></td>
							<td rowspan='2' colspan='3' width='12%' style='padding: 25 8 0 8;'><b><center>เด็ก/นักเรียน(อนุบาล-ปวช.)</b></center></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 18 8 0 8;'><b><center><b><center>นักศึกษา/ครู/ทหาร/ตำรวจ</b></center></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 18 8 0 8;'><b><center>นักท่องเที่ยวต่างชาติ</b></center></td>
							<td rowspan='2' colspan='2' width='8%'style='padding: 25 8 0 8;'><b><center>โครงการพิเศษ</b></center></td>
							<td colspan='6' width='24%' style='border-right-width:0px;'><b><center>ไนท์ซาฟารี</b></center></td>
							<td rowspan='3' width='6%' style='border-left-width:1px; padding: 80 16 0 16;'><b><center>เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='6%' style='padding: 65 8 0 8;'><b><center>ยกเว้น/หมู่คณะไม่เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='7%' style='padding: 80 30 0 30;'><b><center>รวมทั้งสิ้น</b></center></td>
    					</tr>
    					<tr>
    					<td colspan='2' width='8%'><b><center>ผู้ใหญ่</b></center></td>
    					<td colspan='2' width='8%'><b><center>เด็ก</b></center></td>
    					<td colspan='2' width='8%'><b><center>ชาวต่างชาติ</b></center></td>
    					</tr>";
                        }else if($this->special == 3){
                            $html .="
    					<tr>
    					    <td rowspan='2' width='10%' style='padding: 50 8 0 8;'><b><center>ปัญหา</center</b></td>
							<td rowspan='1' colspan='3' width='8%' style='padding: 8 8 0 8;'><b><center>ผู้อำนวยการสวนสัตว์<br>ผู้ช่วยผู้อำนวยการสวนสัตว์</center</b></td>
							<td rowspan='1' colspan='3' width='8%' style='padding: 8 8 0 8;'><b><center>ฝ่ายบริหารงานทั่วไป</b></center></td>
							<td rowspan='1' colspan='3' width='8%' style='padding: 8 8 0 8;'><b><center><b><center>ฝ่ายพัฒนาธุรกิจและประชาสัมพันธ์</b></center></td>
							<td rowspan='1' colspan='3' width='8%' style='padding: 8 8 0 8;'><b><center>ฝ่ายการศึกษา</b></center></td>
							<td rowspan='1' colspan='3' width='8%' style='padding: 8 8 0 8;'><b><center>ฝ่ายบำรุงสัตว์</b></center></td>
							<td rowspan='1' colspan='3' width='8%' style='padding: 8 8 0 8;'><b><center>ฝ่ายพัฒนาสวนสัตว์</b></center></td>
							<td rowspan='1' colspan='3' width='8%'style='padding: 8 8 0 8;'><b><center>ฝ่ายอนุรักษ์ วิจัยและสุขภาพสัตว์</b></center></td
    					</tr>";
                            }else if($this->special == 4){
                            //ver.2
                            $html .="
    					<tr>
    					    <td rowspan='3' width='6%' style='padding: 80 8 0 8;'><b><center>สวนสัตว์</center</b></td>
							<td rowspan='2' colspan='3' width='8%' style='padding: 25 8 0 8;'><b><center>ผู้ใหญ่</center</b></td>
							<td rowspan='2' colspan='4' width='12%' style='padding: 25 8 0 8;'><b><center>เด็ก/นักเรียน(อนุบาล-ปวช.)</b></center></td>
							<td rowspan='3' colspan='1' width='8%'style='padding: 25 8 0 8;'><b><center>โครงการทัวร์สวนสัตว์</b></center></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 18 8 0 8;'><b><center><b><center>นักศึกษา/ครู/ทหาร/ตำรวจ</b></center></td>
							<td rowspan='1' colspan='6' width='8%' style='padding: 18 8 0 8;'><b><center>นักท่องเที่ยวต่างชาติ</b></center></td>

							<td rowspan='2' colspan='2' width='8%' style='border-right-width:0px;'><b><center>ผู้เข้าชมไนท์ซาฟารี</b></center></td>
							<td rowspan='3' width='6%' style='border-left-width:1px; padding: 80 16 0 16;'><b><center>เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='6%' style='padding: 65 8 0 8;'><b><center>ยกเว้น/หมู่คณะไม่เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='7%' style='padding: 80 30 0 30;'><b><center>รวมทั้งสิ้น</b></center></td>
    					</tr>
    					<tr>
    					<td colspan='3' width='8%'><b><center>ผู้ใหญ่</b></center></td>
    					<td colspan='3' width='8%'><b><center>เด็ก</b></center></td>
    					</tr>";
                            }else if($this->special == 5){
    					$html .="
                        <tr>
    					    <td rowspan='3' width='4%' style='padding: 80 8 0 8;'><b><center>วันเดือนปี</center</b></td>
							<td rowspan='2' colspan='3' width='12%' style='padding: 25 8 0 8;'><b><center>ผู้ใหญ่</center</b></td>
							<td rowspan='2' colspan='4' width='16%' style='padding: 25 8 0 8;'><b><center>เด็ก/นักเรียน(อนุบาล-ปวช.)</b></center></td>
							<td rowspan='3' colspan='1' width='4%'style='padding: 25 8 0 8;'><b><center>โครงการทัวร์สวนสัตว์</b></center></td>
							<td rowspan='2' colspan='2' width='8%' style='padding: 18 8 0 8;'><b><center><b><center>นักศึกษา/ครู/ทหาร/ตำรวจ</b></center></td>
							<td rowspan='1' colspan='6' width='12%' style='padding: 18 8 0 8;'><b><center>นักท่องเที่ยวต่างชาติ</b></center></td>

							<td rowspan='2' colspan='2' width='12%' style='border-right-width:0px;'><b><center>ผู้เข้าชมไนท์ซาฟารี</b></center></td>
							<td rowspan='3' width='8%' style='border-left-width:1px; padding: 80 16 0 16;'><b><center>เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='4%' style='padding: 65 8 0 8;'><b><center>ยกเว้น/หมู่คณะไม่เสียค่าบัตร</b></center></td>
							<td rowspan='3' width='4%' style='padding: 80 16 0 16;'><b><center>รวมทั้งสิ้น</b></center></td>
							<td rowspan='3' width='8%' style='padding: 80 25 0 25;'><b><center>#</b></center></td>
    					</tr>
    					<tr>
    					<td colspan='3' width='8%'><b><center>ผู้ใหญ่</b></center></td>
    					<td colspan='3' width='8%'><b><center>เด็ก</b></center></td>
    					</tr>";
    					}
						$html .="<tr>
							{$header}
						</tr>
					</thead>
					<tbody class='sizerow'>
						{$body}
					</tbody>
                    <tfoot class='footerrow'>
                        <tr>
                        {$footer}
                        </tr>
                    </tfoot>
				</table>";
				echo $html;
	}
}
?>
