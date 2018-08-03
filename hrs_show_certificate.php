
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

    <div class='col-md-12' style="padding-top:16px;"><h4>รายการหนังสือรับรอง</h4></div>


    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active inf1" id="wait" style="padding-left:16;padding-right:16px;">
<?php
    $columns = array('typectf_name','hrctf_name','hrctf_position','zoo_name');
    $rs = $db->findByPK33('hrctf','typectf','zoo','typectf_typectf_id','typectf_id','zoo_zoo_id','zoo_id','hrctf_status',"'S'")->execute();


			$grid = new gridView();
			$grid->pr = 'hrctf_id';
			$grid->sts = 'hrctf_status';
			$grid->header = array('<b><center>หนังสือรับรอง</center></b>','<b><center>ชื่อ-นามสกุล</center></b>','<b><center>ตำแหน่ง</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
			$grid->width = array('30%','20%','15%','15%','20%');
// 			$grid->edit = '#';
			$grid->name = 'table';
			$grid->change = '#';
			$grid->renderFromDB($columns,$rs);
   ?> </div>
    </div>
