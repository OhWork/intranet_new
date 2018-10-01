<?php
    ob_start();
	include "database/db_tools.php";
	include "connect.php";
    
		if($_GET["status"]=='N')
		{
			$strSQL1 = "UPDATE problem SET problem_status = 'Y' where problem_id = '".$_GET["id"]."' ";
			echo "อนุมัติรายการนี้เรียบร้อยแล้ว !";
			
		}
		else if($_GET["status"]=='Y')
		{
			$strSQL1 = "UPDATE problem SET problem_status = 'N' where problem_id = '".$_GET["id"]."' ";
			echo "เปลี่ยนใจ ยกเลิกการอนุมัติก่อน !";
		}
		else if($_GET["status"]=='S')
		{
			$strSQL1 = "UPDATE problem SET problem_status = 'Y' where problem_id = '".$_GET["id"]."' ";
			echo "เปลี่ยนใจ รายการนี้เปลี่ยนใจจองใหม่อีกครั้ง  !";
		}

		$objQuery1 = mysql_query($strSQL1);
		

	mysql_close();
	if($objQuery1){
    		header('location: admin_index.php?url=admin_cs_index.php&url2=cs_show_fixproblem.php&subpage=1');
		}
?>