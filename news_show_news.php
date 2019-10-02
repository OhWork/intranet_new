<script>
            $(document).ready(function() {

                $('#table').DataTable( {
                "ordering": false,
                "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "ทุกหน้า"]],
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
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card-header">
                        <div class="row">
                                <div class="ml-auto">
                                    <h4><a href="admin_index.php?url=news_add_news.php" class="btn btn-success col-12">เพิ่มข่าว <span data-feather="plus"></span></a></h4>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 card-body">
                                        <div class="table-responsive">
			<?php
		    $rs = $db->findByPK21DESC('news','user','user_user_id','user_id','news_id')->execute();
                                    $columns = array('news_head','news_datestart','news_dateend','user_name');

			$grid = new gridView();
				$grid->pr = 'news_id';
				$grid->newdesign = 'typeDesignnews_id';
				$grid->header = array('<b><center>หัวข้อข่าว</center></b>','<b><center>วันที่เริ่ม</center></b>','<b><center>วันที่สิ้นสุด</center></b>','<b><center>ผู้ลงข่าว</center></b>','<b><center>#</center></b>');
				$grid->width = array('15%','14%','14%','14%','5%');
				$grid->editdrop = 'admin_index.php?url=news_add_news.php';
				$grid->name = 'table';
				$grid->edittxt ='แก้ไข';
				$grid->editextsup ='แก้ไขหัวข้อข่าว';
				$grid->editextsup2 ='แก้ไขแก้ไขรายละเอียดข่าว';
				$grid->renderFromDB($columns,$rs);
				?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
