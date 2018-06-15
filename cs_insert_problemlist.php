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
	

	if(!empty($_POST['admin_id'])){

		$data['type_name'] = $_POST['type_name'];
				
		$rsfix = $db->update('type',$data,'type_id',$_POST['type_id']);
	
	}else{
	$rs = $db->insert('subtypetools',array(
	'subtypetools_name' => $_POST['subtypetools_name'],
	'typetools_typetools_id' => $_POST['typetools_typetools_id']
	
	));
	
	}	
		
	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "admin_index.php?url=admin_cs_index.php&url2=cs_add_problemlist.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php					
ob_end_flush();	
?>