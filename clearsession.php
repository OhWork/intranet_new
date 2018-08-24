<?php
$inactive = 18000000000000;
	if( !isset($_SESSION['timeout']) )
	$_SESSION['timeout'] = time() + $inactive;
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive){
	?>
	<script>
		alert('ท่านล็อคอินเข้าสู่ระบบเกินระยะเวลาที่กำหนด กรุณาล็อคอินใหม่อีกครั้ง');
		window.location.href = 'login.php';
	</script>
		<?php
		session_destroy();
	}
	$_SESSION['timeout']=time();

?>
