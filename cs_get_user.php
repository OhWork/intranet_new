<?php
// ส่วนของการเชิ่อมต่อกับฐานข้อมูล  
    include 'database/db_tools.php';
    include 'connect.php';
    $q = $_GET["term"];

$pagesize = 10; // จำนวนรายการที่ต้องการแสดง
$table_db="ipzpo"; // ตารางที่ต้องการค้นหา
$find_field="ipzpo_user"; // ฟิลที่ต้องการค้นหา
$rs = $db->specifytable("*",$table_db,"locate('$q', $find_field ,status_status_id = '1') > 0 order by locate('$q', $find_field), $find_field limit $pagesize")->execute();
while($row=mysqli_fetch_array($rs)) {
    $json_data[]=array(  
        "id"=>$row['ipzpo_address'],  
        "label"=>$row['ipzpo_user'],  
        "value"=>$row['ipzpo_user'],  
    );    
}  
$json= json_encode($json_data);  
echo $json;  
exit;
?>