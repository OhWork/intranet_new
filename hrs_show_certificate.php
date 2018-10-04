
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
	<div class='row'>
		<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10' style="background-color:#ffffff;">
			<div class='row'>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh'>
				<h4>รายการหนังสือรับรอง</h4>
				</div>
				<div class="tab-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pb-3">
					<div role="tabpanel" class="tab-pane active" id="wait" style="padding-left:16px;padding-right:16px;">
					<?php
						$columns = array('typectf_name','hrctf_name','hrctf_position','zoo_name');
						$rs = $db->findByPK32DESC('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_datereg')->execute();
								$grid = new gridView();
								$grid->pr = 'hrctf_id';
								$grid->sts_hrs = 'hrctf_status';
								$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>ตำแหน่ง</center></b>','<b><center>สังกัด</center></b>','<b><center>สถานะ</center></b>');
								$grid->width = array('30%','20%','15%','15%','20%');
					// 			$grid->edit = '#';
								$grid->name = 'table';
								$grid->change = '#';
								$grid->renderFromDB($columns,$rs);
					   ?>
					</div>
				</div>
			</div>
		</div>
		<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
</div>
