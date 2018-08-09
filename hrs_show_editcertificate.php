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
                },
                "autoWidth": false
    } );
} );
</script>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
    <nav class="nav nav-tabs" role="tablist" style="margin-top: 16px;">
            <a class="nav-item nav-link active" href="#wait" aria-controls="wait" role="tab" data-toggle="tab" style="color:#EC7063;" aria-selected="true">รอการดำเนินการ</a>
			<a class="nav-item nav-link" href="#wait2" aria-controls="wait" role="tab" data-toggle="tab" style="color:#AF7AC5;" aria-selected="false">รอการอนุมัติ</a>
			<a class="nav-item nav-link" href="#pass" aria-controls="pass" role="tab" data-toggle="tab" style="color:#5DADE2;" aria-selected="false">อนุมัติแล้ว</a>
			<a class="nav-item nav-link" href="#nopass" aria-controls="nopass" role="tab" data-toggle="tab" style="color:#48C9B0;" aria-selected="false">ไม่อนุมัติ</a>
	  </nav>
	<div class='row'>
		<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
			<div class='row'>
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
					<h4>รายการหนังสือรับรอง</h4>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    				<div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active inf1" role="tabpanel" id="wait" style="padding-left:16;padding-right:16px;">
    					<?php
    						$columns = array('typectf_name','hrctf_name','hrctf_position','zoo_name');
    						$rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'S'")->execute();
    								$grid = new gridView();
    								$grid->pr = 'hrctf_id';
    								$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>ตำแหน่ง</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
    								$grid->width = array('30%','20%','15%','15%','20%');
    								$grid->edit = 'admin_index.php?url=hrs_status.php';
    								$grid->name = 'table';
    								$grid->edittxt ='สถานะ';
    								$grid->renderFromDB($columns,$rs);
    					?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade show active inf1" role="tabpanel" id="wait2" style="padding-left:16;padding-right:16px;">
					<?php
						$columns = array('typectf_name','hrctf_name','hrctf_position','zoo_name');
						$rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'W'")->execute();
								$grid = new gridView();
								$grid->pr = 'hrctf_id';
								$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>ตำแหน่ง</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
								$grid->width = array('30%','20%','15%','15%','20%');
								$grid->edit = 'admin_index.php?url=hrs_status.php';
								$grid->name = 'table';
								$grid->edittxt ='สถานะ';
								$grid->renderFromDB($columns,$rs);
					?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade show active inf1" role="tabpanel" id="pass" style="padding-left:16;padding-right:16px;">
					<?php
						$columns = array('typectf_name','hrctf_name','hrctf_position','zoo_name');
						$rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'Y'")->execute();
								$grid = new gridView();
								$grid->pr = 'hrctf_id';
								$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>ตำแหน่ง</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
								$grid->width = array('30%','20%','15%','15%','20%');
								$grid->edit = 'admin_index.php?url=hrs_status.php';
								$grid->name = 'table';
								$grid->edittxt ='สถานะ';
								$grid->renderFromDB($columns,$rs);
					?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade show active inf1" role="tabpanel" id="nopass" style="padding-left:16;padding-right:16px;">
					<?php
						$columns = array('typectf_name','hrctf_name','hrctf_position','zoo_name');
						$rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'N'")->execute();
								$grid = new gridView();
								$grid->pr = 'hrctf_id';
								$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>ตำแหน่ง</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
								$grid->width = array('30%','20%','15%','15%','20%');
								$grid->edit = 'admin_index.php?url=hrs_status.php';
								$grid->name = 'table';
								$grid->edittxt ='สถานะ';
								$grid->renderFromDB($columns,$rs);
					?>
                        </div>
    				</div>
				</div>
			</div>
		</div>
		<div class='col-xl-1col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
</div>

