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
                <a class="nav-link" href="filemanager/dialog.php">
                    <span data-feather="database"></span>
                  ระบบฝากไฟล์
                </a>
              </li>
              <?php }
				  if($_SESSION['systemallow_news'] == 1){ ?>
            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a class="nav-link" href="#">
                  <span data-feather="database"></span>
                  ระบบข่าว
                </a>
              <!-- sub menu -->
              <ul class="sub-menu collapse" id="new">
	                <a class="nav-link" href="#">
	                  ระบบข่าว sub
	                </a>
	                <a class="nav-link" href="#">
	                  ระบบข่าว sub
	                </a>
              </ul>
              <!-- end sub menu -->
              </li>
             <?php }
				if($_SESSION['systemallow_confer'] == 1){ ?>
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
              </ul>
              <!-- end sub menu -->
              </li>
              <?php }
				if($_SESSION['systemallow_service'] == 1){ ?>
					<a class="nav-link collapsed" href="#cs" data-toggle="collapse" data-target="#cs">
                    <span data-feather="cpu"></span>
                        ระบบแจ้งซ่อมคอมพิวเตอร์
                    </a>
                <!-- sub menu -->
                <ul class="sub-menu collapse on-sub" id="cs">
		                <a class="nav-link collapsed" href="#cscase" data-toggle="collapse" data-target="#cscase">
							 รายการดำเนินการ<span data-feather="chevron-right"></span>
		                </a>
		                <ul class="sub-menu collapse bnmenusub1" id="cscase">
				          <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_fixproblem.php"><span data-feather="chevron-right"></span>รายการแจ้งดำเนินการใหม่</a>
				          <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_waitfixproblem.php"><span data-feather="chevron-right"></span>รายงานระหว่างการดำเนินการ</a>
				          <a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_completefixproblem.php"><span data-feather="chevron-right"></span>รานงานการดำเนินการเสร็จ</a>
		                </ul>
		                <a class="nav-link collapsed py-1" href="#csip" data-toggle="collapse" data-target="#csip">IP-Address</a>
		                <ul class="sub-menu collapse bnmenusub1" id="csip">
				        <?php
    				          if($user_zoo == 10){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=1"><span data-feather="chevron-right"></span>องค์การสวนสัตว์</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 11){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 12){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 13){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 14){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 15){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 16){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 17){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
						<?php }
						if($user_zoo == 10 || $user_zoo == 18){?>
							<a class="dropdown-item bnmenusub2" href="admin_index.php?url=cs_show_ip.php&id=18"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a>
						<?php }?>
				        </ul>
		                <a class="nav-link collapsed py-1" href="#csipacc" data-toggle="collapse" data-target="#csipacc">IP-อุปกรณ์</a>
		                <ul class="sub-menu collapse bnmenusub1" id="csipacc">
				        <a class="dropdown-item bnmenusub2" href="admin_index.php?url=admin_cs_index.php&url2=cs_show_iptools.php&id=1"><span data-feather="chevron-right"></span>Server</a>
				        </ul>
		               <a class="nav-link collapsed py-1" href="#csreport" data-toggle="collapse" data-target="#csreport">รายงาน</a>
		                <ul class="sub-menu collapse bnmenusub1" id="csreport">
				         <a class="nav-link collapsed py-1 bnmenusub2" href="#"><span data-feather="chevron-right"></span>รายงานการซ่อมบริการ</a>
				         <a class="nav-link collapsed py-1 bnmenusub2" href="admin_index.php?url=cs_totalserviceadmin.php"><span data-feather="chevron-right"></span>รายงานการบริการ</a>
				         <a class="nav-link collapsed py-1 bnmenusub2" href="#csreportip" data-toggle="collapse" data-target="#csreportip"><span data-feather="chevron-right"></span>รายงานสรุปไอพีที่ใช้</a>
				         <ul class="sub-menu collapse" id="csreportip">
				                        <?php if($user_zoo == 10){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzpo.php">องค์การสวนสัตว์</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 11){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 12){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 13){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 14){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 15){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 16){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 17){?>
												<li class="dropdown-item"><a class="dropdown-item" href="admin_index.php?url=admin_cs_index.php&url2=cs_totalservicemonthzoo.php&zoo=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a></li>
										<?php }
											if($user_zoo == 10 || $user_zoo == 18){?>
												<li class="dropdown-item"><a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a></li>
										<?php }?>
				         </ul>
				        </ul>
		               <a class="nav-link collapsed py-1" href="#cssetting" data-toggle="collapse" data-target="#cssetting"><span data-feather="settings"></span>ตั้งค่า</a>
		               <ul class="sub-menu collapse" id="cssetting">
				          <a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>จัดการชนิดอุปกรณ์</a>
				          <a class="dropdown-item" href="#"><span data-feather="chevron-right"></span>จัดการรายการปัญหา</a>
		               </ul>
                </ul>
              <!-- end sub menu -->
              <?php }
				if($_SESSION['systemallow_touristreport'] == 1){ ?>
<!--               </li> -->
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
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
                                         <?php }
                                       if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo.php&zoo=?"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a>
                                        <?php }?>
	                </ul>
	               </div>
	                <a class="nav-link collapsed py-1" href="#trsreportold" data-toggle="collapse" data-target="#trsreportold">
	                   <span data-feather="chevron-right"></span>รายงานจำนวนผู้เข้าชมสวนสัตว์เก่า<br>(ตุลาคม 2559 - กันยายน 2560)
	                </a>
	                <ul class="sub-menu collapse" id="trsreportold">
	                    <?php
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 11){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=11"><span data-feather="chevron-right"></span>สวนสัตว์ดุสิต</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 12){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=12"><span data-feather="chevron-right"></span>สวนสัตว์เปิดเขาเขียว</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 13){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=13"><span data-feather="chevron-right"></span>สวนสัตว์เชียงใหม่</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 14){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=14"><span data-feather="chevron-right"></span>สวนสัตว์นครราชสีมา</a>
                                         <?php }
                                       if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 15){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=15"><span data-feather="chevron-right"></span>สวนสัตว์สงขลา</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 16){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=16"><span data-feather="chevron-right"></span>สวนสัตว์อุบลราชธานี</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 17){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=17"><span data-feather="chevron-right"></span>สวนสัตว์ขอนแก่น</a>
                                         <?php }
                                      if($user_zoo == 7 || $user_zoo == 10 || $user_zoo == 18){?>
                                        <a class="dropdown-item" href="admin_index.php?url=trs_showtotalzoo_old.php&zoo=?"><span data-feather="chevron-right"></span>โครงการคชอาณาจักร</a>
                                        <?php }?>
	                </ul>
                </ul>
              <!-- end sub menu -->
              </li>
              <?php }
    			if($_SESSION['systemallow_km'] == 1){ ?>
              <li data-toggle="collapse" data-target="#know" class="collapsed">
                <a class="nav-link" href="#">
                     <span data-feather="calendar"></span>
                  ระบบฐานความรู้
                </a>
                  <!-- sub menu -->
                <ul class="sub-menu collapse" id="know">
	                <a class="nav-link dropknow ml-4" href="#">
	                   ระบบฐานความรู้ sub
	                </a>
	                <a class="nav-link dropknow ml-4" href="#">
	                   ระบบฐานความรู้ sub
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
              <?php }
				if($_SESSION['systemallow_admin'] == 1){ ?>
                <a class="nav-link collapsed py-1" href="#user" data-toggle="collapse" data-target="#user">
                  <span data-feather="user"></span>
                  ระบบผู้ใช้
                </a>
                   <!-- sub menu -->
                <ul class="sub-menu collapse" id="user">
	                <a class="nav-link dropuser" href="admin_index.php?url=user_show_list.php">
	                   <span data-feather="chevron-right"></span>รายการผู้ใช้
	                </a>
	                <a class="nav-link dropuser" href="admin_index.php?url=user_show_division.php">
	                   <span data-feather="chevron-right"></span>รายการฝ่าย
	                </a>
	                <a class="nav-link dropuser" href="admin_index.php?url=user_show_zoo.php">
	                   <span data-feather="chevron-right"></span>รายการสวนสัตว์
	                </a>
	                <a class="nav-link dropuser" href="admin_index.php?url=user_log_user.php">
	                   <span data-feather="chevron-right"></span>Log-การใช้งาน
	                </a>
                </ul>
              <!-- end sub menu -->
              </li>
              <?php } ?>
            </ul>
          </div>
        </nav>
<?php endif; ?>
