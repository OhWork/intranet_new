<?php

    include 'database/db_tools.php';
	include 'connect.php';

	$datestart = isset($_POST['datestart']) ? trim($_POST['datestart']) : "";
  	$dateend = isset($_POST['dateend']) ? trim($_POST['dateend']) : "";
  	$confer_id = $_POST['conferid'];
	$rs = $db->specifytable('*','eventconfer',"((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_confer_id = '$confer_id' AND eventconfer_status  = 'Y'")->execute();

	foreach($rs as $b){
		if($b['eventconfer_end'] == $datestart){
			echo 0;
		}
		else{
			echo mysqli_num_rows($rs);
		}
	}
?>
