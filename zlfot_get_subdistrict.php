<?php
    include 'database/db_tools.php';
	include 'connect.php';
$rs = $db->findByPK('subdistricts','districts_id ',$_GET['district_id'])->execute();
$json = array();
while($result = mysqli_fetch_assoc($rs)) {    
array_push($json, $result);
}
echo json_encode($json);
?>