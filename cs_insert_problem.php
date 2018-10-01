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
	$zoo = $_POST['subzoo_zoo_zoo_id'];
// 	 if(($zoo >= 12) && ($zoo <=18)){
//     	echo "ยังไม่เปิดให้บริการในหน่วยงานนี้";
// 	}else{
	if(!empty($_POST['problem_id'])){

		$data['problem_name'] = $_POST['problem_name'];
		$data['problem_position'] = $_POST['problem_position'];
		$data['problem_work'] = $_POST['problem_work'];
		$data['problem_ip'] = $_POST['problem_ip'];
		$data['problem_tel'] = $_POST['problem_tel'];
		$data['problem_detail'] = $_POST['problem_detail'];
		$data['problem_date'] = $_POST['problem_date'];
		$data['problem_detail'] = $_POST['problem_detail'];
        $data['problem_adminfix'] = $_POST['problem_adminfix'];
		$data['subtypetools_subtypetools_id'] = $_POST['subtypetools_subtypetools_id'];
		$data['subtypetools_typetools_typetools_id'] = $_POST['subtypetools_typetools_typetools_id'];
		$data['subzoo_subzoo_id'] = $_POST['subzoo_subzoo_id'];

		$rs = $db->update('problem',$data,'problem_id',$_POST['problem_id'])->execute();

	}else{
      if($_POST['subzoo_zoo_zoo_id'] == '' || $_POST['subtypetools_subtypetools_id'] == 0 || $_POST['subtypetools_typetools_typetools_id'] == 0 || $_POST['subzoo_subzoo_id'] == 0 || $_POST['subzoo_zoo_zoo_id'] == 0){
          echo("กรุณาติดต่อเจ้าหน้าที่ไอที Call 1040");
      }else{
        	$rs = $db->insert('problem',array(
        	'problem_name' => $_POST['problem_name'],
        	'problem_position' => $_POST['problem_position'],
        	'problem_work' => $_POST['problem_work'],
        	'problem_ip' => $_POST['problem_ip'],
            'problem_tel' => $_POST['problem_tel'],
        	'problem_status' => $_POST['problem_status'],
        	'problem_date' => $_POST['problem_date'],
        	'problem_detail' => $_POST['problem_detail'],
        	'subtypetools_subtypetools_id' => $_POST['subtypetools_subtypetools_id'],
        	'subtypetools_typetools_typetools_id' => $_POST['subtypetools_typetools_typetools_id'],
        	'subzoo_subzoo_id' => $_POST['subzoo_subzoo_id'],
        	'subzoo_zoo_zoo_id' => $_POST['subzoo_zoo_zoo_id']
    	));
	    }
	}
// 	}

	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "cs_index.php?url=cs_add_problem.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>
