<div class="list-group boxlefttop ">
<!--
     <a href="https://172.16.0.1:4100/logon.shtml?redirect=http://192.168.0.1/" class="list-group-item list-group-item-action "><span data-feather="log-in">เข้าระบบอินเตอร์เน็ต</a>
    <a href="filemanager/dialog.php" class="list-group-item list-group-item-action"><span data-feather="database"></span>ระบบ ZPO-Data-Center</a>
    <a href="http://mail.zoothailand.org" class="list-group-item list-group-item-action"><span data-feather="mail"></span>อีเมล์</a>
    <a href="cs_index.php" class="list-group-item list-group-item-action"><span data-feather="cpu"></span>ระบบแจ้งซ่อมคอมพิวเตอร์ออนไลน์</a>
    <a href="cf_index.php" class="list-group-item list-group-item-action"><span data-feather="calendar"></span>ระบบจองห้องประชุมออนไลน์</a>
<!--      <a href="km_index.php" class="list-group-item list-group-item-action"><i><img src="images/icons/glyphicons-30-notes-2.png" style="width: 17px; height: 15px;"></i> ระบบบริหารจัดการความรู้</a> -->
 <!--   <a href="trs_index.php" class="list-group-item list-group-item-action"><span data-feather="bar-chart"></span>ระบบรายงานจำนวนผู้เข้าชมสวนสัตว์</a>
-->

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  หน้าหลัก <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="https://172.16.0.1:4100/logon.shtml?redirect=http://192.168.0.1/">
                    <span data-feather="log-in"></span>
                  เข้าระบบอินเตอร์เน็ต
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://mail.zoothailand.org">
                    <span data-feather="mail"></span>
                อีเมล์
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="database"></span>
                  ระบบฝากไฟล์
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="confer" href="cf_index.php">
                  <span data-feather="calendar"></span>
                  ระบบจองห้องประชุม
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="cs" href="#">
                    <span data-feather="cpu"></span>
                 ระบบแจ้งซ่อมคอมพิวเตอร์
                </a>
                <!-- sub menu -->
                <a class="nav-link dropcs ml-4" href="cs_index.php?url=cs_add_problem.php">
                   แบบฟอร์มแจ้งซ่อม
                </a>
                <a class="nav-link dropcs ml-4" href="cs_index.php?url2=cs_show_problem.php&subpage=1">
                   รายการแจ้งซ่อม
                </a>
              <!-- end sub menu -->
              </li>
              <li class="nav-item">
                <a class="nav-link" id="trs" href="#">
                    <span data-feather="bar-chart"></span>
                  ระบบรายงานจำนวนผู้เข้าชม
                </a>
                <!-- sub menu -->
                <a class="nav-link droptrs ml-4" href="trs_index.php?url=trs_showallzoo.php">
                   รายงานจำนวนผู้เข้าชมของสวนสัตว์
                </a>
                <a class="nav-link droptrs ml-4" href="trs_index.php?url2=trs_showallzoo_old.php">
                   รายงานจำนวนผู้เข้าชมของสวนสัตว์แบบเก่า
                </a>
                <a class="nav-link droptrs ml-4" href="trs_index.php?url2=trs_showallvehicle.php">
                   รายงานจำนวนยานพาหนะ
                </a>
              <!-- end sub menu -->
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
        </div>