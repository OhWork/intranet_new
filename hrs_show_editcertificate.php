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

    <div class='col-md-12' style="padding-top:16px;"><h4>รายการหนังสือรับรอง</h4></div>

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

