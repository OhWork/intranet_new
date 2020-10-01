<a class="nav-link collapsed nav-link-16 edittext mucl" id="nav-31-animate-2" href="#trs" data-toggle="collapse" data-target="#ar"><i class="far fa-chart-bar mr-3"></i><span>ระบบรายงานบัญชีสัตว์</span></a>
    <!-- sub menu -->
    <ul class="sub-menu collapse" id="ar">
	    <a class="nav-link collapsed py-1 nav-link-17 edittext mucl" id="nav-16-animate-1" href="#trsreport" data-toggle="collapse" data-target="#arreport">รายงานบัญชีสวนสัตว์<span data-feather="chevron-right"></span></a>
	        <ul class="sub-menu collapse mmpd2" id="arreport">
	            <?php if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 11){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-1" href="admin_index.php?url=ar_showtotalanimal.php&zoo=11">สวนสัตว์ดุสิต</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-2" href="admin_index.php?url=ar_showtotalanimal.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-3" href="admin_index.php?url=ar_showtotalanimal.php&zoo=13">สวนสัตว์เชียงใหม่</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-4" href="admin_index.php?url=ar_showtotalanimal.php&zoo=14">สวนสัตว์นครราชสีมา</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-5" href="admin_index.php?url=ar_showtotalanimal.php&zoo=15">สวนสัตว์สงขลา</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-6" href="admin_index.php?url=ar_showtotalanimal.php&zoo=16">สวนสัตว์อุบลราชธานี</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-7" href="admin_index.php?url=ar_showtotalanimal.php&zoo=17">สวนสัตว์ขอนแก่น</a>
                <?php }
                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                        <a class="nav-link edittext mucl" id="nav-17-animate-8" href="admin_index.php?url=ar_showtotalanimal.php&zoo=?">โครงการคชอาณาจักร</a>
                <?php }?>
	        </ul>
                <a class="nav-link collapsed py-1 edittext mucl" id="nav-21-animate-1" href="admin_index.php?url=ar_show_animal.php">รายการสัตว์</a>

	</ul>
              <!-- end sub menu -->
