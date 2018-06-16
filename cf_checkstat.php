<?php
	error_reporting(0);
	include 'database/db_tools.php';
	include 'connect.php';
	$eventconfer_statuszpow = $_POST['eventconfer_statusw'];
	$eventconfer_statuszpoy = $_POST['eventconfer_statusy'];
	$eventconfer_statuszpon = $_POST['eventconfer_statusn'];
	$eventconfer_statuszpoc = $_POST['eventconfer_statusc'];
	$eventconfer_statusonlinew = $_POST['eventconfer_statusonlinew'];
	$eventconfer_statusonliney = $_POST['eventconfer_statusonliney'];
	$eventconfer_statusonlinen = $_POST['eventconfer_statusonlinen'];
	$eventconfer_statusonlinec = $_POST['eventconfer_statusonlinec'];
	$eventconfer_statusdusitw =$_POST['eventconfer_statusdusitw'];
	$eventconfer_statusdusity =$_POST['eventconfer_statusdusity'];
	$eventconfer_statusdusitn =$_POST['eventconfer_statusdusitn'];
	$eventconfer_statusdusitc =$_POST['eventconfer_statusdusitc'];
	$eventconfer_statusdusitonlinew =$_POST['eventconfer_statusdusitonlinew'];
	$eventconfer_statusdusitonliney =$_POST['eventconfer_statusdusitonliney'];
	$eventconfer_statusdusitonlinen =$_POST['eventconfer_statusdusitonlinen'];
	$eventconfer_statusdusitonlinec =$_POST['eventconfer_statusdusitonlinec'];
	$eventconfer_statuskhaokeaww =$_POST['eventconfer_statuskhaokeaww'];
	$eventconfer_statuskhaokeawy =$_POST['eventconfer_statuskhaokeawy'];
	$eventconfer_statuskhaokeawn =$_POST['eventconfer_statuskhaokeawn'];
	$eventconfer_statuskhaokeawc =$_POST['eventconfer_statuskhaokeawc'];
	$eventconfer_statuskhaokeawonlinew =$_POST['eventconfer_statuskhaokeawonlinew'];
	$eventconfer_statuskhaokeawonliney =$_POST['eventconfer_statuskhaokeawonliney'];
	$eventconfer_statuskhaokeawonlinen =$_POST['eventconfer_statuskhaokeawonlinen'];
	$eventconfer_statuskhaokeawonlinec =$_POST['eventconfer_statuskhaokeawonlinec'];
	$eventconfer_statuschangmaiw =$_POST['eventconfer_statuschangmaiw'];
	$eventconfer_statuschangmaiy =$_POST['eventconfer_statuschangmaiy'];
	$eventconfer_statuschangmain =$_POST['eventconfer_statuschangmain'];
	$eventconfer_statuschangmaic =$_POST['eventconfer_statuschangmaic'];
	$eventconfer_statuschangmaionlinew = $_POST['eventconfer_statuschangmaionlinew'];
	$eventconfer_statuschangmaionliney = $_POST['eventconfer_statuschangmaionliney'];
	$eventconfer_statuschangmaionlinen = $_POST['eventconfer_statuschangmaionlinen'];
	$eventconfer_statuschangmaionlinec = $_POST['eventconfer_statuschangmaionlinec'];
	$eventconfer_statuskoratw =$_POST['eventconfer_statuskoratw'];
	$eventconfer_statuskoraty =$_POST['eventconfer_statuskoraty'];
	$eventconfer_statuskoratn =$_POST['eventconfer_statuskoratn'];
	$eventconfer_statuskoratc =$_POST['eventconfer_statuskoratc'];
	$eventconfer_statuskoratonlinew = $_POST['eventconfer_statuskoratonlinew'];
	$eventconfer_statuskoratonliney = $_POST['eventconfer_statuskoratonliney'];
	$eventconfer_statuskoratonlinen = $_POST['eventconfer_statuskoratonlinen'];
	$eventconfer_statuskoratonlinec = $_POST['eventconfer_statuskoratonlinec'];
	$eventconfer_statussongkhlaw =$_POST['eventconfer_statussongkhlaw'];
	$eventconfer_statussongkhlay =$_POST['eventconfer_statussongkhlay'];
	$eventconfer_statussongkhlan =$_POST['eventconfer_statussongkhlan'];
	$eventconfer_statussongkhlac =$_POST['eventconfer_statussongkhlac'];
	$eventconfer_statussongkhlaonlinew = $_POST['eventconfer_statussongkhlaonlinew'];
	$eventconfer_statussongkhlaonliney = $_POST['eventconfer_statussongkhlaonliney'];
	$eventconfer_statussongkhlaonlinen = $_POST['eventconfer_statussongkhlaonlinen'];
	$eventconfer_statussongkhlaonlinec = $_POST['eventconfer_statussongkhlaonlinec'];
	$eventconfer_statusubonw =$_POST['eventconfer_statusubonw'];
	$eventconfer_statusubony =$_POST['eventconfer_statusubony'];
	$eventconfer_statusubonn =$_POST['eventconfer_statusubonn'];
	$eventconfer_statusubonc =$_POST['eventconfer_statusubonc'];
	$eventconfer_statusubononlinew = $_POST['eventconfer_statusubononlinew'];
	$eventconfer_statusubononliney = $_POST['eventconfer_statusubononliney'];
	$eventconfer_statusubononlinen = $_POST['eventconfer_statusubononlinen'];
	$eventconfer_statusubononlinec = $_POST['eventconfer_statusubononlinec'];
	$eventconfer_statuskhonekaenw =$_POST['eventconfer_statuskhonekaenw'];
	$eventconfer_statuskhonekaeny =$_POST['eventconfer_statuskhonekaeny'];
	$eventconfer_statuskhonekaenn =$_POST['eventconfer_statuskhonekaenn'];
	$eventconfer_statuskhonekaenc =$_POST['eventconfer_statuskhonekaenc'];
	$eventconfer_statuskhonekaenonlinew = $_POST['eventconfer_statuskhonekaenonlinew'];
	$eventconfer_statuskhonekaenonliney = $_POST['eventconfer_statuskhonekaenonliney'];
	$eventconfer_statuskhonekaenonlinen = $_POST['eventconfer_statuskhonekaenonlinen'];
	$eventconfer_statuskhonekaenonlinec = $_POST['eventconfer_statuskhonekaenonlinec'];

	if($eventconfer_statuszpow == 'W'){
	 $rszpowait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszposhow = mysqli_fetch_array($rszpowait,MYSQLI_NUM)){
	 print_r($rszposhow[0]);};
	}
	elseif($eventconfer_statuszpoy == 'Y'){
	 $rszpopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszposhow2 = mysqli_fetch_array($rszpopass,MYSQLI_NUM)){
	 print_r($rszposhow2[0]);};
	}
	elseif($eventconfer_statuszpon == 'N'){
	 $rszponopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszposhow3 = mysqli_fetch_array($rszponopass,MYSQLI_NUM)){
	 print_r($rszposhow3[0]);};
	}
	elseif($eventconfer_statuszpoc == 'C'){
	 $rszpocancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszposhow4 = mysqli_fetch_array($rszpocancel,MYSQLI_NUM)){
	 print_r($rszposhow4[0]);};
	}
	elseif($eventconfer_statusonlinew == 'W'){
	 $rszpoonlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszpoonlinewaitshow = mysqli_fetch_array($rszpoonlinewait,MYSQLI_NUM)){
	 print_r($rszpoonlinewaitshow[0]);};
	}
	elseif($eventconfer_statusonliney == 'Y'){
		$rszpoonlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszpoonlinepassshow = mysqli_fetch_array($rszpoonlinepass,MYSQLI_NUM)){
	 print_r($rszpoonlinepassshow[0]);};
	}
	elseif($eventconfer_statusonlinen == 'N'){
	   $rszpoonlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszpoonlinenopassshow = mysqli_fetch_array($rszpoonlinenopass,MYSQLI_NUM)){
	 print_r($rszpoonlinenopassshow[0]);};
	}
	elseif($eventconfer_statusonlinec == 'C'){
	   $rszpoonlinecancel = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',3)->execute();
	 while ($rszpoonlinecancelshow = mysqli_fetch_array($rszpoonlinecancel,MYSQLI_NUM)){
	 print_r($rszpoonlinecancelshow[0]);};
	}

	//สวนสัตว์ดุสิต
	elseif($eventconfer_statusdusitw == 'W'){
	 $rsdusitwait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',11)->execute();
	 while ($showdusitwait = mysqli_fetch_array($rsdusitwait,MYSQLI_NUM)){
	 print_r($showdusitwait[0]);};
	}
	elseif($eventconfer_statusdusity == 'Y'){
	$rsdusitpass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitpassshow = mysqli_fetch_array($rsdusitpass,MYSQLI_NUM)){
	 print_r($rsdusitpassshow[0]);};
	}
	elseif($eventconfer_statusdusitn == 'N'){
    $rsdusitnopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitnopassshow = mysqli_fetch_array($rsdusitnopass,MYSQLI_NUM)){
	 print_r($rsdusitnopassshow[0]);};
	}
	elseif($eventconfer_statusdusitc == 'C'){
    $rsdusitcancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitcancelshow = mysqli_fetch_array($rsdusitcancel,MYSQLI_NUM)){
	 print_r($rsdusitcancelshow[0]);};
	}
	elseif($eventconfer_statusdusitonlinew == 'W'){
	 $rsdusitonlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitonlinewaitshow = mysqli_fetch_array($rsdusitonlinewait,MYSQLI_NUM)){
	 print_r($rsdusitonlinewaitshow[0]);};
	}
	elseif($eventconfer_statusdusitonliney == 'Y'){
	 $rsdusitonlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitonlinepassshow = mysqli_fetch_array($rsdusitonlinepass,MYSQLI_NUM)){
	 print_r($rsdusitonlinepassshow[0]);};
	}
	elseif($eventconfer_statusdusitonlinen == 'N'){
    $rsdusitonlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitonlinenopassshow = mysqli_fetch_array($rsdusitonlinenopass,MYSQLI_NUM)){
	 print_r($rsdusitonlinenopassshow[0]);};
	}
	elseif($eventconfer_statusdusitonlinec == 'C'){
    $rsdusitonlinecancel = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',11)->execute();
	 while ($rsdusitonlinecancelshow = mysqli_fetch_array($rsdusitonlinecancel,MYSQLI_NUM)){
	 print_r($rsdusitonlinecancelshow[0]);};
	}

	// สวนสัตว์เขาเขียว
	elseif($eventconfer_statuskhaokeaww == 'W'){
	 $rskhaokeawwait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',12)->execute();
	 while ($showkhaokeawwait = mysqli_fetch_array($rskhaokeawwait,MYSQLI_NUM)){
	 print_r($showkhaokeawwait[0]);};
	}
	elseif($eventconfer_statuskhaokeawy == 'Y'){
	 $rskhaokeawpass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',12)->execute();
	 while ($rskhaokeawpassshow = mysqli_fetch_array($rskhaokeawpass,MYSQLI_NUM)){
	 print_r($rskhaokeawpassshow[0]);};
	}
	elseif($eventconfer_statuskhaokeawn == 'N'){
     $rskhaokeawnopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',12)->execute();
	 while ($rskhaokeawnopassshow = mysqli_fetch_array($rskhaokeawnopass,MYSQLI_NUM)){
	 print_r($rskhaokeawnopassshow[0]);};
	}
	elseif($eventconfer_statuskhaokeawc == 'C'){
     $rskhaokeawcancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',12)->execute();
	 while ($rskhaokeawcancelshow = mysqli_fetch_array($rskhaokeawcancel,MYSQLI_NUM)){
	 print_r($rskhaokeawcancelshow[0]);};
	}
	elseif($eventconfer_statuskhaokeawonlinew == 'W'){
	 $rskhaokeawonlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',12)->execute();
	 while ($showkhaokeawonlinewait = mysqli_fetch_array($rskhaokeawonlinewait,MYSQLI_NUM)){
	 print_r($showkhaokeawonlinewait[0]);};
	}
	elseif($eventconfer_statuskhaokeawonliney == 'Y'){
	 $rskhaokeawonlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',12)->execute();
	 while ($rskhaokeawonlinepassshow = mysqli_fetch_array($rskhaokeawonlinepass,MYSQLI_NUM)){
	 print_r($rskhaokeawonlinepassshow[0]);};
	}
	elseif($eventconfer_statuskhaokeawonlinen == 'N'){
     $rskhaokeawonlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',12)->execute();
	 while ($rskhaokeawonlinenopassshow = mysqli_fetch_array($rskhaokeawonlinenopass,MYSQLI_NUM)){
	 print_r($rskhaokeawonlinenopassshow[0]);};
	}
	elseif($eventconfer_statuskhaokeawonlinec == 'C'){
     $rskhaokeawonlinecancel = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',12)->execute();
	 while ($rskhaokeawonlinecancelshow = mysqli_fetch_array($rskhaokeawonlinecancel,MYSQLI_NUM)){
	 print_r($rskhaokeawonlinecancelshow[0]);};
	}

// สวนสัตว์เชียงใหม่
	elseif($eventconfer_statuschangmaiw == 'W'){
	 $rschiangmaiwait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',13)->execute();
	 while ($showchangmaiwait = mysqli_fetch_array($rschiangmaiwait,MYSQLI_NUM)){
	 print_r($showchangmaiwait[0]);};
	}
	elseif($eventconfer_statuschangmaiy == 'Y'){
	 $rschiangmaipass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',13)->execute();
	 while ($rschangmaipassshow = mysqli_fetch_array($rschiangmaipass,MYSQLI_NUM)){
	 print_r($rschangmaipassshow[0]);};
	}
	elseif($eventconfer_statuschangmain == 'N'){
     $rschiangmainopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',13)->execute();
	 while ($rschangmainopassshow = mysqli_fetch_array($rschiangmainopass,MYSQLI_NUM)){
	 print_r($rschangmainopassshow[0]);};
	}
	elseif($eventconfer_statuschangmaic == 'C'){
     $rschangmaicancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',13)->execute();
	 while ($rschangmaicancelshow = mysqli_fetch_array($rschangmaicancel,MYSQLI_NUM)){
	 print_r($rschangmaicancelshow[0]);};
	}
	elseif($eventconfer_statuschangmaionlinew == 'W'){
	 $rschiangmaionlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',13)->execute();
	 while ($showchangmaionlinewait = mysqli_fetch_array($rschiangmaionlinewait,MYSQLI_NUM)){
	 print_r($showchangmaionlinewait[0]);};
	}
	elseif($eventconfer_statuschangmaionliney == 'Y'){
	 $rschiangmaionlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',13)->execute();
	 while ($rschangmaionlinepassshow = mysqli_fetch_array($rschiangmaionlinepass,MYSQLI_NUM)){
	 print_r($rschangmaionlinepassshow[0]);};
	}
	elseif($eventconfer_statuschangmaionlinen == 'N'){
     $rschiangmaionlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',13)->execute();
	 while ($rschangmaionlinenopassshow = mysqli_fetch_array($rschiangmaionlinenopass,MYSQLI_NUM)){
	 print_r($rschangmaionlinenopassshow[0]);};
	}
	elseif($eventconfer_statuschangmaionlinec == 'C'){
     $rschiangmaionlinecancel = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',13)->execute();
	 while ($rschiangmaionlinecancelshow = mysqli_fetch_array($rschiangmaionlinecancel,MYSQLI_NUM)){
	 print_r($rschiangmaionlinecancelshow[0]);};
	}
//สวนสัตว์โคราช
	elseif($eventconfer_statuskoratw == 'W'){
	 $rskoratwait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',14)->execute();
	 while ($showkoratwait = mysqli_fetch_array($rskoratwait,MYSQLI_NUM)){
	 print_r($showkoratwait[0]);};
	}
	elseif($eventconfer_statuskoraty == 'Y'){
	 $rskoratpass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',14)->execute();
	 while ($rskoratpassshow = mysqli_fetch_array($rskoratpass,MYSQLI_NUM)){
	 print_r($rskoratpassshow[0]);};
	}
	elseif($eventconfer_statuskoratn == 'N'){
     $rskoratnopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',14)->execute();
	 while ($rskoratnopassshow = mysqli_fetch_array($rskoratnopass,MYSQLI_NUM)){
	 print_r($rskoratnopassshow[0]);};
	}
	elseif($eventconfer_statuskoratc == 'C'){
     $rskoratcancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_vdocon','1','conferroom.zoo_zoo_id',14)->execute();
	 while ($rskoratcancelshow = mysqli_fetch_array($rskoratcancel,MYSQLI_NUM)){
	 print_r($rskoratcancelshow[0]);};
	}
	elseif($eventconfer_statuskoratonlinew == 'W'){
	 $rskoratonlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',14)->execute();
	 while ($showkoratonlinewait = mysqli_fetch_array($rskoratonlinewait,MYSQLI_NUM)){
	 print_r($showkoratonlinewait[0]);};
	}
	elseif($eventconfer_statuskoratonliney == 'Y'){
	 $rskoratonlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',14)->execute();
	 while ($rskoratonlinepassshow = mysqli_fetch_array($rskoratonlinepass,MYSQLI_NUM)){
	 print_r($rskoratonlinepassshow[0]);};
	}
	elseif($eventconfer_statuskoratonlinen == 'N'){
     $rskoratonlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',14)->execute();
	 while ($rskoratonlinenopassshow = mysqli_fetch_array($rskoratonlinenopass,MYSQLI_NUM)){
	 print_r($rskoratonlinenopassshow[0]);};
	}
	elseif($eventconfer_statuskoratonlinec == 'C'){
     $rskoratonlinecancel = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',14)->execute();
	 while ($rskoratonlinecancelshow = mysqli_fetch_array($rskoratonlinecancel,MYSQLI_NUM)){
	 print_r($rskoratonlinecancelshow[0]);};
	}

// สวนสัตว์สงขลา
	elseif($eventconfer_statussongkhlaw == 'W'){
	 $rssongkhlawait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',15)->execute();
	 while ($showsongkhlawait = mysqli_fetch_array($rssongkhlawait,MYSQLI_NUM)){
	 print_r($showsongkhlawait[0]);};
	}
	elseif($eventconfer_statussongkhlay == 'Y'){
	 $rssongkhlapass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',15)->execute();
	 while ($rssongkhlapassshow = mysqli_fetch_array($rssongkhlapass,MYSQLI_NUM)){
	 print_r($rssongkhlapassshow[0]);};
	}
	elseif($eventconfer_statussongkhlan == 'N'){
     $rssongkhlanopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',15)->execute();
	 while ($rssongkhlanopassshow = mysqli_fetch_array($rssongkhlanopass,MYSQLI_NUM)){
	 print_r($rssongkhlanopassshow[0]);};
	}
	elseif($eventconfer_statussongkhlac == 'C'){
     $rssongkhlacancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',15)->execute();
	 while ($rssongkhlacancelshow = mysqli_fetch_array($rssongkhlacancel,MYSQLI_NUM)){
	 print_r($rssongkhlacancelshow[0]);};
	}
	elseif($eventconfer_statussongkhlaonlinew == 'W'){
	 $rssongkhlaonlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',15)->execute();
	 while ($showsongkhlaonlinewait = mysqli_fetch_array($rssongkhlaonlinewait,MYSQLI_NUM)){
	 print_r($showsongkhlaonlinewait[0]);};
	}
	elseif($eventconfer_statussongkhlaonliney == 'Y'){
	    $rssongkhlaonlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',15)->execute();
	 while ($rssongkhlaonlinepassshow = mysqli_fetch_array($rssongkhlaonlinepass,MYSQLI_NUM)){
	 print_r($rssongkhlaonlinepassshow[0]);};
	}
	elseif($eventconfer_statussongkhlaonlinen == 'N'){
         $rssongkhlaonlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',15)->execute();
	 while ($rssongkhlaonlinenopassshow = mysqli_fetch_array($rssongkhlaonlinenopass,MYSQLI_NUM)){
	 print_r($rssongkhlaonlinenopassshow[0]);};
	}
	elseif($eventconfer_statussongkhlaonlinec == 'C'){
         $rssongkhlacancelonline = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',15)->execute();
	 while ($rssongkhlacancelonlineshow = mysqli_fetch_array($rssongkhlacancelonline,MYSQLI_NUM)){
	 print_r($rssongkhlacancelonlineshow[0]);};
	}

//อุบลราชธานี
elseif($eventconfer_statusubonw == 'W'){
	 $rsubonwait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',16)->execute();
	 while ($showubonwait = mysqli_fetch_array($rsubonwait,MYSQLI_NUM)){
	 print_r($showubonwait[0]);};
	}
	elseif($eventconfer_statusubony == 'Y'){
	 $rsubonpass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',16)->execute();
	 while ($rsubonpassshow = mysqli_fetch_array($rsubonpass,MYSQLI_NUM)){
	 print_r($rsubonpassshow[0]);};
	}
	elseif($eventconfer_statusubonn == 'N'){
     $rsubonnopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',16)->execute();
	 while ($rsubonnopassshow = mysqli_fetch_array($rsubonnopass,MYSQLI_NUM)){
	 print_r($rsubonnopassshow[0]);};
	}
   elseif($eventconfer_statusubonc == 'C'){
     $rsuboncancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',16)->execute();
	 while ($rsuboncancelshow = mysqli_fetch_array($rsuboncancel,MYSQLI_NUM)){
	 print_r($rsuboncancelshow[0]);};
	}
	elseif($eventconfer_statusubononlinew == 'W'){
	 $rsubononlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',16)->execute();
	 while ($showubononlinewait = mysqli_fetch_array($rsubononlinewait,MYSQLI_NUM)){
	 print_r($showubononlinewait[0]);};
	}
	elseif($eventconfer_statusubononliney == 'Y'){
	     $rsubononlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',16)->execute();
	 while ($rsubononlinepassshow = mysqli_fetch_array($rsubononlinepass,MYSQLI_NUM)){
	 print_r($rsubononlinepassshow[0]);};
	}
	elseif($eventconfer_statusubononlinen == 'N'){
         $rsubononlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',16)->execute();
	 while ($rsubononlinenopassshow = mysqli_fetch_array($rsubononlinenopass,MYSQLI_NUM)){
	 print_r($rsubononlinenopassshow[0]);};
	}
	elseif($eventconfer_statusubononlinec == 'C'){
         $rsuboncancelonline = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',16)->execute();
	 while ($rsuboncancelonlineshow = mysqli_fetch_array($rsuboncancelonline,MYSQLI_NUM)){
	 print_r($rsuboncancelonlineshow[0]);};
	}
//สวนสัตว์ขอนแก่น
elseif($eventconfer_statuskhonekaenw == 'W'){
	 $rskhonekaenwait = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'W'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',17)->execute();
	 while ($showkhonekaenwait = mysqli_fetch_array($rskhonekaenwait,MYSQLI_NUM)){
	 print_r($showkhonekaenwait[0]);};
	}
	elseif($eventconfer_statuskhonekaeny == 'Y'){
	 $rskhonekaenpass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'Y'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',17)->execute();
	 while ($rskhonekaenpassshow = mysqli_fetch_array($rskhonekaenpass,MYSQLI_NUM)){
	 print_r($rskhonekaenpassshow[0]);};
	}
	elseif($eventconfer_statuskhonekaenn == 'N'){
     $rskhonekaennopass = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'N'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',17)->execute();
	 while ($rskhonekaennopassshow = mysqli_fetch_array($rskhonekaennopass,MYSQLI_NUM)){
	 print_r($rskhonekaennopassshow[0]);};
	}
	 elseif($eventconfer_statuskhonekaenc == 'C'){
     $rskhonekaencancel = $db->countTable23('eventconfer','conferroom','eventconfer_status',"'C'",'confer_confer_id','conferroom.confer_id','conferroom.zoo_zoo_id',17)->execute();
	 while ($rskhonekaencancelshow = mysqli_fetch_array($rskhonekaencancel,MYSQLI_NUM)){
	 print_r($rskhonekaencancelshow[0]);};
	}
	elseif($eventconfer_statuskhonekaenonlinew == 'W'){
	 $rskhonekaenonlinewait = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'W'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',17)->execute();
	 while ($showkhonekaenonlinewait = mysqli_fetch_array($rskhonekaenonlinewait,MYSQLI_NUM)){
	 print_r($showkhonekaenonlinewait[0]);};
	}
	elseif($eventconfer_statuskhonekaenonliney == 'Y'){
	     $rskhonekaenonlinepass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'Y'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',17)->execute();
	 while ($rskhonekaenonlinepassshow = mysqli_fetch_array($rskhonekaenonlinepass,MYSQLI_NUM)){
	 print_r($rskhonekaenonlinepassshow[0]);};
	}
	elseif($eventconfer_statuskhonekaenonlinen == 'N'){
         $rskhonekaenonlinenopass = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'N'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',17)->execute();
	 while ($rskhonekaenonlinenopassshow = mysqli_fetch_array($rskhonekaenonlinenopass,MYSQLI_NUM)){
	 print_r($rskhonekaenonlinenopassshow[0]);};
	}
	elseif($eventconfer_statuskhonekaenonlinec == 'C'){
         $rskhonekaencancelonline = $db->countTable25('eventconfer','conferroom','eventconfer_status',"'Y'",'eventconfer_status_online',"'C'",'confer_confer_id','conferroom.confer_id','eventconfer_status_conferonline','1','conferroom.zoo_zoo_id',17)->execute();
	 while ($rskhonekaencancelonlineshow = mysqli_fetch_array($rskhonekaencancelonline,MYSQLI_NUM)){
	 print_r($rskhonekaencancelonlineshow[0]);};
	}



?>
