<?php
    if (!empty($_SESSION['user_name'])):
    $row = "<div class='row'>";
    $rowend = "</div>";
    $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
    $form = new form();
    $lbaddress = new label('IP : ');
    $lbNAT = new label('NAT : ');
    $lbzoo = new label('สวน / สำนัก : ');
    $lbname = new label('ชื่อหรือระบบ : ');
    $lbdetail = new label('อธิบาย : ');
     $lbtypetools = new label('ชนิดของอุปกรณ์ : ');
//     $txtaddress = new textfield('iptools_address','','form-control css-require','','');
    $txtaddress = new textfieldreadonly('iptools_address','','','');
    $txtNAT = new textfield('iptools_NAT','','form-control','','');
    $txtname = new textfield('iptools_name','','form-control css-require','','');
    $txtname->value = 'ว่าง';
    $txtdetail = new textfield('iptools_detail','','form-control','','');
    $selecttools = new SelectFromDB();
    $selecttools->name = 'typetoolsforip_typetoolsforip_id';
    $selecttools->lists = 'โปรดระบุ';

    $button = new buttonok("ยืนยัน","","btn btn-success col-md-12","");


    if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$r = $db->findByPK2('iptools','subzoo','iptools_id',$id)->executeRow();
	$txtaddress->value = $r['iptools_address'];
	$txtNAT->value = $r['iptools_NAT'];
	$txtname->value = $r['iptools_name'];
	$txtdetail->value = $r['iptools_detail'];
	$selecttools->value = $r['typetoolsforip_typetoolsforip_id'];
	$zoo = $r['subzoo_zoo_zoo_id'];
    $subzoo = $r['subzoo_subzoo_id'];
	}
?>
<script language = "JavaScript">

		//**** List subzoo (Start) ***//
		function ListSubzoo(SelectValue)
		{
			frmMain.ddlSubzoo.length = 0
// 			frmMain.ddlAmphur.length = 0  (ไม่ใช้)

			//*** Insert null Default Value ***//
			var myOption = new Option('โปรดระบุ','')
			frmMain.ddlSubzoo.options[frmMain.ddlSubzoo.length]= myOption

			<?
			$intRows = 0;
			$rs = $db->orderASC('subzoo','subzoo_id')->execute();
// 			$strSQL = "SELECT * FROM subzoo ORDER BY subzoo_id ASC ";
// 			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
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
			<?
			}
			?>
		}
</script>


</head>

	<script language="JavaScript">
		function setDefault()
		{
			<?
				/*** ค่า Default ที่ได้จากการจัดเก็บ ***/
				$strZoo = $zoo;
				$strSubzoo = $subzoo;
			?>

				<?
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
				<?
				}
				?>

				<?
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
				<?
				}
				?>

		}
	</script>
<?php echo $form->open("form_reg","frmMain","","cs_insert_iptools.php","");?>
<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6 csborder" style="padding-bottom: 16px;">
			<div class="row">
				<div class="col-md-12" style="padding-top: 16px;">
					<h4>เพิ่มรายการ IP address ของอุปกรณ์ต่างๆ</h4>
					<hr></hr>
				</div>
				<div class="col-md-12">
					<div class='row'>
						<div class='col-md-4'><label>สำนัก/สวน :</label></div>
						<div class='col-md-8 form-group has-feedback'>
							<select class='form-control css-require' id="ddlZoo" name="subzoo_zoo_zoo_id" onChange = "ListSubzoo(this.value)">
							<option selected value="">-----โปรดระบุ-----</option>
						<?
							$rs = $db->orderASC('zoo','zoo_id')->execute();
							while($objResult = mysqli_fetch_array($rs,MYSQLI_ASSOC))
							{
						?>
							<option value="<?=$objResult["zoo_id"];?>"><?=$objResult["zoo_name"];?></option>
						<?
							}
						?>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class='row'>
						<div class='col-md-4'><label>ฝ่าย :</label></div>
						<div class='col-md-8 form-group has-feedback'>
							<select class='form-control css-require' id="ddlSubzoo" name="subzoo_subzoo_id"></select>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class='col-md-4'><?php echo $lbaddress ?></div>
						<div class='col-md-8 form-group has-feedback'><?php echo $txtaddress ?></div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class='col-md-4'><?php echo $lbNAT ?></div>
						<div class='col-md-8 form-group has-feedback'><?php echo $txtNAT ?></div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class='col-md-4'><?php echo $lbname ?></div>
						<div class='col-md-8 form-group has-feedback'><?php echo $txtname ?></div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class='col-md-4'><?php echo $lbtypetools ?></div>
						<div class='col-md-8 form-group has-feedback'><?php echo $selecttools->selectFromTB('typetoolsforip','typetoolsforip_id','typetoolsforip_name',$r['typetoolsforip_typetoolsforip_id']) ?></div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class='col-md-4'><?php echo $lbcomname ?></div>
						<div class='col-md-8'><?php echo $txtcomname ?></div>
					</div>
				</div>
				<div class="col-md-12" style="padding-bottom: 16px;">
					<div class="row">
						<div class='col-md-4'><?php echo $lbdetail ?></div>
						<div class='col-md-8'><?php echo $txtdetail ?></div>
					</div>
				</div>
				<input type='hidden' name='iptools_id' value='<?php echo $_GET['id']; ?>'/>
				<input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
				<div class="col-md-12">
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
