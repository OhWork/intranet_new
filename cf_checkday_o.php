<?php

	$link = mysqli_connect("localhost", "root", "root", "intranet");

	$datestart = isset($_POST['datestart']) ? trim($_POST['datestart']) : "";
  	$dateend = isset($_POST['dateend']) ? trim($_POST['dateend']) : "";
  	$conferroom_id = $_POST['conferid'];
//  	$status_event =$_POST['status_event'];
// 	$sql ="SELECT * FROM eventconfer WHERE eventconfer_start >= '$datestart' AND  eventconfer_end <= '$dateend'";
	$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_confer_id = '$conferroom_id' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

?>
