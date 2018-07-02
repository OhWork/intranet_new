              <a class="nav-link collapsed" href="#confer" data-toggle="collapse" data-target="#confer">
                  <span data-feather="calendar"></span>
                  ระบบจองห้องประชุม
                </a>
              <!-- sub menu -->
              <ul class="sub-menu collapse on-sub" id="confer">
                    <a class="nav-link collapsed py-1" href="#cf" data-toggle="collapse" data-target="#cf">จัดการห้องประชุม</a>
	                <ul class="sub-menu collapse bnmenusub1" id="cf">
	                <a class="dropdown-item bnmenusub2" href="#cfsub" data-toggle="collapse" data-target="#cfsub"><span data-feather="chevron-right"></span>องค์การสวนสัตว์</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',3)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',3)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub2" data-toggle="collapse" data-target="#cfsub2"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub2">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',11)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',11)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub3" data-toggle="collapse" data-target="#cfsub3"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub3">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',12)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',12)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub4" data-toggle="collapse" data-target="#cfsub4"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub4">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',13)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',13)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub5" data-toggle="collapse" data-target="#cfsub5"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub5">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',14)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',14)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub6" data-toggle="collapse" data-target="#cfsub6"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub6">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',15)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',15)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub7" data-toggle="collapse" data-target="#cfsub7"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub7">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',16)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',16)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub8" data-toggle="collapse" data-target="#cfsub8"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub8">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',17)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',17)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfsub9" data-toggle="collapse" data-target="#cfsub9"><span data-feather="chevron-right"></span>คชอาณาจักร จ.สุรินทร์</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfsub9">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',18)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',18)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
	                </ul>
    	            <a class="nav-link collapsed py-1" href="#cfo" data-toggle="collapse" data-target="#cfo">จัดการห้องประชุมทางไกล</a>

	                <ul class="sub-menu collapse bnmenusub1" id="cfo">

	                <a class="dropdown-item bnmenusub2" href="#cfosub" data-toggle="collapse" data-target="#cfosub"><span data-feather="chevron-right"></span>องค์การสวนสัตว์</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',3)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',3)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub2" data-toggle="collapse" data-target="#cfosub2"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub2">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',11)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',11)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub3" data-toggle="collapse" data-target="#cfosub3"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub3">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',12)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',12)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub4" data-toggle="collapse" data-target="#cfosub4"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub4">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',13)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',13)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub5" data-toggle="collapse" data-target="#cfosub5"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub5">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',14)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',14)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub6" data-toggle="collapse" data-target="#cfosub6"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub6">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',15)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',15)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub7" data-toggle="collapse" data-target="#cfosub7"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub7">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',16)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',16)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub8" data-toggle="collapse" data-target="#cfosub8"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub8">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',17)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',17)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
    			      <a class="dropdown-item bnmenusub2" href="#cfosub9" data-toggle="collapse" data-target="#cfosub9"><span data-feather="chevron-right"></span>คชอาณาจักร จ.สุรินทร์</a>
    	                <ul class="sub-menu collapse bnmenusub1" id="cfosub9">
    	                <?php $rsroomzpo =$db->countTable('conferroom','zoo_zoo_id',18)->execute();
    			              $rsroomzpo2 =$db->findByPK('conferroom','zoo_zoo_id',18)->execute();
    			              $countroomzpo = mysqli_fetch_array($rsroomzpo,MYSQLI_NUM);
    				       if($countroomzpo[0] > 0){
        				       while ($showroomzpo = mysqli_fetch_array($rsroomzpo2,MYSQLI_ASSOC)){
    			        ?>

    		                <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cf_showroom_online.php&id=<?php echo $showroomzpo['confer_id'];?>">
        		                <?php echo $showroomzpo['confer_name'];?>
        		            </a>

        		            <?php
            		          }
        			     }else{ ?>
    				             <li class="dropdown-item"><a class="dropdown-item" href="#">ยังไม่มีข้อมูล</a></li>
    			      <?php } ?>
    			      </ul>
	                </ul>
	                <a class="nav-link collapsed py-1" href="#cfreport" data-toggle="collapse" data-target="#cfreport">รายงาน</a>
		                <ul class="sub-menu collapse bnmenusub1" id="cfreport">
				         <a class="nav-link collapsed py-1" href="#cfreportcon" data-toggle="collapse" data-target="#cfreportcon"><span data-feather="chevron-right"></span>รายงานห้องประชุม</a>
				          <ul class="sub-menu collapse" id="cfreportcon">
				          <a class="dropdown-item" href="admin_index.php?url=cf_totalservicemonthconferroom.php"><span data-feather="chevron-right"></span>รายงานห้องประชุมรายห้อง</a>
				          <a class="dropdown-item" href="admin_index.php?url=cf_totalservicemonthconferroomAll.php"><span data-feather="chevron-right"></span>รายงานห้องประชุมรวม</a>
		               </ul>
				         <a class="nav-link collapsed py-1" href="#cfreportvdocon" data-toggle="collapse" data-target="#cfreportvdocon"><span data-feather="chevron-right"></span>รายงานห้องประชุมออนไลน์</a>
				         <ul class="sub-menu collapse" id="cfreportvdocon">
				          <a class="dropdown-item" href="admin_index.php?url=cf_totalservicemonthconferroomonline.php"><span data-feather="chevron-right"></span>รายงานห้องประชุมออนไลน์รายห้อง</a>
				          <a class="dropdown-item" href="admin_index.php?url=cf_totalservicemonthconferroomonlineAll.php"><span data-feather="chevron-right"></span>รายงานห้องประชุมออนไลน์รวม</a>
		               </ul>
				        </ul>
	                <a class="nav-link collapsed py-1" href="#cfsetting" data-toggle="collapse" data-target="#cfsetting"><span data-feather="settings"></span>ตั้งค่า</a>
		               <ul class="sub-menu collapse" id="cfsetting">
				          <a class="dropdown-item" href="admin_index.php?url=cf_addconfer.php"><span data-feather="chevron-right"></span>จัดการห้องประชุม</a>
				          <a class="dropdown-item" href="admin_index.php?url=cf_show_headconfer.php"><span data-feather="chevron-right"></span>จัดการหัวข้อห้องประชุม</a>
		               </ul>
              </ul>
              <!-- end sub menu -->
              </li>
