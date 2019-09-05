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
    $id = $_GET['id'];
    if($id == 1){
        $type = 'zoo.zoo_type';
        $zoo_name = 'องค์การสวนสัตว์';
    }else{
        $type = 'zoo.zoo_id';
    $zrs = $db->findByPK('zoo','zoo_id',$id)->executeAssoc();
    $zoo_name = $zrs['zoo_name'];
    }
   $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
   $rs = $db->findByPK56DESCLIMIT('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id',$type,$id,'problem_status,problem_date',50)->execute();
    $form = new form();
    //$rs = $db->findByPK44ASC('ipzpo','subzoo','zoo','typetools','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo.typetools_typetools_id','typetools.typetools_id',$type,$id,'ipzpo_id')->execute();
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
	<div class="row">
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h4>รายการแจ้งซ่อมคอมพิวเตอร์ออนไลน์ ของ <?php echo $zoo_name ?></h4>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
			<?php
				$grid = new gridView();
				$grid->pr = 'problem_id';
				$grid->sts = 'problem_status';
				$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b><center>#</center></b>','<b><center>สถานะ</center></b>');
				$grid->width = array('15%','10%','15%','20%','15%','10%','15%');
				$grid->view = '#';
				$grid->viewtxt =' รายละเอียด';
				$grid->name = 'table';
				$grid->change = '#';
				$grid->renderFromDB($columns,$rs);
			?>
			</div>
		</div>
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
</div>
<?php
    include_once 'cs_viewdetail.php';
    ?>
