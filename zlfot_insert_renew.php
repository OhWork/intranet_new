<?php  ob_start();?>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
        $typezlfot =  $_POST['typezlfot_typezlfot_id'];
        $user_id = $_POST['user_user_id'];
        $typezooexe = $db->findByPK22("user","zoo","user.subzoo_zoo_zoo_id","zoo.zoo_id","user.user_id",$user_id)->executeAssoc();
        if($typezlfot == '01' || $typezlfot ==  '02'){
        $datenow = date("Y");   
        $datenow.="-".date("m");   
        $datenow.= "-".date("d"); 
        $dateend = substr((date("Y")+1),0);   
        $dateend.="-".date("m");   
        $dateend.= "-".date("d"); 
        }else if( $typezlfot == '03'){
        $datenow = date("Y");   
        $datenow.="-".date("m");   
        $datenow.= "-".date("d"); 
        $dateend = substr((date("Y")+3),0);   
        $dateend.="-".date("m");   
        $dateend.= "-".date("d"); 
        }else{
            $datenow = "ฟรี";
            $dateend = "ตลอดชีวิต";
        }
       $typezoo =  $typezooexe['zoo_code'];
        $codezlfot = $typezoo.$typezlfot;
        $rs = $db->specifytable("MAX(zlfot_code) AS last_id","zlfot","zlfot_code LIKE '%$codezlfot%'")->executeAssoc();
        $maxId = substr($rs['last_id'],  -5);
        $maxId = ($maxId + 1); 
        $maxId = substr("00000".$maxId, -5);
        $nextId = $codezlfot.$maxId;

        
	if(!empty($_POST['zlfot_id'])){
                   $datenow = date("Y");   
                   $datenow.="-".date("m");   
                   $datenow.= "-".date("d"); 
                        if($_POST['zlfot_dateend'] > $datenow){
                            echo "ต่ออายุ";
                        }else if($_POST['zlfot_dateend'] < $datenow){
                             echo "อยู่ระหว่าง";
                        }
		$data['subzoo_name'] = $_POST['subzoo_name'];
		$data['subzoo_year'] = $_POST['subzoo_year'];
		$data['subzoo_no'] = $_POST['subzoo_no'];
		$data['subzoo_detail'] = $_POST['subzoo_detail'];
		$data['subzoo_enable'] = $_POST['subzoo_enable'];
		$rsfix = $db->update('zlfot',$data,'zlfot_id',$_POST['zlfot_id']);

	}else{
	$rs = $db->insert('zlfot',array(
	'zlfot_code' => $nextId,
	'zlfot_nameth' => $_POST['zlfot_nameth'],
	'zlfot_nameen' => $_POST['zlfot_nameen'],
                'zlfot_tel' => $_POST['zlfot_tel'],
               	'zlfot_address' => $_POST['zlfot_address'],
                'zlfot_receipt' => $_POST['zlfot_receipt'],
	'zlfot_datereg' => $_POST['zlfot_datereg'],
                'zlfot_datestart' => $datenow,
                'zlfot_dateend' => $dateend,
                'zlfot_status' => $_POST['zlfot_status'],
                'zlfot_email' => $_POST['zlfot_email'],
                'zlfot_detail' => $_POST['zlfot_detail'],
	'typezlfot_typezlfot_id' => $_POST['typezlfot_typezlfot_id'],
	'user_user_id' => $_POST['user_user_id']
	));
	}


?>
</html>
<?php
ob_end_flush();
?>
