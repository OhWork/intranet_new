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
    $columns = array('typecar_name','car_lp','car_brand','car_model','car_seat');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

                $rs = $db->findByPK22('car','typecar','car.typecar_typecar_id','typecar.typecar_id','car_status',1)->execute();   ?> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                            <div class="col-4">
                                <h4>รายการรถยนตร์</h4>
                            </div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-body">
                                        <div class="table-responsive">
			<?php 
                                                        $grid = new gridView();
                                                                    $grid->pr = 'car_id';
                                                                    $grid->header = array('<b><center>ประเภทรถ</center></b>','<b><center>ทะเบียนรถ</center></b>','<b><center>ยี้ห้อ</center></b>','<b><center>รุ่น</center></b>','<b><center>ที่นั่ง</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('15%','15%','20%','20%','15%','10%');
                                                                    $grid->edit = 'index.php?url=ts_reservecar.php';
                                                                    $grid->name = 'table';
                                                                    $grid->edittxt ='จอง';
                                                                    $grid->renderFromDB($columns,$rs);
                                                            ?>
                                        </div>
							</div>
                        </div>
				</div>
        </div>
</div>