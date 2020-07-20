<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    } );
} );
</script>
<?php
    if (!empty($_SESSION['user_name'])):
        $type = $_GET['type'];

    $labelsearchipzpo = new label('ค้นหา');

              ?> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div>
                                    <?php
                                     if($type == "1"){
                                           ?><h4>รอการตรวจสอบความถูกต้อง</h4><?php
                                                    }else if($type == "2"){
                                            ?><h4>รอการพิมพ์บัตรสมาชิก</h4><?php
                                                    }else if($type == "3"){
                                            ?><h4>รอการส่งบัตรสมาชิก</h4><?php
                                                    }else if($type == "4"){
                                            ?><h4>รอการบันทึกใบเสร็จ</h4><?php
                                                    }
                                                    ?>
                                        
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<?php 
                                                   if($type == "1"){
                                                        $columns = array('zlfotcard_code','typezlfot_name','zlfotmember_nameth','zlfotcard_datestart','zlfotcard_dateend','zoo_name');
                                                        $header = array('<b><center>รหัส</center></b>','<b><center>ประเภทบัตร</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>','<b><center>จาก</center></b>','<b><center>#</center></b>');
                                                        $rs = $db->findByPK55DESC('zlfotmember','zlfotcard','typezlfot','user','zoo','zlfotcard.user_user_id','user.user_id','zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','zlfotcard.typezlfot_typezlfot_id','typezlfot.typezlfot_code','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfotcard_stsfw','"R"','zlfotcard_id')->execute();
                                                        $edittxt = 'ยืนยันการตรวจสอบ';
                                                        $link = "admin_index.php?url=zlfot_checkdetailfirst.php";
                                                        }else if($type == "2"){
                                                        $columns = array('zlfot_code','typezlfot_name','zlfot_nameth','zlfot_datestart','zlfot_dateend','zoo_name');
                                                                    $header = array('<b><center>รหัส</center></b>','<b><center>ประเภทบัตร</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>','<b><center>จาก</center></b>','<b><center>#</center></b>');
                                                        $rs = $db->findByPK44DESC('zlfot','typezlfot','user','zoo','zlfot.user_user_id','user.user_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_code','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_status','"P"','zlfot_id')->execute();
                                                        $edittxt = 'ยืนยันการพิมพ์บัตร';
                                                        $link = "admin_index.php?url=zlfot_checkdetailsecond.php";
                                                        }else if($type == "3"){
                                                        $columns = array('zlfot_code','typezlfot_name','zlfot_nameth','zlfot_datestart','zlfot_dateend','zoo_name');
                                                                    $header = array('<b><center>รหัส</center></b>','<b><center>ประเภทบัตร</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>','<b><center>จาก</center></b>','<b><center>#</center></b>');
                                                        $rs = $db->findByPK44DESC('zlfot','typezlfot','user','zoo','zlfot.user_user_id','user.user_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_code','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_status','"S"','zlfot_id')->execute();
                                                        $edittxt = 'ยืนยันการจัดส่ง';
                                                        $link = "admin_index.php?url=zlfot_checkdetailthird.php";
                                                          }else if($type == "4"){
                                                        $columns = array('zlfot_code','typezlfot_name','zlfot_nameth','zlfot_datestart','zlfot_dateend','zoo_name');
                                                                    $header = array('<b><center>รหัส</center></b>','<b><center>ประเภทบัตร</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันที่หมดอายุ</center></b>','<b><center>จาก</center></b>','<b><center>#</center></b>');
                                                        $rs = $db->findByPK44DESC('zlfot','typezlfot','user','zoo','zlfot.user_user_id','user.user_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_code','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_status','"T"','zlfot_id')->execute();
                                                        $edittxt = 'ยืนยันใบเสร็จ';
                                                        $link = "admin_index.php?url=zlfot_checkdetailfouth.php";
                                                          }
                                                        $grid = new gridView();
                                                                    $grid->pr = 'zlfot_id';
                                                                    $grid->header = $header;
                                                                    $grid->width = array('12%','15%','15%','25%','25%','8%');
                                                                    $grid->edit = $link;
                                                                    $grid->name = 'table';
                                                                    $grid->edittxt = $edittxt;
                                                                    $grid->renderFromDB($columns,$rs);


                                                                    endif;
                                                            ?>
                                        </div>
		</div>
                        </div>
	</div>
        </div>
</div>