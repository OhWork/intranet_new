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
    $columns = array('user_user','user_name','user_last','subzoo_name','zoo_name');
    $row = "<div class='row'>";
    $rowend = "</div>";
    $form = new form();
    $labelsearchipzpo = new label('ค้นหา');

			$rs2 = "user,subzoo,zoo  where ipzpo.subzoo_subzoo_id = subzoo.subzoo_id && subzoo.zoo_zoo_id = zoo.zoo_id ";
            $rs = $db->findByPK32('user','subzoo','zoo','user.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id')->execute();  ?> 
            <div class='col-md-12' style="margin-top: 10px;">
                <h3>รายชื่อผู้ใช้ระบบ</h3>
            </div>
<!--             <div class='col-sm-4 col-md-offset-3'>".$searchipzpo.$rowend.$rowend; -->

			<?php 
            $grid = new gridView();
			$grid->pr = 'user_id';
			$grid->header = array('<b><center>User</center></b>','<b><center>ชื่อ</center></b>','<b><center>นามสกุล</center></b>','<b><center>ฝ่าย</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
			$grid->width = array('12%','15%','15%','25%','25%','8%');
			$grid->edit = 'admin_index.php?url=admin_user_index.php&url2=user_add_user.php';
			$grid->name = 'table';
			$grid->edittxt ='แก้ไข';
			$grid->renderFromDB($columns,$rs);
			endif;
		?>
