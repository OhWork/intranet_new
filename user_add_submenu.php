<?php
if (!empty($_SESSION['user_name'])):
$id = $_GET['id'];
  $form = new form();
  $lbsubmenuname = new label("เมนูย่อย :");
  $lbsubmenulink = new label("ลิ้ง :");
  $lbsubmenuno = new label("ลำดับ :");
  $lbradiosubmenu = new label("สถานะ :");
  $txtsubmenuname = new textfield('submenu_name','','form-control','');
  $txtsubmenulink = new textfield('submenu_link','','form-control','');
  $txtsubmenuno = new textfield('submenu_no','','form-control','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");
  $selectmenu = new SelectFromDB();
  $selectmenu->name = 'menu_menu_id';
  $selectmenu->lists = 'โปรดระบุ เมนูย่อย';
  $radiosubmenu = new radioGroup();
  $radiosubmenu->name = 'submenu_enable';
  if(empty($id)){
        $radiosubmenu->add('ใช้งาน',1,'checked');
        $radiosubmenu->add('ไม่ใช้งาน',0,'');    
  }
  if(!empty($_GET['id'])){
	$r = $db->findByPK('submenu','submenu_id',$id)->executeRow();
	$txtsubmenuname->value = $r['submenu_name'];
	$txtsubmenuno->value = $r['submenu_no'];
	if($r["submenu_enable"] == 1){ 
    	$radiosubmenu->add('ใช้งาน',1,'checked');
    	$radiosubmenu->add('ไม่ใช้งาน',0,'');
    	}else if($r['submenu_enable'] == 0){
        $radiosubmenu->add('ใช้งาน',1,'');
        $radiosubmenu->add('ไม่ใช้งาน',0,'checked');
    	}
	}
	
  echo $form->open("form_reg","form","maxw","user_insert_submenu.php","");
  if(empty($_GET['id'])){ ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">  
			<div class='col-md-12' style="padding-top:14px;">
				<h4>เพิ่มเมนูย่อย</h4>
			</div>
			<div class='col-md-12'><?php echo $lbmenu.$selectmenu->selectFromTB('menu','menu_id','menu_name',$r['menu_menu_id']); ?></div>
			<div class='col-md-12' style="padding-top:16px;">
				<div class='row'>
					<div class='col-md-2' style='padding-top:8px;'><?php echo $lbsubmenuname; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubmenuname; ?></div>
				</div>
			</div>
			<?php  }
			  if(!empty($_GET['id'])){ ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class='col-md-12'style="padding-top:14px;">
				<h4>แก้ไข</h4>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2'><?php echo $lbsubmenuname; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubmenuname; ?></div>
				</div>
			</div>
			 <?php } ?>
			 <div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2' style="padding-top:8px;"><?php echo $lbsubmenulink; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubmenulink; ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2' style="padding-top:8px;"><?php echo $lbsubmenuno; ?></div>
					<div class='col-md-8 form-group has-feedback'><?php echo $txtsubmenuno; ?></div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='row'>
					<div class='col-md-2' style="padding-top:8px;"><?php echo $lbradiomenuzoo; ?></div>
					<div class='col-md-8' style="padding-top:8px;"><?php echo $radiomenuzoo; ?></div>
				</div>
			</div>
			<div class='col-md-12' style="padding-top:16px;">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<input type='hidden' name='submenu_id' value="<?php echo $_GET['id']; ?>"/>
					<?php echo $submit; ?>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
			<?php echo $form->close();
						endif;
			?>
		</div>
		<div class="col-md-3"></div>		
	</div>	
</div>