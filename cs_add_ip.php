<?php
    if (!empty($_SESSION['user_name'])):
    $row = "<div class='row'>";
    $rowend = "</div>";
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $form = new form();
    $lbaddress = new label('IP : ');
    $lbzoo = new label('สวน / สำนัก : ');
    $lbname = new label('ชื่อหรือระบบ : ');
    $lbnickname = new label('ชื่อเล่น : ');
    $lbdetail = new label('อธิบาย : ');
    $lbcomname = new label('คอมพิวเตอร์ : ');
    $lbcomgroup = new label('กรุ๊ป : ');
    $lblocation = new label('สถานที่ : ');
    $lbstatus = new label('สถานะ : ');
    $lbtypetools = new label('ชนิดของอุปกรณ์ : ');
    $txtaddress = new textfieldreadonly('ipzpo_address','ip_address','','');
    $txtname = new textfield('ipzpo_user','ip_user','form-control css-require','','');
    $txtnickname = new textfield('ipzpo_nickname','','form-control','','');
    $txtcomname = new textfield('ipzpo_comname','','form-control','','');
    $txtname->value = 'IP-[ว่าง]';
    $txtlocation = new textfield('ipzpo_location','','form-control','','');
    $txtcomgroup = new textfield('ipzpo_comgroup','','form-control','','');
    $txtcomgroup->value = 'WorkGroup';
    $txtdetail = new textarea('ipzpo_detail','form-control','','','','','');
    $selectstatus = new SelectFromDB();
    $selectstatus->name = 'status_status_id';
    $selectstatus->lists = 'โปรดระบุ';
    $selecttools = new SelectFromDB();
    $selecttools->name = 'typetools_typetools_id';
    $selecttools->lists = 'โปรดระบุ';

    $button = new buttonok("ยืนยัน","","btn btn-success col-md-12","");


    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK2('ipzpo','subzoo','ipzpo_id',$id)->executeRow();
	$txtaddress->value = $r['ipzpo_address'];
	$txtname->value = $r['ipzpo_user'];
	$txtnickname->value = $r['ipzpo_nickname'];
	$txtcomname->value = $r['ipzpo_comname'];
	$txtcomgroup->value = $r['ipzpo_comgroup'];
                $txtlocation->value = $r['ipzpo_location'];
	$txtdetail->value = $r['ipzpo_detail'];
	$selecttools->value = $r['typetools_typetools_id'];
	$selectstatus->value = $r['status_status_id'];
	$zoo = $r['subzoo_zoo_zoo_id'];
                $subzoo = $r['subzoo_subzoo_id'];
	}
?>

<script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
                        
			var myOption = new Option('โปรดระบุ','')
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption

			<?php
			$intRows = 0;
			$rs = $db->findPK1ASC('subzoo','subzoo_enable',1,'subzoo_no')->execute();
			$intRows = 0;
			while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
			{
			$intRows++;
			?>
				x = <?=$intRows;?>;
				mySubList = new Array();

				strGroup = <?=$objResult["zoo_zoo_id"];?>;
				strValue = "<?=$objResult["subzoo_id"];?>";
				strItem = "<?=$objResult["subzoo_name"];?>";
				mySubList[x,0] = strItem;
				mySubList[x,1] = strGroup;
				mySubList[x,2] = strValue;
				if (mySubList[x,1] == SelectValue){
					var myOption = new Option(mySubList[x,0], mySubList[x,2])
					frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption
				}
			<?php
			}
			?>
		}
		function setDefault()
		{
			<?php
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$strZoo = $zoo;
				$strSubzoo = $subzoo;
			?>

				<?php
				/*** Default Zoo  ***/
				if($strZoo != "")
				{
				?>
					var objZoo=document.frmMain.ddlZoo;
					for (x=0;x<objZoo.length;x++)
					{
						if (objZoo.options[x].value=="<?=$strZoo?>")
						{
							objZoo.options[x].selected = true;
							break;
						}
					}

					ListSubzoo(<?=$strZoo;?>)
				<?php
				}

				/*** Default Subzoo  ***/
				if($strSubzoo != "")
				{
				?>
					var objSubZoo=document.frmMain.ddlSubzoo;
					for (x=0;x<objSubZoo.length;x++)
					{
						if (objSubZoo.options[x].value=="<?=$strSubzoo?>")
						{
							objSubZoo.options[x].selected = true;
							break;
						}
					}
				<?php
				}
				?>

		}
	</script>
<?php echo $form->open("form_reg","frmMain","","cs_insert_ip.php","");?>
<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6 csborder">
			<div class="row">
				<div class="col-md-12" style="padding-top: 16px;">
					<h4>เพิ่มรายการ IP address ขององค์การสวนสัตว์</h4>
					<hr></hr>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2" style="padding-top: 8px;"><label>สำนัก/สวน</label></div>
						<div class='col-md-10 form-group has-feedback'>
							<select class='form-control css-require' id="ddlZoo" name="subzoo_zoo_zoo_id" onChange = "ListSubzoo(this.value)">
							<option selected value="">-----โปรดระบุ-----</option>
							<?php
								$rs = $db->orderASC('zoo','zoo_id')->execute();
								while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
								{
							?>
								<option value="<?=$objResult["zoo_id"];?>"><?=$objResult["zoo_name"];?></option>
							<?php
								}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-2' style="padding-top: 8px;"><label>ฝ่าย</label></div>
						<div class='col-md-10 form-group has-feedback'>
							<select class='form-control css-require' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
						</div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbaddress ?></div>
						<div class='col-md-4 form-group has-feedback'><?php echo $txtaddress ?></div>
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbname ?></div>
						<div class='col-md-4 form-group has-feedback'><?php echo $txtname ?></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-2' style="padding-top: 8px;padding-right: 0px;"><?php echo $lbtypetools ?></div>
						<div class='col-md-4  form-group has-feedback'><?php echo $selecttools->selectFromTB('typetools','typetools_id','typetools_name',$r['typetools_typetools_id']) ?></div>
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbnickname ?></div>
						<div class='col-md-4'><?php echo $txtnickname ?></div>
					</div>
				</div>
				<div class='col-md-12' style="margin-bottom: 16px;">
					<div class="row">
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbcomname ?></div>
						<div class='col-md-4'><?php echo $txtcomname ?></div>
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbcomgroup ?></div>
						<div class='col-md-4'><?php echo $txtcomgroup ?></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lblocation ?></div>
						<div class='col-md-4'><?php echo $txtlocation ?></div>
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbstatus ?></div>
						<div class='col-md-4  form-group has-feedback'><?php echo $selectstatus->selectFromTB('status','status_id','status_name',$r['status_status_id']) ?></div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class="row">
						<div class='col-md-2' style="padding-top: 8px;"><?php echo $lbdetail ?></div>
						<div class='col-md-10'><?php echo $txtdetail ?></div>
					</div>
				</div>
				<input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
				<input type='hidden' name='ipzpo_id' value="<?php echo $_GET['id']; ?>"/>
				<div class='col-md-12 mt-3 pb-3'>
					<div class="row">
						<div class='col-md-4'></div>
						<div class='col-md-4'><?php echo $button ?></div>
						<div class='col-md-4'></div>
					</div>
				</div>
			</div>
		</div>
	<div class="col-md-3"></div>
</div>
<?php echo $form->close();
    endif;
?>
<script>
$(document).ready(function() {

	var test = document.getElementById('ip_user');
	$("#ip_user").keyup(function() {
// 		console.log(test.value.length);
		if(test.value.length < 1){
// 			console.log('เย่');
			$("#ip_user").val('IP-[ว่าง]');
		}
	});
});
</script>
