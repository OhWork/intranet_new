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
    if (!empty($_SESSION['user_name'])):
    $columns = array('ipzpo_address','ipzpo_user','typetools_name','ipzpo_detail','ipzpo_comname','ipzpo_comgroup','ipzpo_location','subzoo_name','zoo_name');
    $form = new form();
    $rs = $db->findByPK44ASC('ipzpo','subzoo','zoo','typetools','ipzpo.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','ipzpo.typetools_typetools_id','typetools.typetools_id',$type,$id,'ipzpo_id')->execute();
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
	<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                                <div class="row">
                                        <div>
                                                <h4>IP-address ของ <?php echo $zoo_name ?></h4>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<?php
				$grid = new gridView();
				$grid->pr = 'ipzpo_id';
				$grid->header = array('<b><center>IP-Address</center></b>','<b><center>ชื่อ/ระบบ</center></b>','<b><center>Type</center></b>','<b><center>รายละเอียด</center></b>','<b><center>ชื่อคอมพิวเตอร์</center></b>','<b><center>กลุ่มเครือข่าย</center></b>','<b><center>สถานที่</center></b>','<b><center>ฝ่าย</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
				$grid->width = array('6%','20%','10%','10%','7%','3%','10%','15%','14%','5%');
				$grid->edit = 'admin_index.php?url=cs_add_ip.php';
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
<?php endif; ?>
