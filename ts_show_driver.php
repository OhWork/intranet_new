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
    $columns = array('driver_name','driver_tel','driver_lineid');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

    $rs = $db->findALL('driver')->execute();  ?> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                            <div class="col-4">
                                <h4>รายชื่อคนขับรถยนตร์</h4>
                            </div>
                            <div class="col-3 ml-auto">
                                <a href="admin_index.php?url=ts_add_driver.php" class="btn btn-success col-12">เพิ่มคนขับรถยนตร์ <i class="fas fa-user-plus"></i></a>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-body">
                                        <div class="table-responsive">
			<?php 
                                                        $grid = new gridView();
                                                                    $grid->pr = 'driver_id';
                                                                    $grid->header = array('<b><center>ชื่อ - นามสกุล</center></b>','<b><center>เบอร์ติดต่อ</center></b>','<b><center>Line-ID</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('40%','40%','20%');
                                                                    $grid->edit = 'admin_index.php?url=ts_add_driver.php';
                                                                    $grid->name = 'table';
                                                                    $grid->edittxt ='แก้ไข';
                                                                    $grid->renderFromDB($columns,$rs);
                                                                    endif;
                                                            ?>
                                        </div>
							</div>
                        </div>
				</div>
        </div>
</div>