<?php
$inactive = 18000000000000;
	if( !isset($_SESSION['timeout']) )
	$_SESSION['timeout'] = time() + $inactive;
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive){
	?>
	<div class="modal" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
				<div class="modal-body">
					        ท่านล็อคอินเกินเวลาที่กำหนดกรุณาล็อคอินใหม่
				</div>
				<div class="modal-footer">
					<div id="showcountdown"></div>
						<a href="logout.php"><button type="button" class="btn btn-primary">Ok</button></a>
				</div>
			</div>
		   </div>
	</div>
	<script>

			$("#myModal").modal({backdrop: 'static', keyboard: false});

			setTimeout(function(){
				window.location.href = 'login.php';
			}, 5000);
			var timeLeft = 4;
			var elem = document.getElementById('showcountdown');
			var timerId = setInterval(countdown, 1000);

			function countdown() {
			    if (timeLeft == -1) {
			        clearTimeout(timerId);
			    } else {
			        elem.innerHTML = timeLeft + ' seconds remaining';
			        timeLeft--;
			    }
			}

		</script>

		<?php
		session_destroy();
	}
	$_SESSION['timeout']=time();

?>
