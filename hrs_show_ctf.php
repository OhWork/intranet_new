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
</script>
<?php
    $id = $_GET['id'];
    $cfrs = $db->findByPK('hrctf','confer_id',$id)->executeAssoc();
    $confer_name = $cfrs['confer_name'];?>
    <div class='col-md-12' style="padding-top:16px;"><h4>รายการหนังสือรับรอง</h4></div>


    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active inf1" id="wait" style="padding-left:16;padding-right:16px;">
<?php
    $columns = array('typectf_name','hrctf_name');
    $rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'S'")->execute();


			$grid = new gridView();
			$grid->pr = 'eventconfer_id';
			$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>#</center></b>');
			$grid->width = array('10%','10%','20%','10%','10%','10%','14%','5%');
			$grid->edit = 'admin_index.php?url=cf_status.php';
			$grid->name = 'table';
			$grid->edittxt ='สถานะ';
			$grid->renderFromDB($columns,$rs);
   ?> </div>
    </div>
    <?php
			endif;
		?>
