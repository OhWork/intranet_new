<?php  ob_start();
 		error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>ระบบจองห้องประชุมออนไลน์</title>
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';

	$datenow = date("Y-m-d");
	$timenow = date("H:i");
	$adddatenow = $datenow."&nbsp;".$timenow;
      if($_POST['subzoo_zoo_zoo_id'] == '' && $_POST['subzoo_zoo_zoo_id'] == 0){
          echo("กรุณาติดต่อเจ้าหน้าที่ไอที Call 1040");
      }else{
        	$rs = $db->insert('eventconfer',array(
        	'eventconfer_story' => $_POST['eventconfer_story'],
        	'eventconfer_start' => $_POST['eventconfer_start'],
        	'eventconfer_end' => $_POST['eventconfer_end'],
            'eventconfer_uname' => $_POST['eventconfer_uname'],
        	'eventconfer_uclass' => $_POST['eventconfer_uclass'],
        	'eventconferroom_namers' => $_POST['eventconferroom_namers'],
        	'eventconfer_psname' => $_POST['eventconfer_psname'],
        	'eventconfer_psclass' => $_POST['eventconfer_psclass'],
        	'eventconfer_join' => $_POST['eventconfer_join'],
        	'eventconfer_coffeegroup' => $_POST['eventconfer_coffeegroup'],
            'eventconfer_coffeegroup_amount' => $_POST['eventconfer_coffeegroup_amount'],
            'eventconfer_lbtri' => $_POST['eventconfer_lbtri'],
            'eventconfer_lbtri_amount' => $_POST['eventconfer_lbtri_amount'],
            'eventconfer_lcd' => $_POST['eventconfer_lcd'],
            'eventconfer_hotdrink' => $_POST['eventconfer_hotdrink'],
            'eventconfer_cooldrink' => $_POST['eventconfer_cooldrink'],
            'eventconfer_dishgroup' => $_POST['eventconfer_dishgroup'],
            'eventconfer_dishgroup_amount' => $_POST['eventconfer_dishgroup_amount'],
            'eventconfer_status_conferonline' => $_POST['vdocon'],
            'eventconfer_status_online' => $_POST['eventconfer_status_online'],
            'eventconfer_status_iszpo' => $_POST['eventconfer_status_iszpo'],
            'eventconfer_status_cazpo' => $_POST['eventconfer_status_cazpo'],
            'eventconfer_status_fpzpo' => $_POST['eventconfer_status_fpzpo'],
            'eventconfer_status_spzpo' => $_POST['eventconfer_status_spzpo'],
            'eventconfer_status_lzpo' => $_POST['eventconfer_status_lzpo'],
            'eventconfer_status_crzpo' => $_POST['eventconfer_status_crzpo'],
            'eventconfer_status_bdzpo' => $_POST['eventconfer_status_bdzpo'],
            'eventconfer_status_itzpo' => $_POST['eventconfer_status_itzpo'],
            'eventconfer_status_hrzpo' => $_POST['eventconfer_status_hrzpo'],
            'eventconfer_status_zmizpo' => $_POST['eventconfer_status_zmizpo'],
            'eventconfer_status_ds' => $_POST['eventconfer_status_ds'],
            'eventconfer_status_cm' => $_POST['eventconfer_status_cm'],
            'eventconfer_status_nm' => $_POST['eventconfer_status_nm'],
            'eventconfer_status_sk' => $_POST['eventconfer_status_sk'],
            'eventconfer_status_kkoz' => $_POST['eventconfer_status_kkoz'],
            'eventconfer_status_kk' => $_POST['eventconfer_status_kk'],
            'eventconfer_status_ub' => $_POST['eventconfer_status_ub'],
            'eventconfer_status_sr' => $_POST['eventconfer_status_sr'],
            'eventconfer_date' => $adddatenow,
            'eventconfer_tel' => $_POST['eventconfer_tel'],
            'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
        	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id'],
        	'confer_confer_id' => $_POST['confer_confer_id'],
        	'eventconfer_status' => $_POST['eventconfer_status'],
        	'headncf_headncf_id' => $_POST['headncf_headncf_id']
            ));
	    }

    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	    $link = "index.php?url=cf_listcfr.php";
            header( "Refresh: 2; $link" );
        }else{
            echo "เกิดปัญหา";
        }

?>
</html>
<?php
ob_end_flush();
?>
