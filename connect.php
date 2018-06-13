<?php

$db = new db_tools();
$db->db_name = "intranet";

if(!$db->connect()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
