<?php if (!empty($_SESSION['user_name'])):
        $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
?>
        <nav class="d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  หน้าหลัก <span class="sr-only">(current)</span>
                </a>
              </li>
              <?php if($_SESSION['systemallow_drive'] == 1){ ?>
              <li class="nav-item">
                <a class="nav-link" href="filemanager/admin_index.php?url=dialog.php">
                    <span data-feather="database"></span>
                  ระบบฝากไฟล์
                </a>
              </li>
              <?php }
				  if($_SESSION['systemallow_news'] == 1){
    				  include_once 'admin_news_menu.php';
    				  }
				if($_SESSION['systemallow_confer'] == 1){
    				include_once 'admin_cf_menu.php';
    				 }
				if($_SESSION['systemallow_service'] == 1){
					include_once 'admin_cs_menu.php';
                    }
				if($_SESSION['systemallow_touristreport'] == 1){
                    include_once 'admin_trs_menu.php';
               }
    			if($_SESSION['systemallow_km'] == 1){
                    include_once 'admin_km_menu.php';
               }
				if($_SESSION['systemallow_admin'] == 1){
                    include_once 'admin_user_menu.php';
               } ?>
            </ul>
          </div>
        </nav>
<?php endif; ?>
