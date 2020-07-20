<script type='text/javascript'>
        $(document).ready(function(){
            $('#table').DataTable({
                "ordering": false,
                "lengthMenu": false,
                "searching": false,
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "ทุกหน้า"]],
                "language": {
                    "lengthMenu": "แสดง _MENU_ แถวต่อหน้า",
                    "zeroRecords": "ไม่พบข้อมูล",
                    "info": "แสดงหน้าที่ _PAGE_ ถึง _PAGES_",
                    "infoEmpty": "ไม่พบข้อมูล",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
    });
});
</script>
<?php
   if (!empty($_SESSION['user_name'])):
	include_once 'database/db_tools.php';
	include_once 'connect.php';
    date_default_timezone_set('Asia/Bangkok');
	$user_zoo = $_SESSION['subzoo_zoo_zoo_id'];
                $zoo = $_GET['zoo'];
                  $form = new form();
                $txtname = new textfield('zlfotmember_nameth','zlfotmember_nameth','form-control zlfot_inp','','');
	$button = new buttonok('','','btn btn-primary col-12 zloft_bt fas fa-search','submit');
	echo $form->open('','','col-12','','');
?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="maincontent" style="background-color: #FFFFFF;">
    
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pb-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-3">
                    <h4>ตรวจสอบรายชื่อสมาชิกสมาชิก</h4>
                </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
				<div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-5">
                                        <p class="pt-4 pl-3 mb-0" style="color: #4e555b">กรุณากรอกชื่อสมาชิก</p>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mt-3">
                                                <?php echo $txtname ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" id="" class="btn btn-primary col-12 zloft_bt" name="submit" value=""><i class="fas fa-search"></i></button>
                                    </div>

				</div>
                            </div>
                        </div>
                </div>
        

<?php
	echo $form->close();
	if (isset($_POST['submit'])){

            
                isset($_POST['zlfotmember_nameth'])?$zlfotmember_nameth  = $_POST['zlfotmember_nameth']:$zlfotmember_nameth='';
                $rs = $db->findByPK('zlfotmember','zlfotmember_nameth',"'$zlfotmember_nameth'")->executeAssoc();  
        if($rs){
                if($rs['zlfotmember_id']){
                   $member_id =  $rs['zlfotmember_id'];
                ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-4"></div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <a href="admin_index.php?url=zlfot_add_card.php&id=<?php echo $rs['zlfotmember_id'];?>" class="btn btn-success col-md-12 zloft_bt2" title="เพิ่มบัตรสมาชิกสโมสรผู้รักสวนสัตว์"><i class="fas fa-plus zloft-f2"></i><i class="far fa-id-card zloft-f ml-2"></i></a>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-4"></div>
                    </div>
                </div>
                    <?php } ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 mb-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-1"></div>
                        <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>หมายเลขสมาชิก :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php //echo $rs['zlfot_code']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>ประเภท :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php //echo $rs['typezlfot_name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>ชื่อ-นามสกุล :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['zlfotmember_nameth']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>หมายเลขโทรศัพท์ :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php echo $rs['zlfotmember_tel']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>วันที่สมัคร :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg- col-md-8 col-sm-8 col-8">
                                            <p><?php //echo $rs['zlfot_datestart']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                            <p>วันที่บัตรหมดอายุ :</p>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                            <p><?php //echo $rs['zlfot_dateend']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-1"></div>
                    </div>
                </div>
    <p>ประวัติการเป็นสมาชิก</p>
<?php
                                                         $columns = array('zlfotmember_nameth','zlfot_nameth','zlfot_tel','zlfot_datestart','zoo_name');
                                                         $rs = $db->findByPK34DESC('zlfotmember','zlfotcard','typezlfot','zlfotcard.zlfotmember_zlfotmember_id','zlfotmember.zlfotmember_id','zlfotcard.typezlfot_typezloft_id','typezloft.typezlfot_id','zlfotmember_zlfotmember_id',$member_id,'zlfotcard_stsfw','"C"','zlfotcard_id')->execute();
                                                        $grid = new gridView();
                                                                    //$grid->pr = 'zlfotmember_id';
                                                                    $grid->header = array('<b><center>รหัส</center></b>','<b><center>ชื่อ - นามสกุล</center></b>','<b><center>เบอร์โทรศัพท์</center></b>','<b><center>วันที่</center></b>','<b><center>จาก</center></b>','<b><center>#</center></b>');
                                                                    $grid->width = array('12%','15%','15%','25%','25%','8%');
                                                                    //$grid->edit = 'admin_index.php?url=zlfot_member.php';
                                                                    $grid->name = 'table';
                                                                    //$grid->edittxt ='รายละเอียด';
                                                                    $grid->renderFromDB($columns,$rs);


        }else{
        echo 'ไม่พบข้อมูล';
        }
        }
        
?>
        
    
</div>     
<?php endif;?>
<script>
        $( "#zlfotmember_nameth" ).autocomplete({ // ใช้งาน autocomplete กับ input text id=tags
            minLength: 0, // กำหนดค่าสำหรับค้นหาอย่างน้อยเป็น 0 สำหรับใช้กับปุ่ใแสดงทั้งหมด
            source: "zlfot_get_member.php", // กำหนดให้ใช้ค่าจากการค้นหาในฐานข้อมูล
            open:function(){ // เมื่อมีการแสดงรายการ autocomplete
                var valInput=$(this).val(); // ดึงค่าจาก text box id=tags มาเก็บที่ตัวแปร
                if(valInput!=""){ // ถ้าไม่ใช่ค่าว่าง
                    $(".ui-menu-item a").each(function(){ // วนลูปเรียกดูค่าทั้งหมดใน รายการ autocomplete
                        var matcher = new RegExp("("+valInput+")", "ig" ); // ตรวจสอบค่าที่ตรงกันในแต่ละรายการ กับคำค้นหา
                        var s=$(this).text();
                        var newText=s.replace(matcher, "<b>$1</b>");    //      แทนค่าที่ตรงกันเป็นตัวหนา
                        $(this).html(newText); // แสดงรายการ autocomplete หลังจากปรับรูปแบบแล้ว
                    });
                }
            },
            select: function( event, ui ) {
                // สำหรับทดสอบแสดงค่า เมื่อเลือกรายการ
              //console.log( ui.item ?
               //   "Selected: " + ui.item.label :
                //  "Nothing selected, input was " + this.value);
                $("#ipzpo_address").val(ui.item.id); // เก็บ id ไว้ใน hiden element ไว้นำค่าไปใช้งาน
                //setTimeout(function(){
                 // $("#h_input_q").parents("form").submit(); // เมื่อเลือกรายการแล้วให้ส่งค่าฟอร์ม ทันที
           //},500);
            }
        });
</script>

