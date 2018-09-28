<?php
	include 'database/db_tools.php';
	include 'connect.php';
	 @$user = $_POST['user_user'];
	 $countuser = $db->findByPK('user','user_user',"'$user'")->execute();
	 echo mysqli_num_rows($countuser);


?>
