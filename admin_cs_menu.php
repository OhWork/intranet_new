<a class="nav-link collapsed nav-link-1 edittext mucl" id="nav-26-animate-7" href="#cs" data-toggle="collapse" data-target="#cs"><span data-feather="cpu"></span>ระบบแจ้งซ่อมคอมพิวเตอร์</a>
<!-- sub menu -->
<ul class="sub-menu collapse on-sub mmpd" id="cs">
    <a class="nav-link collapsedv nav-link-15 edittext mucl" id="nav-1-animate-1" href="#cscase" data-toggle="collapse" data-target="#cscase">รายการดำเนินการ<span data-feather="chevron-right"></span></a>
    <ul class="sub-menu collapse mmpd2" id="cscase">
        <a class="nav-link edittext mucl" id="nav-15-animate-1" href="admin_index.php?url=cs_show_fixproblem.php">รายการแจ้งดำเนินการใหม่</a>
        <a class="nav-link edittext mucl" id="nav-15-animate-2" href="admin_index.php?url=cs_show_waitfixproblem.php">รายการระหว่างการดำเนินการ</a>
        <a class="nav-link edittext mucl" id="nav-15-animate-3" href="admin_index.php?url=cs_show_completefixproblem.php">รายการการดำเนินการเสร็จ</a>
    </ul>
    <a class="nav-link collapsed py-1 nav-link-9 edittext mucl" id="nav-1-animate-2" href="#csip" data-toggle="collapse" data-target="#csip">IP-Address<span data-feather="chevron-right"></span></a>
    <ul class="sub-menu collapse mmpd2" id="csip">
        <?php if ($user_zoo == 10) { ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-1" href="admin_index.php?url=cs_show_ip.php&id=1">องค์การสวนสัตว์</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 11) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-2" href="admin_index.php?url=cs_show_ip.php&id=11">สวนสัตว์ดุสิต</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 12) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-3" href="admin_index.php?url=cs_show_ip.php&id=12">สวนสัตว์เปิดเขาเขียว</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 13) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-4" href="admin_index.php?url=cs_show_ip.php&id=13">สวนสัตว์เชียงใหม่</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 14) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-5" href="admin_index.php?url=cs_show_ip.php&id=14">สวนสัตว์นครราชสีมา</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 15) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-6" href="admin_index.php?url=cs_show_ip.php&id=15">สวนสัตว์สงขลา</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 16) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-7" href="admin_index.php?url=cs_show_ip.php&id=16">สวนสัตว์อุบลราชธานี</a>
        <?php
        }
        if ($user_zoo == 10 || $user_zoo == 17) {
            ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-8" href="admin_index.php?url=cs_show_ip.php&id=17">สวนสัตว์ขอนแก่น</a>
<?php
}
if ($user_zoo == 10 || $user_zoo == 18) {
    ?>
            <a class="nav-link edittext mucl" id="nav-9-animate-9" href="admin_index.php?url=cs_show_ip.php&id=18">โครงการคชอาณาจักร</a>
<?php } ?>
    </ul>
    <a class="nav-link collapsed py-1 nav-link-10 edittext mucl" id="nav-1-animate-3" href="#csipacc" data-toggle="collapse" data-target="#csipacc">IP-อุปกรณ์<span data-feather="chevron-right"></span></a>
    <ul class="sub-menu collapse mmpd2" id="csipacc">
        <a class="nav-link edittext mucl" id="nav-10-animate-1" href="admin_index.php?url=cs_show_iptools.php&id=1">Server</a>
    </ul>
       <a class="nav-link collapsed py-1  nav-link-33 edittext mucl" id="nav-1-animate-4" href="#csinternet" data-toggle="collapse" data-target="#csinternet">รายการขอใช้ระบบ</a>
    <ul class="sub-menu collapse mmpd2" id="csinternet">
        <a class="nav-link edittext mucl" id="nav-33-animate-1" href="admin_index.php?url=cs_show_fixproblem.php">รายการแจ้งดำเนินการใหม่</a>
        <a class="nav-link edittext mucl" id="nav-33-animate-2" href="admin_index.php?url=cs_show_waitfixproblem.php">รายการระหว่างการดำเนินการ</a>
        <a class="nav-link edittext mucl" id="nav-33-animate-3" href="admin_index.php?url=cs_show_completefixproblem.php">รายการการดำเนินการเสร็จ</a>
    </ul>
    <a class="nav-link collapsed py-1 edittext mucl" id="nav-1-animate-5" href="admin_index.php?url=cs_showupweb.php">รายการขอคำร้องขึ้นเว็บไซต์</a>
    <a class="nav-link collapsed py-1 nav-link-11 edittext mucl" id="nav-1-animate-6" href="#csreport" data-toggle="collapse" data-target="#csreport">รายงาน<span data-feather="chevron-right"></a>
    <ul class="sub-menu collapse mmpd2" id="csreport">
        <a class="nav-link collapsed py-1 bnmenusub2 nav-link-12 edittext mucl" id="nav-11-animate-1" href="#csreportcom" data-toggle="collapse" data-target="#csreportcom">รายงานการซ่อม<span data-feather="chevron-right"></span></a>
        <ul class="sub-menu collapse mmpd2 " id="csreportcom">
            <?php if ($user_zoo == 10) { ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-1" href="admin_index.php?url=cs_totalservicemonthzpo.php">องค์การสวนสัตว์</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 11) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-2" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=11">สวนสัตว์ดุสิต</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 12) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-3" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=12">สวนสัตว์เปิดเขาเขียว</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 13) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-4" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=13">สวนสัตว์เชียงใหม่</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 14) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-5" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=14">สวนสัตว์นครราชสีมา</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 15) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-6" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=15">สวนสัตว์สงขลา</a>
<?php
}
if ($user_zoo == 10 || $user_zoo == 16) {
    ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-7" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=16">สวนสัตว์อุบลราชธานี</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 17) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-8" href="admin_index.php?url=cs_totalservicemonthzoo.php&zoo=17">สวนสัตว์ขอนแก่น</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 18) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-12-animate-9" href="#">โครงการคชอาณาจักร</a>
            <?php } ?>
        </ul>
        <a class="nav-link collapsed py-1 nav-link-13 edittext mucl" id="nav-11-animate-2" href="#csreportip" data-toggle="collapse" data-target="#csreportip">รายงานสรุปไอพีที่ใช้<span data-feather="chevron-right"></span></a>
        <ul class="sub-menu collapse mmpd2" id="csreportip">
            <?php if ($user_zoo == 10) { ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-1" href="admin_index.php?url=cs_report_ip.php&id=1">องค์การสวนสัตว์</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 11) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-2" href="admin_index.php?url=cs_report_ip.php&id=11">สวนสัตว์ดุสิต</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 12) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-3" href="admin_index.php?url=cs_report_ip.php&id=12">สวนสัตว์เปิดเขาเขียว</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 13) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-4" href="admin_index.php?url=cs_report_ip.php&id=13">สวนสัตว์เชียงใหม่</a>
            <?php
            }
            if ($user_zoo == 10 || $user_zoo == 14) {
                ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-5" href="admin_index.php?url=cs_report_ip.php&id=14">สวนสัตว์นครราชสีมา</a>
<?php
}
if ($user_zoo == 10 || $user_zoo == 15) {
    ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-6" href="admin_index.php?url=cs_report_ip.php&id=15">สวนสัตว์สงขลา</a>
<?php
}
if ($user_zoo == 10 || $user_zoo == 16) {
    ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-7" href="admin_index.php?url=cs_report_ip.php&id=16">สวนสัตว์อุบลราชธานี</a>
<?php
}
if ($user_zoo == 10 || $user_zoo == 17) {
    ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-8" href="admin_index.php?url=cs_report_ip.php&id=17">สวนสัตว์ขอนแก่น</a>
<?php
}
if ($user_zoo == 10 || $user_zoo == 18) {
    ?>
                <a class="dropdown-item edittext mucl" id="nav-13-animate-9" href="admin_index.php?url=cs_report_ip.php&id=18">โครงการคชอาณาจักร</a>
<?php } ?>
        </ul>
    </ul>
    <a class="nav-link collapsed py-1 nav-link-14 edittext mucl" id="nav-1-animate-7" href="#cssetting" data-toggle="collapse" data-target="#cssetting"><span data-feather="settings"></span>ตั้งค่า<span data-feather="chevron-right"></span></a>
    <ul class="sub-menu collapse mmpd2" id="cssetting">
        <a class="nav-link edittext mucl" id="nav-14-animate-1" href="admin_index.php?url=cs_add_typetools.php">จัดการชนิดอุปกรณ์ (แจ้งซ่อม)</a>
        <a class="nav-link edittext mucl" id="nav-14-animate-2" href="admin_index.php?url=cs_add_problemlist.php">จัดการรายการปัญหา (แจ้งซ่อม)</a>
        <a class="nav-link edittext mucl" id="nav-14-animate-3" href="admin_index.php?url=cs_add_typeworkupweb.php">จัดการระบบ (ร้องขอขึ้นเว็บ)</a>
    </ul>
</ul>
<!-- end sub menu -->
