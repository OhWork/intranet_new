<?php if (!empty($_SESSION['user_name'])): 
     $user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
    $status = "'Y'";
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
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs cspbnnt" role="tablist">  
         <?php if($user_zoo == 10){?>
    <li role="presentation" class="active cspb1"><a href="#zpo" aria-controls="zpo" role="tab" data-toggle="tab">องค์การสวนสัตว์</a></li>
    <?php }
        if($user_zoo == 10 || $user_zoo == 11){
            if($user_zoo == 10){?>
    <li role="presentation" class="cspb2"><a href="#dusitzoo" aria-controls="dusitzoo" role="tab" data-toggle="tab">สวนสัตว์ดุสิต</a></li>
    <?php }else if($user_zoo == 11){?>
     <li role="presentation" class="active cspb2"><a href="#dusitzoo" aria-controls="dusitzoo" role="tab" data-toggle="tab">สวนสัตว์ดุสิต</a></li>
    <?php }
        }
        if($user_zoo == 10 || $user_zoo == 12){
        if($user_zoo == 10){?>
    <li role="presentation" class="cspb3"><a href="#khaokeawzoo" aria-controls="khaokeawzoo" role="tab" data-toggle="tab">สวนสัตว์เปิดเขาเขียว</a></li>
    <?php }else if($user_zoo == 12){?>
    <li role="presentation" class="active cspb3"><a href="#khaokeawzoo" aria-controls="khaokeawzoo" role="tab" data-toggle="tab">สวนสัตว์เปิดเขาเขียว</a></li>
    <?php }
        }
        if($user_zoo == 10 || $user_zoo == 13){
            if($user_zoo == 10){?>
    <li role="presentation" class="cspb4"><a href="#chiangmaizoo" aria-controls="chiangmaizoo" role="tab" data-toggle="tab">สวนสัตว์เชียงใหม่</a></li>
    <?php }else if($user_zoo == 12){?>
     <li role="presentation" class="active cspb3"><a href="#chiangmaizoo" aria-controls="chiangmaizoo" role="tab" data-toggle="tab">สวนสัตว์เปิดเขาเขียว</a></li>
    <?php }
        }
        if($user_zoo == 10 || $user_zoo == 14){
            if($user_zoo == 10){?>
    <li role="presentation" class="cspb5"><a href="#korachzoo" aria-controls="korachzoo" role="tab" data-toggle="tab">สวนสัตว์นครราชสีมา</a></li>
    <?php }else if($user_zoo == 14){?>
    <li role="presentation" class="active cspb5"><a href="#korachzoo" aria-controls="korachzoo" role="tab" data-toggle="tab">สวนสัตว์นครราชสีมา</a></li>
    <?php }
        }
        if($user_zoo == 10 || $user_zoo == 15){
         if($user_zoo == 10){?>
    <li role="presentation" class="cspb6"><a href="#songkhlazoo" aria-controls="songkhlazoo" role="tab" data-toggle="tab">สวนสัตว์สงขลา</a></li>
    <?php }else if($user_zoo == 15){?>
    <li role="presentation" class="active cspb6"><a href="#songkhlazoo" aria-controls="songkhlazoo" role="tab" data-toggle="tab">สวนสัตว์สงขลา</a></li>
    <?php }
        }
        if($user_zoo == 10 || $user_zoo == 16){
            if($user_zoo == 10){?>
    <li role="presentation" class="cspb7"><a href="#ubonzoo" aria-controls="ubonzoo" role="tab" data-toggle="tab">สวนสัตว์อุบลราชธานี</a></li>
    <?php }else if($user_zoo == 16){?>
    <li role="presentation" class="active cspb7"><a href="#ubonzoo" aria-controls="ubonzoo" role="tab" data-toggle="tab">สวนสัตว์อุบลราชธานี</a></li>
    <?php }
        }
        if($user_zoo == 10 || $user_zoo == 17){
        if($user_zoo == 10){?>
    <li role="presentation" class="cspb8"><a href="#khonkeanzoo" aria-controls="khonkean" role="tab" data-toggle="tab">สวนสัตว์ขอนแก่น</a></li>
    <?php }else if($user_zoo == 17){?>
    <li role="presentation" class="active cspb8"><a href="#khonkeanzoo" aria-controls="khonkean" role="tab" data-toggle="tab">สวนสัตว์ขอนแก่น</a></li>
    <?php }
        }
    ?>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <?php if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane active inf1" id="zpo">
       <?php
            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_type','1','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
        </div>
    <?php }
        if($user_zoo == 10 || $user_zoo == 11){
        if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane inf2" id="dusitzoo">
    <?php }else if($user_zoo == 11){?>
    <div role="tabpanel" class="tab-pane active inf2" id="dusitzoo">
    <?php
        }               $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','11','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
</div>
<?php }
        if($user_zoo == 10 || $user_zoo == 12){
   if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane inf1" id="khaokeawzoo">
    <?php }else if($user_zoo == 12){?>
    <div role="tabpanel" class="tab-pane active inf1" id="khaokeawzoo">
    <?php
        }
            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','12','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
    </div>
    <?php }
        if($user_zoo == 10 || $user_zoo == 13){ 
            if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane inf1" id="chiangmaizoo">
    <?php }else if($user_zoo == 13){?>
    <div role="tabpanel" class="tab-pane active inf1" id="chiangmaizoo">
   <?php }            
            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','13','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
    </div>
    <?php }
        if($user_zoo == 10 || $user_zoo == 14){
            if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane inf1" id="korachzoo">
    <?php }else if($user_zoo == 14){?>
    <div role="tabpanel" class="tab-pane active inf1" id="korachzoo">
    <?php }            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','14','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
    </div>
    <?php }
        if($user_zoo == 10 || $user_zoo == 15){
    if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane inf1" id="songkhlazoo">
    <?php }else if($user_zoo == 15){?>
    <div role="tabpanel" class="tab-pane active inf1" id="songkhlazoo">
   <?php }
            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','15','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
    </div>
    <?php }
        if($user_zoo == 10 || $user_zoo == 16){
    if($user_zoo == 10){?>
    <div role="tabpanel" class="tab-pane inf1" id="ubonzoo">
    <?php }else if($user_zoo == 16){?>
    <div role="tabpanel" class="tab-pane active inf1" id="ubonzoo">
    <?php }
            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','16','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->change ='#';
			$grid->renderFromDB($columns,$rs);
?>
    </div>
    <?php }
        if($user_zoo == 10 || $user_zoo == 17){
            if($user_zoo == 10){?>
            <div role="tabpanel" class="tab-pane inf1" id="khonkeanzoo">
      <?php }else if($user_zoo == 17){?>
            <div role="tabpanel" class="tab-pane active inf1" id="khonkeanzoo">
     <?php }
            $columns = array('problem_name','problem_date','subzoo_name','subtypetools_name','typetools_name');
			$rs = $db->findByPK66DESC('problem','subzoo','typetools','subtypetools','zoo','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subzoo_subzoo_id','subzoo.subzoo_id','problem.subtypetools_subtypetools_id','subtypetools.subtypetools_id','subtypetools.typetools_typetools_id','typetools.typetools_id','subzoo.zoo_zoo_id','zoo.zoo_id','zoo.zoo_id','17','problem_status',$status,'problem_status,problem_date')->execute();
			$grid = new gridView();
			$grid->pr = 'problem_id';
			$grid->sts = 'problem_status';
			$grid->header = array('<b><center>ชื่อ-สกุล</center></b>','<b><center>วันและเวลา</center></b>','<b><center>สถานที่</center></b>','<b><center>ปัญหา</center></b>','<b><center>ชนิด</center></b>','<b>#</b>','<b><center>สถานะ</center></b>');
			$grid->width = array('15%','10%','20%','20%','15%','5%','5%');
			$grid->change ='#';
 			$grid->view = '#';
 			$grid->viewtxt ='รายละเอียด';
 			$grid->name = 'table';
			$grid->renderFromDB($columns,$rs);
?>
     </div>
     <?php }?>
  </div>

</div>
<?php
include_once 'cs_viewdetail.php';
    endif;
		?>