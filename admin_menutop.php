<nav class="navbar navbar-expand-md navbar-dark bg-dark col-md-12">
    <a class="navbar-brand brandedit" href="#" style="margin-right:90%;">
		<h4>Intranet</h4>
	</a>
	<div class="dropdown">
		<button class="btn btn-primary rounded-circle" style="padding-left:8px;padding-right:8px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span data-feather="users"></span>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="left:-130px">
			<a class="dropdown-item" href="#" style="border-bottom:1px solid #000000;"><?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];?></a>
			<a class="dropdown-item" href="logout.php" style="text-align:right;color:red;">Logout <span data-feather="log-out"></span></a>
		</div>
	</div>
</nav>