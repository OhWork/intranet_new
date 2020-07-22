<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
        $typezlfot =  $_POST['typezlfot_typezlfot_id'];
        $user_id = $_POST['user_user_id'];
        $typezooexe = $db->findByPK22("user","zoo","user.subzoo_zoo_zoo_id","zoo.zoo_id","user.user_id",$user_id)->executeAssoc();
        if($typezlfot == '01' || $typezlfot ==  '02'){
        $dateend = substr((date("Y")+1),0);   
        $dateend.="-".date("m");   
        $dateend.= "-".date("d"); 
        }else if( $typezlfot == '03'){
        $dateend = substr((date("Y")+2),0);   
        $dateend.="-".date("m");   
        $dateend.= "-".date("d"); 
        }else{
            $datenow = "ฟรี";
            $dateend = "ตลอดชีวิต";
        }
       $typezoo =  $typezooexe['zoo_code'];
        $codezlfot = $typezoo.$typezlfot;
        $rs = $db->specifytable("MAX(zlfotcard_code) AS last_id","zlfotcard","zlfotcard_code LIKE '%$codezlfot%'")->executeAssoc();
        $maxId = substr($rs['last_id'],  -5);
        $maxId = ($maxId + 1); 
        $maxId = substr("00000".$maxId, -5);
        $nextId = $codezlfot.$maxId;

        
	if(!empty($_POST['subzoo_id'])){
		$data['subzoo_name'] = $_POST['subzoo_name'];
		$data['subzoo_year'] = $_POST['subzoo_year'];
		$data['subzoo_no'] = $_POST['subzoo_no'];
		$data['subzoo_detail'] = $_POST['subzoo_detail'];
		$data['subzoo_enable'] = $_POST['subzoo_enable'];
		$rsfix = $db->update('subzoo',$data,'subzoo_id',$_POST['subzoo_id']);

	}else{
	$rs = $db->insert('zlfotcard',array(
                'zlfotcard_code' => $nextId,
                'zlfotcard_receipt' => $_POST['zlfotcard_receipt'],
                'zlfotcard_datereg' => $_POST['zlfotcard_datereg'],
                'zlfotcard_datestart' => $_POST['zlfotcard_datestart'],
                'zlfotcard_dateend' => $dateend,
                'zlfotcard_detail' => $_POST['zlfotcard_detail'],
                'zlfotcard_stsfw' => $_POST['zlfotcard_stsfw'],
                 'eventzlfot_eventzlfot_id' => $_POST['eventzlfot_eventzlfot_id'],
                'typezlfot_typezlfot_id' => $_POST['typezlfot_typezlfot_id'],
                'zlfotmember_zlfotmember_id' => $_POST['zlfotmember_zlfotmember_id'],
                'user_user_id' => $_POST['user_user_id']
	));
	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
           }
            $link = "url=admin_index.php?url=zlfot_show_checkmember.php&type=1";
            header( "Refresh: 2; $link" );
        }else{
            echo "ข้อมูลไม่เข้าฐานข้อมูล";
        }
?>
</html>
<?php
ob_end_flush();
?>
