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
        $datestart = $_POST['zlfotcard_datenewstart'];
        $checkcard =  $_POST['checkcard_id'];
        $user_id = $_POST['user_user_id'];
        $typezooexe = $db->findByPK22("user","zoo","user.subzoo_zoo_zoo_id","zoo.zoo_id","user.user_id",$user_id)->executeAssoc();
        if($typezlfot == '01' || $typezlfot ==  '02'){
            $dateend = substr(($datestart+1),0,4);   
            $dateend.="-".substr(($datestart),5, -3);   
            $dateend.= "-".substr(($datestart),8, 2); 
            //$dateend = $dateendyear."-".$dateendmonth."-".$dateendday;
        }else if( $typezlfot == '03'){
            $dateend = substr(($datestart+2),0,4);   
            $dateend.="-".substr(($datestart),5, -3);   
            $dateend.= "-".substr(($datestart),8, 2); 
        }
        $typezoo =  $typezooexe['zoo_code'];
        $codezlfot = $typezoo.$typezlfot;
        $rs = $db->specifytable("MAX(zlfotcard_code) AS last_id","zlfotcard","zlfotcard_code LIKE '%$codezlfot%'")->executeAssoc();
        $maxId = substr($rs['last_id'],  -5);
        $maxId = ($maxId + 1); 
        $maxId = substr("00000".$maxId, -5);
        $nextId = $codezlfot.$maxId;

	if(!empty($checkcard)){
		$typezooexe = $db->findByPK22("user","zoo","user.subzoo_zoo_zoo_id","zoo.zoo_id","user.user_id",$user_id)->executeAssoc();
                $checkmember = $db->findByPK12('zlfotcard','zlfotcard_status','"Y"','zlfotmember_zlfotmember_id',$checkcard)->executeAssoc();
                $dateendchange = $checkmember['zlfotcard_dateend'];
        }
                if(date("Y-m-d") < $dateendchange){
                    $datestartnew = substr(($dateendchange),0,4);   
                    $datestartnew.="-".substr(($dateendchange),5, -3);   
                    $day = substr(($dateendchange),8, 2);
                    $dayplus = $day+1;
                    $datestartnew.= "-".$dayplus;
                }else if(date("Y-m-d") >= $dateendchange){
                    $datestartnew = $checkmember['zlfotcard_datestart'];
                    }
                if($typezlfot == '01' || $typezlfot ==  '02'){
                    $dateend = substr(($datestartnew+1),0,4);   
                    $dateend.="-".substr(($datestartnew),5, -3); 
                    $dateend.= "-".substr(($datestartnew),8, 2);
                }else if( $typezlfot == '03'){
                    $dateend = substr(($datestartnew+2),0,4);   
                    $dateend.="-".substr(($datestartnew),5, -3);   
                    $dateend.= "-".substr(($datestartnew),8, 2); 
                }
                $typezoo =  $typezooexe['zoo_code'];
                $codezlfot = $typezoo.$typezlfot;
                $rs = $db->specifytable("MAX(zlfotcard_code) AS last_id","zlfotcard","zlfotcard_code LIKE '%$codezlfot%'")->executeAssoc();
                $maxId = substr($rs['last_id'],  -5);
                $maxId = ($maxId + 1); 
                $maxId = substr("00000".$maxId, -5);
                $nextId = $codezlfot.$maxId;

	if(!empty($_POST['zlfotmember_zlfotmember_id'])){
		$data['zlfotcard_status'] = $_POST['zlfotcard_status'];
		$rsfix = $db->update('zlfotcard',$data,'zlfotcard_id',$_POST['zlfotmember_zlfotmember_id']);

                $rs = $db->insert('zlfotcard',array(
                'zlfotcard_code' => $nextId,
                'zlfotcard_receipt' => $_POST['zlfotcard_receipt'],
                'zlfotcard_datereg' => $_POST['zlfotcard_datereg'],
                'zlfotcard_datestart' => $datestartnew,
                'zlfotcard_dateend' => $dateend,
                'zlfotcard_detail' => $_POST['zlfotcard_detail'],
                'zlfotcard_stsfw' => $_POST['zlfotcard_stsfw'],
                'eventzlfot_eventzlfot_id' => $_POST['eventzlfot_eventzlfot_id'],
                'typezlfot_typezlfot_id' => $_POST['typezlfot_typezlfot_id'],
                'zlfotmember_zlfotmember_id' => $_POST['zlfotmember_zlfotmember_id'],
                'user_user_id' => $_POST['user_user_id']
                        ));
                $data['zlfotcard_status'] = $_POST['zlfotcard_status'];
		$rsfix = $db->update('zlfotcard',$data,'zlfotcard_id',$_POST['changestatus']);
	}else{
	$rs = $db->insert('zlfotcard',array(
                'zlfotcard_code' => $nextId,
                'zlfotcard_receipt' => $_POST['zlfotcard_receipt'],
                'zlfotcard_datereg' => $_POST['zlfotcard_datereg'],
                'zlfotcard_datestart' => $datestart,
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
           }else if($rs && $rsfix){
            echo "<div class='statusok'>ต่ออายุสำเร็จ</div>";
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
