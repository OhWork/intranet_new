<?php
    if (!empty($_SESSION['user_name'])):
          $id =  $_GET['id'];
        $form = new form();
        $button = new buttonok("ดำเนินการพิมพ์","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
            $rs = $db->findByPK44('zlfot','typezlfot','user','zoo','zlfot.user_user_id','user.user_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_id','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_id',$id)->executeRow();
            echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
 ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row">
	<div class="col-xl-2 col-lg-2 col-md-1"></div>
	<div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12" style="padding-top:16px;background-color:#ffffff;border:solid 1px #E0E0E0;border-radius:7px;font-size: 18px;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
		<div class="row">
                    <h2>พิมพ์บัตรสมาชิก</h2>
		</div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
		<div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-2"></div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php echo $rs['zlfot_code']; ?> <?php echo $rs['typezlfot_name'];?>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php echo $rs['zlfot_datestart']; ?> - <?php echo $rs['zlfot_dateend']; ?>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php echo $rs['zlfot_nameen']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-2"></div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
		<div class="row">
                <input type='hidden' name='zlfot_status' value='S'> 
                <input type='hidden' name='zlfot_id' value=<?php echo $id; ?>>
                    <div class="col-xl-3 col-lg-2 col-md-2"></div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <?php echo $button; ?>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4"></div>
                </div>
            </div>   
        </div>
        <div class="col-xl-2 col-lg-2 col-md-1"></div>
    </div>
</div>
            <?php echo $form->close();
            endif;
            ?> 
