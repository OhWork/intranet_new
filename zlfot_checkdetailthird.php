<?php
    if (!empty($_SESSION['user_name'])):
          $id =  $_GET['id'];
        $form = new form();
            $lbpost = new label('เลขไปรษณีย์');
    $txtpost = new textfield('zlfot_post','','form-control','','');
        $button = new buttonok("ตรวจสอบเรียบร้อย","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
            $rs = $db->findByPK44('zlfot','typezlfot','user','zoo','zlfot.user_user_id','user.user_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_id','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_id',$id)->executeRow();
            echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
            echo $lbpost;
            echo $txtpost;
           ?> <input type='hidden' name='zlfot_status' value='T'> 
               <input type='hidden' name='zlfot_id' value=<?php echo $id; ?>> <?php
            echo $button;
             echo $form->close();
             endif;
             ?> 
