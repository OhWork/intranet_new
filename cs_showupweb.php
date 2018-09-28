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
    ?>
            <div class="col-md-12" style="float: left;margin-top: 10px;">
            <?php
    $columns = array('upweb_name','upweb_detail','zoo_name','subzoo_name');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $button = new buttonok('ค้นหา','','btn btn-primary','submit');
            $rs = $db->findByPK33('upweb','zoo','subzoo','subzoo_subzoo_id','subzoo_id','subzoo_zoo_zoo_id','zoo_id','upweb_status',"'W'")->execute();



			$grid = new gridView();
			$grid->pr = 'upweb_id';
			$grid->header = array('<b><center>ชื่อผู้ขอ</center></b>','<b><center>รายละเอียด</center></b>','<b><center>สำนัก/สวน</center></b>','<b><center>ฝ่าย</center></b>','<b><center>#</center></b>');
			$grid->width = array('30%','40%','10%','10%','10%');
			$grid->edit = 'admin_index.php?url=cs_editupweb.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
            </div>
            </div>
