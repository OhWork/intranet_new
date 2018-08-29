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
	if(!empty($_POST['typeDesignnews_id'])){

		$data['upweb_status'] = $_POST['upweb_status'];
		$rsfix = $db->update('upweb',$data,'upweb_id',$_POST['upweb_id']);

	    //Log
		if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipshow = gethostbyaddr($ip);
        $log = $db->insert('log',array(
    	'log_system' => 'IP-address',
    	'log_action' => 'Edit',
    	'log_action_date' => date("Y-m-d H:i"),
    	'log_action_by' => $_POST['log_user'],
    	'log_ip' => $ipshow
    	));

	}else{
			$target_dir = 'temp/';
			$target_file = $target_dir.basename($_FILES['typeDesignnews_image']['name']);
			$target_dir_save = 'images/news/typeDesign/'.basename($_FILES['typeDesignnews_image']['name']);
			move_uploaded_file($_FILES['typeDesignnews_image']['tmp_name'], $target_dir_save);

// // Check if image file is a actual image or fake image
// if(isset($_FILES['typeDesignnews_image'])) {
//     $check = getimagesize($_FILES["typeDesignnews_image"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//         echo $target_dir_save;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }



	$rs = $db->insert('typeDesignnews',array(
	'typeDesignnews_name' => $_POST['typeDesignnews_name'],
	'typeDesignnews_link' => $_POST['typeDesignnews_link'],
	'typeDesignnews_enable' => $_POST['typeDesignnews_enable'],
	'typeDesignnews_image' => basename($_FILES['typeDesignnews_image']['name'])
	));

	}




	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	    echo "";
    	    $link = "index.php?url=news_add_typeDesign.php";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
             $link = "admin_index.php?url=news_show_typeDesign.php";
        }
            header( "Refresh: 1; $link" );
}


?>
</html>
<?php
ob_end_flush();
?>
