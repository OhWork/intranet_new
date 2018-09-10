<?php
// include "database/db_tools_PDO.php";
class db_tools{
		var $user = 'root';
		var $pass = '';//เปลี่ยน
		var $dsn = 'mysql:host=localhost;dbname=intranet';
		var $sql;
		//คำสั่งเพื่อเชื่อมต่อฐานข้อมูลโดยเลือกเทเบิ้ล
		function connect(){
            $con = new PDO($this->dsn,$this->user,$this->pass);
			return $con;
		}
		}
		
$db = new db_tools();

if(!$db->connect()){
    echo "Failed to connect to MySQL";
}else{
    "connect";
}

?>
