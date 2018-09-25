<?php
include_once('../database/db_tools.php');
include_once('../connect.php');
$q = urldecode($_GET["q"]);
$pagesize = 50; // จำนวนรายการที่ต้องการแสดง
$table_db="ipzpo"; // ตารางที่ต้องการค้นหา
$find_field="ipzpo_user"; // ฟิลที่ต้องการค้นหา
$rs = $db->specifytable("*",$table_db,"locate('$q', $find_field ,status_status_id = '1') > 0 order by locate('$q', $find_field), $find_field limit $pagesize")->execute();
while ($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) {
	$id = $row["ipzpo_address"]; // ฟิลที่ต้องการส่งค่ากลับ
	$name = ucwords( strtolower( $row["ipzpo_user"] ) ); // ฟิลที่ต้องการแสดงค่า
	// ป้องกันเครื่องหมาย '
	$name = str_replace("'", "'", $name);
	// กำหนดตัวหนาให้กับคำที่มีการพิมพ์
	$display_name = preg_replace("/(" . $q . ")/i", "<b>$1</b>", $name);
	echo "<li onselect=\"this.setText('$name').setValue('$id');\">$display_name</li>";
}
?>
