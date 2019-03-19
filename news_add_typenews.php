<?php
  $form = new form();
  $id = $_GET['id'];
  $lbtypeNews = new label("ชื่อชนิดข่าวสาร");
  $lbtypeNewsno = new label("ลำดับ");
  $lbtypeNewsenable = new label("สถานะการใช้งาน");
  $txttypeNews = new textfield('typeNews_name','','form-control css-require','');
  $txttypeNewsno = new textfield('typeNews_no','','form-control css-require','');
  $radiotypeNewsenable = new radioGroup();
  $radiotypeNewsenable->name = 'typeNews_enable';
  if(empty($id)){
    	$radiotypeNewsenable->add('ใช้งานได้',1,'');
    	$radiotypeNewsenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
  $submit = new buttonok("ยืนยัน","","btn btn-success col-md-12","");

  if(!empty($_GET['id'])){
	$r = $db->findByPK('typenews','typeNews_id',$id)->executeRow();
	$txttypeNews->value = $r['typeNews_name'];
	$txttypeNewsno->value = $r['typeNews_no'];
  if($r["typeNews_enable"] == 1){
    	$radiotypeNewsenable->add('ใช้งานได้',1,'checked');
    	$radiotypeNewsenable->add('ไม่สามารถใช้งานได้',0,'');
    	}else if($r['typeNews_enable'] == 0){
        $radiotypeNewsenable->add('ใช้งานได้',1,'');
        $radiotypeNewsenable->add('ไม่สามารถใช้งานได้',0,'checked');
    	}
    }
echo $form->open("form_reg","form","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","news_insert_typenews.php",""); ?>
<div class="row">
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 usubd">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-2" style="border-bottom:solid 1px #E0E0E0;">
				<h4>เพิ่มชนิดข่าวสาร</h4>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3'>
				<?php echo $lbtypeNews; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txttypeNews; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<?php echo $lbtypeNewsno; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 form-group has-feedback'>
				<?php echo $txttypeNewsno; ?>
			</div>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding-top: 14px;">
						<?php echo $lbtypeNewsenable; ?>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8" style="padding-top: 14px;">
						<?php echo $radiotypeNewsenable; ?>
					</div>
				</div>
		    </div>
			<input type='hidden' name='typeNews_id' value='<?php echo $_GET['id'];?>'/>
			<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3' style="margin-bottom: 16px;">
				<div class='row'>
					<div class='col-md-4'></div>
					<div class='col-md-4'><?php echo $submit ?></div>
					<div class='col-md-4'></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
</div>
<?php echo $form->close();
?>
