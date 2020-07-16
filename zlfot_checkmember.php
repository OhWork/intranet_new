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
                $txtcode = new textfield('zlfot_code','','form-control zlfot_inp','','');
	$button = new buttonok('','','btn btn-primary col-12 zloft_bt fas fa-search','submit');
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
                                        <p class="pt-4 pl-3 mb-0" style="color: #4e555b">กรุณากรอกหมายเลขบัตรสมาชิก</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mt-3">
                                                <?php echo $txtcode ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" id="" class="btn btn-primary col-12 zloft_bt" name="submit" value=""><i class="fas fa-search"></i></button>
                                    </div>
                                    <div class="ml-auto mr-3">
                                        <a href="admin_index.php?url=zlfot_add_card.php" class="btn btn-success col-md-12 zloft_bt2" title="เพิ่มสมาชิกสโมสรผู้รักสวนสัตว์"><i class="fas fa-plus zloft-f2"></i><i class="far fa-id-card zloft-f ml-2"></i></a>
                                    </div>
				</div>
                            </div>
                        </div>
                </div>
        

<?php
	echo $form->close();
	if (isset($_POST['submit'])) {

                isset($_POST['zlfot_code'])?$zlfot_code  = $_POST['zlfot_code']:$zlfot_code='';
                $rs = $db->findByPK44('zlfot','user','typezlfot','zoo','zlfot.user_user_id','user.user_id','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_id','zlfot_code',$zlfot_code)->executeAssoc();
?>
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
                                            <p><?php echo $rs['zlfot_code']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>ประเภท :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['typezlfot_name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>ชื่อ-นามสกุล :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['zlfot_nameth']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>หมายเลขโทรศัพท์ :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['zlfot_tel']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>วันที่สมัคร :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['zlfot_datestart']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>วันที่บัตรหมดอายุ :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['zlfot_dateend']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-1"></div>
                    </div>
                </div>
        
<?php
        }
?>
        
    </div>
</div>
    </div>     
<?php endif;?>

