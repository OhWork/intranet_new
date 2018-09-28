<?php
include_once 'database/db_tools.php';
include_once 'connect.php';
$touristreport_date = isset($_POST['datepicker']) ? trim($_POST['datepicker']) : "";
$zoo = isset($_POST['zoo']) ? trim($_POST['zoo']) : "";
// $zoo = 13;
// $touristreport_date = "2017-10-25";
$rs = $db->findByPK12('touristreport','touristreport_zoo_zoo_id',"$zoo",'touristreport_date',"'$touristreport_date'")->execute();
echo mysqli_num_rows($rs);
// $Rows = mysqli_num_rows($rs);
// if($Rows == 1){
//     echo "1";
// }else{
//     echo "false";
// } 
?>