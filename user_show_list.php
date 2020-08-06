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
            $rs = $db->findByPK32DESC('user','subzoo','zoo','user.subzoo_subzoo_id','subzoo.subzoo_id','subzoo.zoo_zoo_id','zoo.zoo_id','user_id')->execute();
            $page_cache = acmeCache::fetch('cache_showlist', 10);
        if(!$page_cache){
	ob_start("callback");
            ?> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div>
                                        <h4>รายชื่อผู้ใช้ระบบ</h4>
		</div>
		<div class="ml-auto">
                                        <a href="admin_index.php?url=user_add_user.php" class="btn btn-success col-12"><span data-feather="user-plus"></span></a>
		</div>
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<?php 
                                                        $grid = new gridView();
                                                                    $grid->pr = 'user_id';
                                                                    $grid->header = array('<b><center>User</center></b>','<b><center>ชื่อ</center></b>','<b><center>นามสกุล</center></b>','<b><center>ฝ่าย</center></b>','<b><center>สังกัด</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('12%','15%','15%','25%','25%','8%');
                                                                    $grid->edit = 'admin_index.php?url=user_add_user.php';
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
<?php 
    $page_cache= ob_get_contents();
    ob_end_flush();
        acmeCache::save('cache_showlist',$page_cache);
        }else{
            echo $page_cache;
            echo 'Cache Data';
}
                                                                    endif;
?>