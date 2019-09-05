<?php
$status = "'N'";
?>
<script>
            $(document).ready(function() {

                $('table.table').DataTable( {
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
	<div class="row">
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h4>รายการแจ้งขอใช้ระบบ</h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
		   <?php
				$columns = array('reguser_name_th','reguser_date','subzoo_name','zoo_name');
				$rs = $db->findByPK33DESC('reguser','subzoo','zoo','reguser.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','reguser_status',$status,'reguser_date')->execute();
				$grid = new gridView();
				$grid->pr = 'reguser_id';
				$grid->sts_reg = 'reguser_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>ฝ่าย</center></b>','<b><center>สำนัก</center></b>','<b><center>รายละเอียด</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','5%','12%');
                                                                $grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
	?>
		</div>
                    </div>
        </div>
</div>
<?php
include_once 'cs_viewregister.php';
		?>
