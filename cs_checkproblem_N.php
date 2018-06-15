<?php
	error_reporting(0);
	include 'database/db_tools.php';
	include 'connect.php';
$link = mysqli_connect("localhost", "root", "root", "intranet");
$status = $_POST['status'];
$status2 =$_POST['status2'];
$status3 =$_POST['status3'];
$statuszpon = $_POST['statuszpon'];
$statuszpos = $_POST['statuszpos'];
$statuszpoy = $_POST['statuszpoy'];
$statuszpoip = $_POST['statuszpoip'];
$statusdusitn = $_POST['statusdusitn'];
$statusdusits = $_POST['statusdusits'];
$statusdusity = $_POST['statusdusity'];
$statusdusitip = $_POST['statusdusitip'];
$statuskhaokeawn =$_POST['statuskhaokeawn'];
$statuskhaokeaws =$_POST['statuskhaokeaws'];
$statuskhaokeawy =$_POST['statuskhaokeawy'];
$statuskhaokeawip = $_POST['statuskhaokeawip'];
$statuschangmain = $_POST['statuschangmain'];
$statuschangmais = $_POST['statuschangmais'];
$statuschangmaiy = $_POST['statuschangmaiy'];
$statuschangmaiip = $_POST['statuschangmaiip'];
$statuskorachn = $_POST['statuskorachn'];
$statuskorachs = $_POST['statuskorachs'];
$statuskorachy = $_POST['statuskorachy'];
$statuskorachip = $_POST['statuskorachip'];
$statussongkhalan = $_POST['statussongkhalan'];
$statussongkhalas = $_POST['statussongkhalas'];
$statussongkhalay = $_POST['statussongkhalay'];
$statussongkhalaip = $_POST['statussongkhalaip'];
$statusubonn = $_POST['statusubonn'];
$statusubons = $_POST['statusubons'];
$statusubony = $_POST['statusubony'];
$statusubonip = $_POST['statusubonip'];
$statuskhonekaenn = $_POST['statuskhonekaenn'];
$statuskhonekaens = $_POST['statuskhonekaens'];
$statuskhonekaeny = $_POST['statuskhonekaeny'];
$statuskhonekaenip = $_POST['statuskhonekaenip'];
if($status == 'N'){
	$rsAll = $db->countTable('problem','problem_status',"'N'")->execute();
	while ($rsallshow = mysqli_fetch_array($rsAll,MYSQLI_NUM)){
		print_r($rsallshow[0]);
	};
}
elseif($status2 =='S'){
	$rsAll2 = $db->countTable('problem','problem_status',"'S'")->execute();
	while ($rsallshow2 = mysqli_fetch_array($rsAll2,MYSQLI_NUM)){
		print_r($rsallshow2[0]);
	};
}
elseif($status3 =='Y'){
	$rsAll3 = $db->countTable('problem','problem_status',"'Y'")->execute();
	while ($rsallshow3 = mysqli_fetch_array($rsAll3,MYSQLI_NUM)){
		print_r($rsallshow3[0]);
	};
}
elseif($statuszpon =='N'){
	$rszpo = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_type',1)->execute();
	while ($rszposhow = mysqli_fetch_array($rszpo,MYSQLI_NUM)){
		print_r($rszposhow[0]);

	};
}
elseif($statuszpos =='S'){
	$rszpo2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_type',1)->execute();
	while ($rszposhow2 = mysqli_fetch_array($rszpo2,MYSQLI_NUM)){
		print_r($rszposhow2[0]);
	};
}
elseif($statuszpoy =='Y'){
	 $rszpo3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_type',1)->execute();
	 while ($rszposhow3 = mysqli_fetch_array($rszpo3,MYSQLI_NUM)){
		print_r($rszposhow3[0]);
	};
}
elseif($statuszpoip =='IP-[ว่าง]'){
	$ipzpo = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_type',1)->execute();
	while ($rszpoipshow = mysqli_fetch_array($ipzpo,MYSQLI_NUM)){
		print_r($rszpoipshow[0]);
	};
}
elseif($statusdusitn =='N'){
	 $rsdusit = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',11)->execute();
	 while ($rsdusitshow = mysqli_fetch_array($rsdusit,MYSQLI_NUM)){
		print_r($rsdusitshow[0]);
	};
}
elseif($statusdusits =='S'){
	 $rsdusit2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',11)->execute();
	 while ($rsdusitshow2 = mysqli_fetch_array($rsdusit2,MYSQLI_NUM)){
		print_r($rsdusitshow2[0]);
	};
}
elseif($statusdusity =='Y'){
	 $rsdusit3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',11)->execute();
	 while ($rsdusitshow3 = mysqli_fetch_array($rsdusit3,MYSQLI_NUM)){
		print_r($rsdusitshow3[0]);
	};
}
elseif($statusdusitip =='IP-[ว่าง]'){
	 $ipdusit = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',11)->execute();
	 while ($rsdusitshowip = mysqli_fetch_array($ipdusit,MYSQLI_NUM)){
		print_r($rsdusitshowip[0]);
	};
}
elseif($statuskhaokeawn =='N'){
	 $rskhaokeaw = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',12)->execute();
	 while ($rskhaokeawshow = mysqli_fetch_array($rskhaokeaw,MYSQLI_NUM)){
		print_r($rskhaokeawshow[0]);
	};
}
elseif($statuskhaokeaws =='S'){
	  $rskhaokeaw2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',12)->execute();
	 while ($rskhaokeawshow2 = mysqli_fetch_array($rskhaokeaw2,MYSQLI_NUM)){
		print_r($rskhaokeawshow2[0]);
	};
}
elseif($statuskhaokeawy =='Y'){
	  $rskhaokeaw3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',12)->execute();
	 while ($rskhaokeawshow3 = mysqli_fetch_array($rskhaokeaw3,MYSQLI_NUM)){
		print_r($rskhaokeawshow3[0]);
	};
}
elseif($statuskhaokeawip =='IP-[ว่าง]'){
	  $ipkhaokeaw = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',12)->execute();
	 while ($rskhaokeawshowip = mysqli_fetch_array($ipkhaokeaw,MYSQLI_NUM)){
		print_r($rskhaokeawshowip[0]);
	};
}
elseif($statuschangmain =='N'){
	 $rschiangmai = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',13)->execute();
	 while ($rschangmaishown = mysqli_fetch_array($rschiangmai,MYSQLI_NUM)){
		print_r($rschangmaishown[0]);
	};
}
elseif($statuschangmais =='S'){
	 $rschiangmai2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',13)->execute();
	 while ($rschangmaishow2 = mysqli_fetch_array($rschiangmai2,MYSQLI_NUM)){
		print_r($rschangmaishow2[0]);
	};
}
elseif($statuschangmaiy =='Y'){
	 $rschiangmai3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',13)->execute();
	 while ($rschangmaishow3 = mysqli_fetch_array($rschiangmai3,MYSQLI_NUM)){
		print_r($rschangmaishow3[0]);
	};
}
elseif($statuschangmaiip =='IP-[ว่าง]'){
	 $ipchiangmai = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',13)->execute();	 while ($rschangmaiipshow = mysqli_fetch_array($ipchiangmai,MYSQLI_NUM)){
		print_r($rschangmaiipshow[0]);
	};
}
elseif($statuskorachn =='N'){
	 $rskorat = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',14)->execute();
	 while ($rskoratshow = mysqli_fetch_array($rskorat,MYSQLI_NUM)){
		print_r($rskoratshow[0]);
	};
}
elseif($statuskorachs =='S'){
	 $rskorat2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',14)->execute();
	 while ($rskoratshow2 = mysqli_fetch_array($rskorat2,MYSQLI_NUM)){
		print_r($rskoratshow2[0]);
	};
}
elseif($statuskorachy =='Y'){
	 $rskorat3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',14)->execute();
	 while ($rskoratshow3 = mysqli_fetch_array($rskorat3,MYSQLI_NUM)){
		print_r($rskoratshow3[0]);
	};
}
elseif($statuskorachip =='IP-[ว่าง]'){
	 $ipkorat = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',14)->execute();	 while ($rskoratshowip = mysqli_fetch_array($ipkorat,MYSQLI_NUM)){
		print_r($rskoratshowip[0]);
	};
}
elseif($statussongkhalan =='N'){
	 $rssongkhla = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',15)->execute();
	 while ($rssongkhlashow = mysqli_fetch_array($rssongkhla,MYSQLI_NUM)){
		print_r($rssongkhlashow[0]);
	};
}
elseif($statussongkhalas =='S'){
	$rssongkhla2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',15)->execute();
	 while ($rssongkhlashow2 = mysqli_fetch_array($rssongkhla2,MYSQLI_NUM)){
		print_r($rssongkhlashow2[0]);
	};
}
elseif($statussongkhalay =='Y'){
	$rssongkhla3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',15)->execute();
	 while ($rssongkhlashow3 = mysqli_fetch_array($rssongkhla3,MYSQLI_NUM)){
		print_r($rssongkhlashow3[0]);
	};
}
elseif($statussongkhalaip =='IP-[ว่าง]'){
	$ipsongkhla = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',15)->execute();
	 while ($rssongkhlashowip = mysqli_fetch_array($ipsongkhla,MYSQLI_NUM)){
		print_r($rssongkhlashowip[0]);
	};
}
elseif($statusubonn =='N'){
	$rsubon = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',16)->execute();
	 while ($rsubonshow = mysqli_fetch_array($rsubon,MYSQLI_NUM)){
		print_r($rsubonshow[0]);
	};
}
elseif($statusubons =='S'){
	$rsubon2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',16)->execute();
	 while ($rsubonshow2 = mysqli_fetch_array($rsubon2,MYSQLI_NUM)){
		print_r($rsubonshow2[0]);
	};
}
elseif($statusubony =='Y'){
	$rsubon3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',16)->execute();
	 while ($rsubonshow3 = mysqli_fetch_array($rsubon3,MYSQLI_NUM)){
		print_r($rsubonshow3[0]);
	};
}
elseif($statusubonip =='IP-[ว่าง]'){
	 $ipubon = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',16)->execute();
	 while ($rsubonshowip = mysqli_fetch_array($ipubon,MYSQLI_NUM)){
		print_r($rsubonshowip[0]);
	};
}
//
elseif($statuskhonekaenn =='N'){
	 $rskhonekaen = $db->countTable23('problem','zoo','problem_status',"'N'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',17)->execute();
	 	 while ($rskhonekaenshow = mysqli_fetch_array($rskhonekaen,MYSQLI_NUM)){
		print_r($rskhonekaenshow[0]);
	};
}
elseif($statuskhonekaens =='S'){
	$rskhonekaen2 = $db->countTable23('problem','zoo','problem_status',"'S'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',17)->execute();
	while ($rskhonekaenshow2 = mysqli_fetch_array($rskhonekaen2,MYSQLI_NUM)){
		print_r($rskhonekaenshow2[0]);
	};
}
elseif($statuskhonekaeny =='Y'){
	 $rskhonekaen3 = $db->countTable23('problem','zoo','problem_status',"'Y'",'subzoo_zoo_zoo_id','zoo.zoo_id','zoo.zoo_id',17)->execute();
	 while ($rskhonekaenshow3 = mysqli_fetch_array($rskhonekaen3,MYSQLI_NUM)){
		print_r($rskhonekaenshow3[0]);
	};
}
elseif($statuskhonekaenip =='IP-[ว่าง]'){
	 $ipkhonekaen = $db->countTable34('ipzpo','subzoo','zoo','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo_user','"IP-[ว่าง]"','zoo.zoo_id',17)->execute();
	 while ($rskhonekaenshowip = mysqli_fetch_array($ipkhonekaen,MYSQLI_NUM)){
		print_r($rskhonekaenshowip[0]);
	};
}
?>
