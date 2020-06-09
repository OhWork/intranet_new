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
<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 printdisplaynone' id="maincontent">
    <div class='row'>
		<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
			<div class='row'>
                            <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3'>
                                <h4>ตรวจสอบรายชื่อสมาชิกสมาชิก</h4>
                            </div>
                            <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3'>
				<div class='row'>
                                    <div class='col-xl-2 col-lg-4 col-md-5'>
                                        <p class="pt-4 mb-0">กรุณากรอกหมายเลขบัตรสมาชิก</p>
                                    </div>
                                    <div class='col-xl-3 col-lg-4 col-md-5 col-sm-12 col-12'>
                                        <div class='row'>
                                            <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                                                <p class="mb-0" style="color:#b3b3b3">เช่น 000-000-00000</p>
                                            </div>
                                            <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                                                <?php echo $txtcode ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=''>
					<?php echo $button ?>
                                    </div>
                                    <div class='ml-auto mr-3'>
					<a href="admin_index.php?url=zlfot_add_member.php" class="btn btn-outline-success col-md-12 zloft_bt2"><i class="fas fa-user-plus mr-2"></i>เพิ่มสมาชิก</a>
                                    </div>
				</div>
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

                                                        $grid = new gridView();
                                                                    $grid->pr = 'zlfot_id';
                                                                    $grid->header = array('<b><center>รหัส</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>เบอร์โทรศัพท์</center></b>','<b><center>วันที่สมัคร</center></b>','<b><center>หมดอายุ</center></b>');
                                                                    $grid->width = array('12%','15%','15%','25%','25%','8%');
                                                                    $grid->name = 'table';
                                                                    $grid->renderFromDB($columns,$rs);
}
?>
<?php endif;?>

