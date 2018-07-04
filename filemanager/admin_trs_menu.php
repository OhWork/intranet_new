<a class="nav-link collapsed" href="#trs" data-toggle="collapse" data-target="#trs">
                    <span data-feather="bar-chart"></span>
                  ระบบรายงานจำนวนผู้เข้าชม
                </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse" id="trs">
	               <div class="nav-item">
	                <a class="nav-link collapsed py-1" href="#trsreport" data-toggle="collapse" data-target="#trsreport">
	                   <span data-feather="chevron-right"></span>รายงานจำนวนผู้เข้าชมสวนสัตว์
	                </a>
	                <ul class="sub-menu collapse" id="trsreport">
	                   <?php
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 11){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
                                         <?php }
                                       if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo.php&zoo=?"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a>
                                        <?php }?>
	                </ul>
	               </div>
	                <a class="nav-link collapsed py-1" href="#trsreportold" data-toggle="collapse" data-target="#trsreportold">
	                   <span data-feather="chevron-right"></span>รายงานจำนวนผู้เข้าชมสวนสัตว์เก่า<br>(ตุลาคม 2559 - กันยายน 2560)
	                </a>
	                <ul class="sub-menu collapse" id="trsreportold">
	                    <?php
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 11){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
                                         <?php }
                                       if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                                        <a class="dropdown-item" href="../admin_index.php?url=trs_showtotalzoo_old.php&zoo=?"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a>
                                        <?php }?>
	                </ul>
                </ul>
              <!-- end sub menu -->
