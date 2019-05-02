<?php

	$link = mysqli_connect("localhost", "root", "root", "intranet");

	$datestart = isset($_POST['datestart']) ? trim($_POST['datestart']) : "";
  	$dateend = isset($_POST['dateend']) ? trim($_POST['dateend']) : "";
  	$conferroom_id = $_POST['conferid'];
  	$iszpo = $_POST['iszpo'];
  	$cazpo = $_POST['cazpo'];
  	$fpzpo = $_POST['fpzpo'];
  	$spzpo = $_POST['spzpo'];
  	$lzpo = $_POST['lzpo'];
  	$crzpo = $_POST['crzpo'];
  	$bdzpo = $_POST['bdzpo'];
  	$itzpo = $_POST['itzpo'];
  	$hrzpo = $_POST['hrzpo'];
  	$zmizpo = $_POST['zmizpo'];
  	$dusit = $_POST['dusit'];
  	$khaokeaw = $_POST['khaokeaw'];
  	$changmai = $_POST['changmai'];
  	$korach = $_POST['korach'];
  	$songkhla = $_POST['songkhla'];
  	$ubon = $_POST['ubon'];
  	$khonkean = $_POST['khonkean'];
  	$sr = $_POST['sr'];
// check iszpo
//   	if($iszpo == 1){
	$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_confer_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	echo 'iszpo';
/*
	}
// check cazpo
	elseif($cazpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_confer_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check fpzpo
	elseif($fpzpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_confer_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check spzpo
	elseif($spzpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check crzpo
	elseif($crzpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check bdzpo
	elseif($bdzpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check itzpo
	elseif($itzpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check hrzpo
	elseif($hrzpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check zmizpo
	elseif($zmizpo == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check dusit
	elseif($dusit == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check khaowkeaw
	elseif($khaokeaw == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check Changmai
	elseif($changmai == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check korach
	elseif($korach == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check songkhla
	elseif($songkhla == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check ubon
	elseif($ubon == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
// check khonkean
	elseif($khonkean == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);
	}
// check sr
	elseif($sr == 1){
		$sql = "SELECT * FROM eventconfer WHERE ((eventconfer_start BETWEEN '$datestart' AND '$dateend') OR (eventconfer_end BETWEEN '$datestart' AND '$dateend'))	 AND confer_conferroom_id = '$conferroom_id' AND eventconfer_status_online = '1' AND eventconfer_status  = 'Y'";
	$rs = mysqli_query($link, $sql);

	echo mysqli_num_rows($rs);

	}
*/
?>
