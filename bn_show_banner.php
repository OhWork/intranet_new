
<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 25, 100, -1], [10, 25, 100, "ทุกหน้า"]],
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
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div>
                                        <h4>รายการแบนเนอร์</h4>
		</div>
		<div class="ml-auto">
                                        <a href="admin_index.php?url=bn_add_banner.php" class="btn btn-success col-12">เพิ่มแบนเนอร์</a>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
                                                <div role="tabpanel" class="tab-pane active" id="wait">
					<?php
						$columns = array('bn_name');
						$rs = $db->findAll('bn')->execute();
								$grid = new gridView();
								$grid->pr = 'bn_id';
								$grid->header = array('<b><center>แบบสำรวจ</center></b>','<b><center>#</center></b>');
								$grid->width = array('90%','10%');
					 			$grid->edit = 'admin_index.php?url=bn_add_banner.php';
					 			$grid->name = 'table';
					 			$grid->edittxt ='แก้ไข';
								$grid->renderFromDB($columns,$rs);
					   ?>
					   
			</div>
                                        </div>
		</div>
                        </div>
	</div>
        </div>
</div>
