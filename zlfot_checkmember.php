<script type='text/javascript'>
        $(document).ready(function(){
            $('#table').DataTable({
                "ordering": false,
                "lengthMenu": false,
                "searching": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    });
});
</script>
<?php
   if (!empty($_SESSION['user_name'])):
	include_once 'database/db_tools.php';
	include_once 'connect.php';
    date_default_timezone_set('Asia/Bangkok');
	$user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
                $zoo = $_GET['zoo'];
                  $form = new form();
                $txtcode = new textfield('zlfot_code','','form-control','','');
	$button = new buttonok('ค้นหา','','btn btn-primary col-12 zloft_bt','submit');
	echo $form->open('','','col-12','','');
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="maincontent" style="background-color: #FFFFFF;">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-5" style="border-bottom: 5px solid #F5F5F5;">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
                    <h4>ตรวจสอบรายชื่อสมาชิกสมาชิก</h4>
                </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
				<div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-5">
                                        <p class="pt-4 pl-3 mb-0">กรุณากรอกหมายเลขบัตรสมาชิก</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <p class="mb-0" style="color:#b3b3b3">เช่น 000-000-00000</p>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <?php echo $txtcode ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
					<?php echo $button ?>
                                    </div>
                                    <div class="ml-auto mr-3">
                                        <a href="admin_index.php?url=zlfot_add_member.php" class="btn btn-success col-md-12 zloft_bt2" title="เพิ่มสมาชิกสโมสรผู้รักสวนสัตว์"><i class="fas fa-plus zloft-f2"></i><i class="far fa-id-card zloft-f ml-1"></i></a>
                                    </div>
				</div>
                            </div>
                        </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-1"></div>
                        <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>หมายเลขสมาชิก :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><!--ใส่ Code ตรงนี้--></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>ชื่อ-นามสกุล :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><!--ใส่ Code ตรงนี้--></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>หมายเลขโทรศัพท์ :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><!--ใส่ Code ตรงนี้--></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>วันที่สมัคร :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8">
                                            <p><!--ใส่ Code ตรงนี้--></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>วันที่บัตรหมดอายุ :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><!--ใส่ Code ตรงนี้--></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-1"></div>
                    </div>
                </div>
    </div>
</div>
<?php
	echo $form->close();
	if (isset($_POST['submit'])) {
    //ปี
isset($_POST['zlfot_code'])?$zlfot_code  = $_POST['zlfot_code']:$zlfot_code='';

   $rs = $db->findByPK33('zlfot','user','zoo','zlfot.user_user_id','user.user_id','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_code',$zlfot_code)->execute();

$columns = array('zlfot_code','zlfot_nameth','zlfot_tel','zlfot_datestart','zlfot_dateend');
?>
    <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5'> 
<?php
        $grid = new gridView();
            $grid->pr = 'zlfot_id';
            $grid->header = array('<b><center>รหัส</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>เบอร์โทรศัพท์</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>วันหมดอายุ</center></b>');
            $grid->width = array('20%','30%','20%','15%','15%');
            $grid->name = 'table';
            $grid->renderFromDB($columns,$rs);
}
?>
    </div>     
<?php endif;?>

