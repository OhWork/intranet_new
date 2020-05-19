<?php
if (!empty($_SESSION['user_name'])):
  $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
  $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
   $datetime = date("Y-m-d H:i");
    $form = new form();
    $lbvdoname = new label('ชื่อเรื่อง หรือ ชื่อคลิบวีดีโอ');
    $lbly = new label('ลิ้งก์จากยูทูปไว้ในช่องนี้ (Link From Youtube)');
    $lbtypeDesign = new label('เลือกชนิด');
    $txtvdoname = new textfield('ipzpo_location','','form-control','','');
    $txtly = new textfield('vdo_link','','form-control','','');
    $txtdatestart = new datetimepicker('touristreport_date','datepicker','','form-control datetimepicker-input','date-form dayinbox col-md-12 form-horizontal control-group controls input-group','input-group date','','#datepicker','','');
    $submit = new buttonok("ยืนยัน","btnSubmit","btn btn-success col-md-12","");
     echo $form->open("form_reg","frmMain","","yt_insert_vdo.php","");
    ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3"> 
                        <h3>เพิ่มวีดีทัศน์</h3> 
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                        <p class="mb-0"><?php echo $lbvdoname; ?></p>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo $txtvdoname; ?>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                        <p class="mb-0"><?php echo $lbly; ?></p>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo $txtly; ?>
                    </div>
                    <input type='hidden' name='user_user_id' value='<?php echo $user_id; ?>'/>
                    <input type='hidden' name='log_user' value='<?php echo $log_user; ?>'/>
                    <input type='hidden' name='vdo_datereg' value='<?php echo $datetime; ?>'/>
                    <input type='hidden' name='user_id' value='<?php echo $_GET['id'];?>'/>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 mb-3">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <?php echo $submit;?>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3"></div>
        </div>
    </div>
<?php
    echo $form->close();
    endif;
?>
                        <script>
                            $(function () {
        $('#datepicker').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
            sideBySide: true,
            allowInputToggle: true,
	        locale:moment.locale('th'),
	        stepping: 30
        });
        });
                            </script>