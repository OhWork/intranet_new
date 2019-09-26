<?php

    if (!empty($_SESSION['user_name'])):
?>
<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[100, 200, 254, -1], [100, 200, 254, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    } );
} );
            $(document).ready(function() {

                $('#table2').DataTable( {
                "ordering": false,
                "lengthMenu": [[100, 200, 254, -1], [100, 200, 254, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    } );
} );
            $(document).ready(function() {

                $('#table3').DataTable( {
                "ordering": false,
                "lengthMenu": [[100, 200, 254, -1], [100, 200, 254, "ทุกหน้า"]],
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
    $id = $_GET['id'];
    $cfrs = $db->findByPK('conferroom','conferroom_id',$id)->executeAssoc();
    $conferroom_name = $cfrs['conferroom_name'];?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div>
                                        <h4><?php echo $conferroom_name ?></h4>
		</div>
			<nav class="nav nav-tabs" role="tablist" style="margin-top: 16px;width:100%">
				<a class="nav-item nav-link active" href="#wait" aria-controls="wait" role="tab" data-toggle="tab" style="color:#45B39D;">รอการอนุมัติ</a>
				<a class="nav-item nav-link" href="#pass" aria-controls="pass" role="tab" data-toggle="tab" style="color:#58D68D;">อนุมัติ</a>
				<a class="nav-item nav-link" href="#nopass" aria-controls="nopass" role="tab" data-toggle="tab" style="color:#EC7063;">ไม่อนุมัติ</a>
				<a class="nav-item nav-link" href="#cancelpass" aria-controls="cancelpass" role="tab" data-toggle="tab" style="color:#EC7063;">ยกเลิก</a>
			</nav>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="wait">
	<?php
		$columns = array('eventconfer_date','eventconfer_uname','headncf_name','eventconfer_story','eventconfer_psname','eventconfer_start','eventconfer_end','zoo_name');
		$rs = $db->findByPK45DESC('eventconfer','conferroom','zoo','headncf','confer_confer_id','conferroom_id','conferroom_id',$id,'subzoo_zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','eventconfer_status',"'W'",'eventconfer_id')->execute();
				$grid = new gridView();
				$grid->pr = 'eventconfer_id';
				$grid->header = array('<b><center>เวลาการจองห้องประชุม</center></b>','<b><center>ผู้ขอใช้ห้องประชุม</center></b>', '<b><center>ประเภทเรื่อง</center></b>','<b><center>เรื่อง</center></b>','<b><center>ประธานในที่ประชุม</center></b>','<b><center>เวลาเริ่มประชุม</center></b>','<b><center>เวลาสิ้นสุดการประชุม</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
				$grid->width = array('10%','10%','20%','10%','10%','10%','14%','5%');
				$grid->edit = 'admin_index.php?url=cf_status.php';
				$grid->name = 'table';
				$grid->edittxt ='สถานะ';
				$grid->renderFromDB($columns,$rs);
	   ?> 	</div>
			<div role="tabpanel" class="tab-pane" id="pass">
	<?php
		$columns = array('eventconfer_date','eventconfer_uname','headncf_name','eventconfer_story','eventconfer_psname','eventconfer_start','eventconfer_end','zoo_name');
		$rs = $db->findByPK45DESC('eventconfer','conferroom','zoo','headncf','confer_confer_id','conferroom_id','conferroom_id',$id,'subzoo_zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','eventconfer_status',"'Y'",'eventconfer_id')->execute();


				$grid = new gridView();
				$grid->pr = 'eventconfer_id';
				$grid->header = array('<b><center>เวลาการจองห้องประชุม</center></b>','<b><center>ผู้ขอใช้ห้องประชุม</center></b>', '<b><center>ประเภทเรื่อง</center></b>','<b><center>เรื่อง</center></b>','<b><center>ประธานในที่ประชุม</center></b>','<b><center>เวลาเริ่มประชุม</center></b>','<b><center>เวลาสิ้นสุดการประชุม</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
				$grid->width = array('10%','10%','20%','10%','10%','10%','14%','5%');
				$grid->edit = 'admin_index.php?url=cf_status.php';
				$grid->name = 'table2';
				$grid->edittxt ='สถานะ';
				$grid->renderFromDB($columns,$rs);
	   ?> 	</div>
			<div role="tabpanel" class="tab-pane" id="nopass">
	<?php
		$columns = array('eventconfer_date','eventconfer_uname','headncf_name','eventconfer_story','eventconfer_psname','eventconfer_start','eventconfer_end','zoo_name');
		$rs = $db->findByPK45DESC('eventconfer','conferroom','zoo','headncf','confer_confer_id','conferroom_id','conferroom_id',$id,'subzoo_zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','eventconfer_status',"'N'",'eventconfer_id')->execute();
				$grid = new gridView();
				$grid->pr = 'eventconfer_id';
				$grid->header = array('<b><center>เวลาการจองห้องประชุม</center></b>','<b><center>ผู้ขอใช้ห้องประชุม</center></b>', '<b><center>ประเภทเรื่อง</center></b>','<b><center>เรื่อง</center></b>','<b><center>ประธานในที่ประชุม</center></b>','<b><center>เวลาเริ่มประชุม</center></b>','<b><center>เวลาสิ้นสุดการประชุม</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
				$grid->width = array('10%','10%','20%','10%','10%','10%','14%','5%');
				$grid->edit = 'admin_index.php?url=cf_status.php';
				$grid->name = 'table3';
				$grid->edittxt ='สถานะ';
				$grid->renderFromDB($columns,$rs);
	   ?> 	</div>
			<div role="tabpanel" class="tab-pane" id="cancelpass">
	<?php
		$columns = array('eventconfer_date','eventconfer_uname','headncf_name','eventconfer_story','eventconfer_psname','eventconfer_start','eventconfer_end','zoo_name');
		$rs = $db->findByPK45DESC('eventconfer','conferroom','zoo','headncf','confer_confer_id','conferroom_id','conferroom_id',$id,'subzoo_zoo_zoo_id','zoo_id','headncf_headncf_id','headncf_id','eventconfer_status',"'C'",'eventconfer_id')->execute();
				$grid = new gridView();
				$grid->pr = 'eventconfer_id';
				$grid->header = array('<b><center>เวลาการจองห้องประชุม</center></b>','<b><center>ผู้ขอใช้ห้องประชุม</center></b>', '<b><center>ประเภทเรื่อง</center></b>','<b><center>เรื่อง</center></b>','<b><center>ประธานในที่ประชุม</center></b>','<b><center>เวลาเริ่มประชุม</center></b>','<b><center>เวลาสิ้นสุดการประชุม</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
				$grid->width = array('10%','10%','20%','10%','10%','10%','14%','5%');
				$grid->edit = 'admin_index.php?url=cf_status.php';
				$grid->name = 'table3';
				$grid->edittxt ='สถานะ';
				$grid->renderFromDB($columns,$rs);
	   ?> 	</div>
	</div>
	</div>
	</div>
                </div>
        </div>
	</div>
                </div>
<?php endif; ?>
