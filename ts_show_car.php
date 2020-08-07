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
    $columns = array('typecar_name','car_lp');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

                $rs = $db->findByPK2('car','typecar','car.typecar_typecar_id','typecar.typecar_id')->execute();   ?> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                            <div class="col-4">
                                <h4>รายการรถยนตร์</h4>
                            </div>
                            <div class="col-2 ml-auto">
                                 <a href="admin_index.php?url=ts_add_car.php" class="btn btn-success col-12">เพิ่มรถยนตร์ <i class="fas fa-car-alt"></i></a>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-body">
                                        <div class="table-responsive">
			<?php 
                                                        $grid = new gridView();
                                                                    $grid->pr = 'car_id';
                                                                    $grid->header = array('<b><center>ประเภทรถ</center></b>','<b><center>ทะเบียนรถ</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('40%','40%','20%');
                                                                    $grid->edit = '#';
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