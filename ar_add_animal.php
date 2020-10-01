<?php
if (!empty($_SESSION['user_name'])):
$id = $_GET['id'];
  $form = new form();
  $lbanimaltype = new label("ชนืดของสัตว์");
  $lbanimalname = new label("ชื่อสัตว์");
  $lbanimalcm = new label("ชื่อสัตว์(ชื่อสามัญ)");
  $lbanimalsc = new label("ชื่อสัตว์(วิทยาศาสตร์)");
  $txtanimalname = new textfield('animal_nameth','','form-control','');
  $txtanimalnamecm = new textfield('animal_namecm','','form-control','');
  $txtanimalnamesc = new textfield('animal_namesc','','form-control','');
  $submit = new buttonok("ยืนยัน","","btn btn-success col-12","");
  $selecttypeanimal = new SelectFromDB();
  $selecttypeanimal->name = 'animal_animaltype_id';
  $selecttypeanimal->lists = 'โปรดระบุ ชนิดของสัตว์';
  if(!empty($_GET['id'])){
	$r = $db->findByPK('animal','animal_id',$id)->executeRow();
	$txtanimalname->value = $r['animal_nameth'];
	$txtanimalnamecm->value = $r['animal_namecm'];
	$txtanimalnamesc->value = $r['animal_namesc'];
	}
	
  echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","ar_insert_animal.php","");
  if(empty($_GET['id'])){ ?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 usubd">
		<div class="row"> 
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:solid 1px #E0E0E0;">
				<h4>เพิ่มสัตว์</h4>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
				<?php echo $lbanimaltype.$selecttypeanimal->selectFromTB('typeanimal','typeanimal_id','typeanimal_name',$r['zoo_zoo_id']); ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
				<?php echo $lbanimalname; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtanimalname; ?>
			</div>
			<?php  }
			  if(!empty($_GET['id'])){ ?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 usubd">
		<div class="row"> 
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:solid 1px #E0E0E0;">
				<h4> </h4>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
				<?php echo $lbanimalname; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtanimalname; ?>
			</div>
			 <?php } ?>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<?php echo $lbanimalcm; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtanimalnamecm; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<?php echo $lbanimalsc; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txtanimalnamesc; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="margin-bottom:16px;">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
						<input type='hidden' name='subzoo_id' value="<?php echo $_GET['id']; ?>"/>
						<?php echo $submit; ?>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
				</div>
			</div>
		</div>		
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php echo $form->close();
	  endif; ?>