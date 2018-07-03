    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Intranet</a>
      <p class="navbar-nav px-3 text-white col"><?php echo $head; ?></p>
        <a class="" style="text-align:right;">
            <?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];
            ?></a>
        <a class="nav-link" href="logout.php"><span data-feather="log-out"></span>ออกจากระบบ</a>

	 </nav>
