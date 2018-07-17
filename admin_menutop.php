<nav class="navbar navbar-expand-md navbar-dark bg-dark col-md-12">
    <a class="navbar-brand brandedit" href="#"><h4>Intranet</h4></a>
    <p class="navbar-nav px-3 text-white col"><?php echo $head; ?></p>
        <a class="" style="text-align:right;color:#ffffff;">
            <?php echo "คุณ".$_SESSION['user_name']." ".$_SESSION['user_last'];
            ?></a>
        <a class="nav-link" href="logout.php"><span data-feather="log-out"></span>ออกจากระบบ</a>
</nav>