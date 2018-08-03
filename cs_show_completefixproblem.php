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
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
	<div class="row">
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
		<div class='col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10'>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h4>รายงานดำเนินการเสร็จ</h4>
			</div>
		  <!-- Nav tabs -->
		  <nav class="nav nav-tabs" role="tablist" style="margin-top: 16px;width:100%">
			  <?php if($user_zoo == 10){?>
				<a class="nav-item nav-link active" href="#zpo" aria-controls="zpo" role="tab" data-toggle="tab" style="color:#EC7063;">องค์การสวนสัตว์</a>
			<?php }
				if($user_zoo == 10 || $user_zoo == 11){
				if($user_zoo == 10){?>
				<a class="nav-item nav-link" href="#dusitzoo" aria-controls="dusitzoo" role="tab" data-toggle="tab" style="color:#AF7AC5;">สวนสัตว์ดุสิต</a>
			<?php }else if($user_zoo == 11){?>
				<a class="nav-item nav-link" href="#dusitzoo" aria-controls="dusitzoo" role="tab" data-toggle="tab" style="color:#AF7AC5;">สวนสัตว์ดุสิต</a>
			<?php }
				}
				if($user_zoo == 10 || $user_zoo == 12){
				if($user_zoo == 10){?>
				<a class="nav-item nav-link" href="#khaokeawzoo" aria-controls="khaokeawzoo" role="tab" data-toggle="tab" style="color:#5DADE2;">สวนสัตว์เปิดเขาเขียว</a>
			<?php }else if($user_zoo == 12){?>
				<a class="nav-item nav-link" href="#khaokeawzoo" aria-controls="khaokeawzoo" role="tab" data-toggle="tab" style="color:#5DADE2;">สวนสัตว์เปิดเขาเขียว</a>
			<?php }
				}
				if($user_zoo == 10 || $user_zoo == 13){
				if($user_zoo == 10){?>
				<a class="nav-item nav-link" href="#chiangmaizoo" aria-controls="chiangmaizoo" role="tab" data-toggle="tab" style="color:#48C9B0;">สวนสัตว์เชียงใหม่</a>
			<?php }else if($user_zoo == 12){?>
				<a class="nav-item nav-link" href="#chiangmaizoo" aria-controls="chiangmaizoo" role="tab" data-toggle="tab" style="color:#48C9B0;">สวนสัตว์เปิดเขาเขียว</a>
			<?php }
				}
				if($user_zoo == 10 || $user_zoo == 14){
				if($user_zoo == 10){?>
				<a class="nav-item nav-link" href="#korachzoo" aria-controls="korachzoo" role="tab" data-toggle="tab" style="color:#58D68D;">สวนสัตว์นครราชสีมา</a>
			<?php }else if($user_zoo == 14){?>
				<a class="nav-item nav-link" href="#korachzoo" aria-controls="korachzoo" role="tab" data-toggle="tab" style="color:#58D68D;">สวนสัตว์นครราชสีมา</a>
			<?php }
				}
				if($user_zoo == 10 || $user_zoo == 15){
				if($user_zoo == 10){?>
				<a class="nav-item nav-link" href="#songkhlazoo" aria-controls="songkhlazoo" role="tab" data-toggle="tab" style="color:#F4D03F;">สวนสัตว์สงขลา</a>
			<?php }else if($user_zoo == 15){?>
				<a class="nav-item nav-link" href="#songkhlazoo" aria-controls="songkhlazoo" role="tab" data-toggle="tab" style="color:#F4D03F;">สวนสัตว์สงขลา</a>
			<?php }
				}
				if($user_zoo == 10 || $user_zoo == 16){
				if($user_zoo == 10){?>
				<a class="nav-item nav-link" href="#ubonzoo" aria-controls="ubonzoo" role="tab" data-toggle="tab" style="color:#EB984E;">สวนสัตว์อุบลราชธานี</a>
			<?php }else if($user_zoo == 16){?>
				<a class="nav-item nav-link" href="#ubonzoo" aria-controls="ubonzoo" role="tab" data-toggle="tab" style="color:#EB984E;">สวนสัตว์อุบลราชธานี</a>
			<?php }
				}
				if($user_zoo == 10 || $user_zoo == 17){
				if($user_zoo == 10){?>
				<a class="nav-link" href="#khonkeanzoo" aria-controls="khonkean" role="tab" data-toggle="tab" style="color:#45B39D;">สวนสัตว์ขอนแก่น</a>
			<?php }else if($user_zoo == 17){?>
				<a class="nav-item nav-link" href="#khonkeanzoo" aria-controls="khonkean" role="tab" data-toggle="tab" style="color:#45B39D;">สวนสัตว์ขอนแก่น</a>
			<?php }
				}
			?>
		  </nav>
		  <!-- Tab panes -->
		  <div class="tab-content">
			<?php if($user_zoo == 10){?>
			<div role="tabpanel" class="tab-pane active inf1" id="zpo" style="padding-left:16;padding-right:16px;">
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
			<div role="tabpanel" class="tab-pane inf2" id="dusitzoo" style="padding-left:16;padding-right:16px;">
			<?php }else if($user_zoo == 11){?>
			<div role="tabpanel" class="tab-pane active inf2" id="dusitzoo" style="padding-left:16;padding-right:16px;">
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
			<div role="tabpanel" class="tab-pane inf1" id="khaokeawzoo" style="padding-left:16;padding-right:16px;">
			<?php }else if($user_zoo == 12){?>
			<div role="tabpanel" class="tab-pane active inf1" id="khaokeawzoo" style="padding-left:16;padding-right:16px;">
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
			<div role="tabpanel" class="tab-pane inf1" id="chiangmaizoo" style="padding-left:16;padding-right:16px;">
			<?php }else if($user_zoo == 13){?>
			<div role="tabpanel" class="tab-pane active inf1" id="chiangmaizoo" style="padding-left:16;padding-right:16px;">
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
			<div role="tabpanel" class="tab-pane inf1" id="korachzoo" style="padding-left:16;padding-right:16px;">
			<?php }else if($user_zoo == 14){?>
			<div role="tabpanel" class="tab-pane active inf1" id="korachzoo" style="padding-left:16;padding-right:16px;">
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
			<div role="tabpanel" class="tab-pane inf1" id="songkhlazoo" style="padding-left:16;padding-right:16px;">
			<?php }else if($user_zoo == 15){?>
			<div role="tabpanel" class="tab-pane active inf1" id="songkhlazoo" style="padding-left:16;padding-right:16px;">
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
			<div role="tabpanel" class="tab-pane inf1" id="ubonzoo" style="padding-left:16;padding-right:16px;">
			<?php }else if($user_zoo == 16){?>
			<div role="tabpanel" class="tab-pane active inf1" id="ubonzoo" style="padding-left:16;padding-right:16px;">
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
					<div role="tabpanel" class="tab-pane inf1" id="khonkeanzoo" style="padding-left:16;padding-right:16px;">
			  <?php }else if($user_zoo == 17){?>
					<div role="tabpanel" class="tab-pane active inf1" id="khonkeanzoo" style="padding-left:16;padding-right:16px;">
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
		<div class='col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1'></div>
	</div>
</div>
<?php
include_once 'cs_viewdetail.php';
    endif;
		?>
