<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
          <title>ระบบคอมพิวเตอร์เซอรวิส(New)</title>
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	

	if(!empty($_POST['typetools_id'])){

		$data['typetools_name'] = $_POST['typetools_name'];
				
		$rsfix = $db->update('typetools',$data,'typetools_id',$_POST['typetools_id']);
	
	}else{
	$rs = $db->insert('typetools',array(
	'typetools_name' => $_POST['typetools_name']
	));
	
	}	
	
	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php?url=admin_cs_index.php&url2=cs_add_typetools.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php					
ob_end_flush();	
?>