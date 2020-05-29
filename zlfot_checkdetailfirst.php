<?php
    if (!empty($_SESSION['user_name'])):
          $id =  $_GET['id'];
        $form = new form();
        $button = new buttonok("ตรวจสอบเรียบร้อย","","btn btn-success btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
            $rs = $db->findByPK44('zlfot','typezlfot','user','zoo','zlfot.user_user_id','user.user_id','zlfot.typezlfot_typezlfot_id','typezlfot.typezlfot_id','user.subzoo_zoo_zoo_id','zoo.zoo_id','zlfot_id',$id)->executeRow();
            echo $form->open("form_reg","frmMain","col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3","zlfot_insert_updatestatus.php","");
               echo "ประเภทบัตร ".$rs['typezlfot_name']."</br>";
             echo "รหัส ".$rs['zlfot_code']."</br>";
            echo "ชื่อ ".$rs['zlfot_nameth']."</br>";
             echo  "ชื่ออังกฤษ ".$rs['zlfot_nameen']."</br>";
            echo  "ที่อยู่ ".$rs['zlfot_address']."</br>";
            echo  "วันที่ลงทะเบียนเข้าสู่ระบบ ".$rs['zlfot_datereg']."</br>";
            echo  "วันที่สมัคร ".$rs['zlfot_datestart']."</br>";
            echo  "วันที่หมดอายุ ".$rs['zlfot_dateend']."</br>";
            echo  "โดย ".$rs['user_name']." ".$rs['user_last']."</br>";
            echo "หน่วยงาน ".$rs['zoo_name']; 
           ?> <input type='hidden' name='zlfot_status' value='P'> 
               <input type='hidden' name='zlfot_id' value=<?php echo $id; ?>> <?php
            echo $button;
             echo $form->close();
             endif;
             ?> 
