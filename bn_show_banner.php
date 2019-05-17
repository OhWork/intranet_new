
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
		<div class="col-xl-1col-lg-1 col-md-1 col-sm-1 col-1"></div>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="float:left;">
						<h4>รายการแบนเนอร์</h4>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" style="float:left;">
						<a href="admin_index.php?url=bn_add_banner.php" class="btn btn-success col-12">เพิ่มแบนเนอร์</a>
					</div>
				</div>
				<div class="tab-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2">
					<div role="tabpanel" class="tab-pane active" id="wait" style="padding-left:16px;padding-right:16px;">
					<?php
						$columns = array('bn_name');
						$rs = $db->findAll('bn')->execute();
								$grid = new gridView();
								$grid->pr = 'bn_id';
								$grid->header = array('<b><center>แบบสำรวจ</center></b>','<b><center>#</center></b>');
								$grid->width = array('80%','20%');
					 			$grid->edit = 'admin_index.php?url=bn_add_banner.php';
					 			$grid->name = 'table';
					 			$grid->edittxt ='แก้ไข';
								$grid->renderFromDB($columns,$rs);
					   ?>
					   
					</div>
				</div>
			</div>
		</div>
		<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
</div>