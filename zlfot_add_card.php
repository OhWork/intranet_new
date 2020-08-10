<?php
    if (!empty($_SESSION['user_name'])):
     $id = $_SESSION['subzoo_zoo_zoo_id'];
    $member_id = $_GET['id'];
    $checkcard = $db->findByPK12('zlfotcard','zlfotcard_status','"Y"','zlfotmember_zlfotmember_id',$member_id)->executeAssoc();
    $form = new form();
    $lbdatestart = new label('วันที่สมัคร');
    $lbcode = new label('เลขที่สมาชิก');
    $lbevent = new label('ชื่องานกิจกรรม');
    $lbdatereg = new label('วันที่รับสมัคร');
    $lbdateend  = new label('วันที่หมดอายุ');
    $lbtype = new label('ประเภทสมาชิก');
     $lbzoo = new label('หน่วยงานที่ส่งข้อมูล');
     $lbreceipt = new label('เลขที่ใบเสร็จสโมสรฯ (เล่มที่/เลขที่)');
    $lbdetail = new label('หมายเหตุ');
      $txtreceipt = new textfield('zlfotcard_receipt','','col-12 form-control','');
     $txtdetail = new textArea('zlfotcard_detail','form-control','','','5','5','');
     $txtdatestart = new datetimepicker('zlfotcard_datestart','datetimepicker1','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker2','#datetimepicker1','','');
     $txtdatenewstart = new datetimepicker('zlfotcard_datenewstart','datetimepicker2','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','datetimepicker2','#datetimepicker2','','');
     $selectevent = new SelectFromDB();
  $selectevent->name = 'eventzlfot_eventzlfot_id';
  $selectevent->lists = 'โปรดระบุ กิจกรรม';
    $radiotypezlfot = new radioGroup();
    $radiotypezlfot->name = 'typezlfot_typezlfot_id';
           $rstype = $db->findAll('typezlfot')->execute();
           foreach($rstype as $type){
    	$radiotypezlfot->add($type['typezlfot_name'],$type['typezlfot_code'],'','');
           }
     if($id >= 1 && $id <= 10){
            $zoo_code = '001';
            $zoo = "องค์การสวนสัตว์แห่งประเทศไทย";
    }else{
         $rszoo =$db->findByPK('zoo','zoo_id',$id)->executeAssoc();
             $zoo_code = $rszoo['zoo_code'];
            $zoo = $rszoo['zoo_name'];
    }
    $button = new buttonok("เพิ่มบัตรสมาชิก","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
    echo $form->open("form_reg","","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","zlfot_insert_card.php","");
 ?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-top:8px;" id="maincontent">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
			<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 alltxh">
                    <?php
                       if($checkcard){
                           ?>
                                           <h4>ต่ออายุสมัครสมาชิกสโมสรผู้รักสวนสัตว์แห่งประเทศไทย</h4> 
                           <?php
                                           }else{
                            ?>  
                                        <h4>สมัครสมาชิกสโมสรผู้รักสวนสัตว์แห่งประเทศไทย</h4>
                             <?php    
                                        }
                                        ?>
					
		</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbzoo."   ".$zoo;  ?>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbtype; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $radiotypezlfot;?>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbevent; ?> <a class="text-success" style="float: right;" href="admin_index.php?url=zlfot_show_event.php">เพิ่มงานกิจกรรม <i class="fas fa-plus zloft-f2"></i></a>
                                </div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $selectevent->selectFromTB('eventzlfot','eventzlfot_id','eventzlfot_name',$r['eventzlfot_eventzlfot_id']);;?>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbdatestart; ?>  
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
                                        <?php 
                                        $checkdateend = $checkcard['zlfotcard_dateend'];
                                        if($checkdateend){
                                            if(date("Y-m-d") < $checkdateend){
                                                ?>
                                                <div class="alert alert-success col-12" role="alert">ไม่ต้องระบุวัน เนื่องจากไม่เลยวันหมดอายุ</div>
                                                <input type='hidden' name='zlfotcard_datenewstart' value='<?php echo $checkdateend; ?>'/>
                                                <input type='hidden' name='checkcard_id' value='<?php echo $checkcard_id; ?>'/>
                                                <input type='hidden' name='changestatus' value='<?php echo $checkcard['zlfotcard_id']; ?>'/>
                                                <input type='hidden' name='zlfotcard_status' value='N'/>
                                                <?php
                                                $checkcard_id = $checkcard['zlfotmember_zlfotmember_id'];
                                            }else if(date("Y-m-d") >= $checkdateend){ ?>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="row">
                                                        <?php $checkcard_id = $checkcard['zlfotmember_zlfotmember_id'];?>
                                                        <input type='hidden' name='checkcard_id' value='<?php echo $checkcard_id; ?>'/>
                                                       <input type='hidden' name='changestatus' value='<?php echo $checkcard['zlfotcard_id']; ?>'/>
                                                       <input type='hidden' name='zlfotcard_status' value='N'/>
                                                       <div class="alert alert-danger col-12" role="alert">เนื่องจากเลยกำหนดการต่ออายุ กรุณาเลือกวันที่ต่ออายุสมาชิกสโมสรฯ</div>
                                                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 pr-0">
                                                            <div class="row">
                                                                <?php echo $txtdatestart;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }else{ ?>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 pr-0">
                                            <div class="row">
                                        <?php echo $txtdatenewstart; ?>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbreceipt; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
                                        <?php echo $txtreceipt; ?>
				</div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1 showmsg">
					<?php echo $lbdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 showmsg">
					<?php echo $txtdetail; ?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="margin-bottom:16px;">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                    
      
                                                <input type='hidden' name='zoo_code' value='<?php echo $zoo_code; ?>'/>
                                                <input type='hidden' name='zlfotmember_zlfotmember_id' value='<?php echo $member_id; ?>'/>
                                                <input type='hidden' name='zlfotcard_status' value='N'/>
                                                <input type='hidden' name='zlfotcard_stsfw' value='R'>
                                                <input type='hidden' name='zlfotcard_datereg' value='<?php echo date("Y-m-d"); ?>'/>
    						<input type='hidden' name='user_user_id' value='<?php echo $_SESSION['user_id']; ?>'/>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
							<?php echo $button; ?>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
					</div>
				</div>
                                                        

			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
	</div>
</div>
<?php echo $form->close();
              endif;
              ?>
<script>
	$(function () {
        $('#datetimepicker1').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
    });
    </script>